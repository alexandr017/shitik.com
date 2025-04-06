(function () {

    document.querySelectorAll('.display-icon').forEach(el => {
        el.addEventListener('click', () => {
            el.classList.toggle('active');
            document.querySelectorAll('.display-icon').forEach(_el => {
                if (_el !== el) {
                    _el.classList.remove('active');
                }
            });
            let display = el.getAttribute('data-display');

            let formData = new FormData();
            formData.append('display', display);
            fetch("/fetch/library/display",
                {
                    body: formData,
                    method: "post"
                }).then((res) => {
                return res.text().then((value) => {
                    document.getElementById('library').innerHTML = value;
                    if (display === 'shelf') {
                        initShelf();
                        addLinks();
                    } else if (display === 'grid') {
                        initShelf();
                        addLinks();
                    } else {
                        addLinks();
                    }
                }).catch((err) => {
                    console.log(err);
                })
            });

        });
    });


    let initShelf = () => {

        document.querySelectorAll('.book').forEach((el) => {
            let id = el.getAttribute('data-id');
            el.addEventListener('click', () => {
                if (id in window.BOOK_STATE) {
                    document.querySelector('.modal-book-info').innerHTML = window.BOOK_STATE[id];
                    openModal(id);
                    addLinks();
                } else {
                    loadBook(id, openModal);
                    addLinks();
                }
            });
        });



        let loadBook = (id, callback) => {

            let formData = new FormData();
            formData.append('id', id);
            formData.append('lang', window.LANG);

            fetch("/fetch/library/load-book",
                {
                    body: formData,
                    method: "post"
                }).then((res) => {
                return res.text().then((value) => {
                    window.BOOK_STATE[id] = value;
                    document.querySelector('.modal-book-info').innerHTML = value;
                    addLinks();
                    if (callback) callback(id);
                }).catch((err) => {
                    console.log(err);
                })
            });
        };

    }

    let openModal = (id) => {
        let modal = document.querySelector(`.modal[data-modal="1"]`);
        let overlay = document.querySelector('.js-overlay-modal');

        if (modal && overlay) {
            modal.classList.add('active');
            overlay.classList.add('active');
            document.querySelector('body').style.overflow = 'hidden';
        }
    };

    let addLinks = () => {
        document.querySelectorAll('.is-isset-page').forEach(el => {
            el.addEventListener('click', () => {
                let link = el.querySelector('a').href;
                 window.location.href = link;
            });
        });
    }

    addLinks();


})();





