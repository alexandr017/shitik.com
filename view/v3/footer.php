<img src="/themes/v3/images/up-arrow.svg" alt="Вверх" id="toTopButton">
<footer>
    <a href="/ru/site">О сайте</a>
    <a href="/ru/sitemap">Карта сайта</a>
</footer>

<div class="telegram-vote" id="telegram-vote">
    <p>Стоит ли мне создать Telegram-канал для публикации постов о путешествиях, фильмах, науке и других умных мыслях?</p>
    <div style="text-align: center">
        <button id="yesVote">Да, я бы подписался</button>
        <button id="noVote">Нет, мне это не интересно</button>
    </div>

</div>

<?php include DOCUMENT_ROOT . '/view/v3/micro-data.php'; ?>
<script>
    document.getElementsByClassName('mob-menu-label')[0].addEventListener('click', function () {
        document.getElementsByClassName('menu-ul')[0].classList.toggle('show');
    });

    document.getElementById('toTopButton').onclick = function () {
        window.scrollTo(0, 0);
    };

    window.onscroll = function() {
        if (window.pageYOffset != 0) {
            document.getElementById('toTopButton').style.display = 'inline-block';
        } else {
            document.getElementById('toTopButton').style.display = 'none';
        }
    };

    window.addEventListener("scroll", () => {
        if (this.scrollY != 0) {
            document.getElementById('toTopButton').style.display = 'inline-block';
        } else {
            document.getElementById('toTopButton').style.display = 'none';
        }
    });

</script>

<script>
    let showAskForm = localStorage.getItem('telegram-vote');
    if (!showAskForm) {
        document.getElementById('telegram-vote').style.display = 'block';
    }

    document.getElementById('yesVote').onclick = function () {
        document.getElementById('telegram-vote').style.display = 'none';
        sendVote('yes');
        localStorage.setItem('telegram-vote', 'yes');
    };
    document.getElementById('noVote').onclick = function () {
        document.getElementById('telegram-vote').style.display = 'none';
        sendVote('no');
        localStorage.setItem('telegram-vote', 'no');
    };

    let sendVote = function (vote) {
        let data = {
            vote: vote
        };
        fetch("/telegram-vote.php", {
            method: "post",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams(data).toString()
        });
    }
</script>