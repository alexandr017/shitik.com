document.querySelectorAll('.book').forEach((el) => {
    let id = el.getAttribute('data-id');
    el.addEventListener('click', () => {
        if (id in window.BOOK_STATE) {
            render(window.BOOK_STATE[id]);
        } else {
            loadBook(id);
        }
    });
});

let loadBook = (id) => {

    let formData = new FormData();
    formData.append('id', id);

    fetch("/load-book",
        {
            body: formData,
            method: "post"
        }).then((res) => {
        return res.json().then((value) => {
            window.BOOK_STATE[id] = value;
            render(value);
        }).catch((err) => {
            console.log(err);
        })
    });
};

let render = (book) => {
    document.querySelectorAll('.modal__body')[0].style.background = book.color;
    document.querySelectorAll('#book-title')[0].innerHTML = book.title;
    document.querySelectorAll('#book-author')[0].innerHTML = book.authors;
    document.querySelectorAll('#book_year_of_publishing')[0].innerHTML = book.year_of_publishing;
    document.querySelectorAll('#book_year_of_reading')[0].innerHTML = book.year_of_reading;
    document.querySelectorAll('#book_publishing_house')[0].innerHTML = book.publishing_house;
    document.querySelectorAll('#book_my_rating')[0].innerHTML = book.my_rating;
    document.querySelectorAll('#book_author_rating')[0].innerHTML = book.author_rating;
    document.querySelectorAll('#book_number_of_reads')[0].innerHTML = book.number_of_reads;
    document.querySelectorAll('#book_total_pages')[0].innerHTML = book.total_pages;
    document.querySelectorAll('#book_language')[0].innerHTML = book.language;
    document.querySelectorAll('#book_preview')[0].src = book.cover_image;
}
