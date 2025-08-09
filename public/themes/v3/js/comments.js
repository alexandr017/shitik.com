document.addEventListener('DOMContentLoaded', function() {
    const showFormBtn = document.querySelector('.show-comment-form');
    const form = document.querySelector('.form');
    let recaptchaLoaded = false;

    // Показ формы
    showFormBtn.addEventListener('click', function() {
        form.style.display = form.style.display === 'none' || form.style.display === '' ? 'block' : 'none';
        showFormBtn.remove();

        if (!recaptchaLoaded) {
            const script = document.createElement('script');
            script.src = "https://www.google.com/recaptcha/api.js?render=" + window.RECAPTCHA_SITE_KEY;
            script.async = true;
            script.defer = true;
            script.onload = function() {
                recaptchaLoaded = true;
                console.log('reCAPTCHA загружена');
            };
            document.body.appendChild(script);
        }
    });

    // Обработка отправки формы
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute(window.RECAPTCHA_SITE_KEY, {action: 'submit'}).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
                const formData = new FormData(form);
                formData.set('g-recaptcha-response', token);
                fetch('/fetch/comments/store', {
                    method: 'POST',
                    body: formData
                })
                    .then(res => res.json())
                    .then(data => {
                        console.log(data);
                        if (data.result) {
                            form.style.display = 'none';
                            form.reset();
                            const successMessage = document.createElement('div');
                            successMessage.classList.add('success-message');
                            successMessage.textContent = window.successMessage;
                            form.parentNode.insertBefore(successMessage, form);
                            return false;
                        } else {
                            const errorMessage = document.createElement('div');
                            errorMessage.classList.add('error-message');
                            errorMessage.textContent = window.errorMessage;
                            form.parentNode.insertBefore(errorMessage, form);
                            return false;
                        }
                    });
            });
        });
    });
});