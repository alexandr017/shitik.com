<?php
$title = $page['title'];
$metaDescription = $page['meta_description'];
//if ($_SERVER['REQUEST_URI'] == '/ru/library?show_type=full-list') {
//    $showType = 'full-list';
//} elseif ($_SERVER['REQUEST_URI'] == '/ru/library?show_type=short-list') {
//    $showType = 'short-list';
//} else {
//    $showType = 'bookshelf';
//}
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/sidebar', 'modules/footer', 'modules/modal', 'library', 'modules/library-'.$showType]);

echo renderView('v3/modules/head.php', compact('title', 'metaDescription'));
?>
<body>
<?php echo renderView('v3/modules/menu.php'); ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/ru">Главная</a></li>
        <li class="active">Библиотека</li>
    </ul>

    <div class="content">
        <p>В 2020 года я ставил над собой эксперимент и заставлял себя читать книги. Уже через пару месяцев я подсел на книги и с тех пор прочитал <b><?php echo count($books) ?> книг(и)</b> и продолжаю охотно читать далее.</p>
        <p>По умолчанию книги представлены в виде <a href="/ru/library">книжной полки</a>, но вы можете переключить их в режим <a href="/ru/library?show_type=short-list">свернутого списка</a> или <a href="/ru/library?show_type=full-list">списка с расширенном описанием</a>.</p>
    </div>

    <?php
    $viewFile = 'ru/library-show-types/'.$showType.'.php';
    if(file_exists(DOCUMENT_ROOT . '/pages/' . $viewFile)) {
        include DOCUMENT_ROOT . '/pages/' . $viewFile;
    }
    ?>

    <br>
    <div class="content">

        <p style="padding: 7px;background: #e0bffa;border-radius: 5px;">
            Не так давно я завел <a style="text-decoration: none" href="https://www.instagram.com/books_re_views/" target="_blank"><b>Instagram-аккаунт @books_re_views</b></a>,
            в котором публикую все прочитанные книги и кратко их разбираю. Также там можно встретить рейтинг рекомендуемых к прочтению книг в упорядоченным списке.
            Часть рекомендованных книг без сортировки и приоритетов расположены ниже.
        </p>

        <p>Книги, которые я рекомендую для прочтения всем не зависимо от сферы деятельности: </p>
        <ul>
            <li>Кэрол Теврис, Эллиот Аронсон: <b>Ошибки, которые были допущены (но не мной)</b></li>
            <li>Брайана Трейси: <b>Оставьте брезгливость съешьте лягушку</b></li>
            <li>Ким Скотт: <b>Радикальная прямота. Как управлять не теряя человечности</b></li>
            <li>Джордж Клейсон: <b>Самый богатый человек в Вавилоне</b></li>
            <li>Дэйв Логан: <b>Лидер и племя</b></li>
            <li>Ричард Брэнсон: <b>К черту все! Берись и делай!</b></li>
            <li>Роберт Кийосаки: <b>Богатый папа, бедный папа</b></li>
            <li>Маршалл Розенберг: <b>Насильственное общение язык жизни</b></li>
            <li>Кэрол Дуэк: <b>Гибкое сознание. Новый взгляд на психологию развития взрослых и детей</b></li>
            <li>Роберт Сапольски: <b>Почему у зебр не бывает инфаркта</b></li>
            <li>Мария Гаранина: <b>Трудно быть папой, или Веселые будни семьи Борджиа</b></li>
            <li>Джеймс Хьюмс: <b>Секреты великих ораторов. Говори как Черчилль, держись как Линкольн</b></li>
            <li>Ольга Мироненко, Елена Мироненко: <b>Ахилл не носил одноразовых бахил. Понятное руководство по экологичному образу жизни</b></li>
            <li>Джеймс Клиро: <b>Атомные привычки. Как приобрести хорошие привычки и избавиться от плохи</b></li>
            <li>Джон Грэй: <b>Мужчины с Марса, женщины с Венеры</b></li>
            <li>Крис Бэйли: <b>Мой продуктивный год</b></li>
            <li>Наполеон Хилл: <b>Думай и богатей</b></li>
        </ul>
        <br>
        <p>А так же рекомендую книги кому интересна IT индустрия со стороны:</p>
        <ul>
            <li>Кори Пайн: <b>Живи, вкалывай, сдохни. Репортаж с темной стороны</b></li>
            <li>Джон Каррейру: <b>Дурная кровь</b></li>
            <li>Кевин Митник: <b>Искусство быть невидимым. Как сохранить приватность в эпоху BigData</b></li>
            <li>Питер Тиль, Блейк Мастерс: <b>От нуля до единицы: заметки о стартапах, или как построить будущее</b></li>
            <li>Эд Кэтмелл, Эми Уоллес: <b>Корпорация гениев. Как управлять командой творческих людей</b></li>
        </ul>
    </div>



    <div class="js-overlay-modal overlay"></div>
    <div class="modal" data-modal="1">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="modal__title"></div>
        <div class="modal__body">
            <table>
                <tr>
                    <td>
                        <span>Название: <b id="book-title"></b></span><br>
                        <span>Автор: <b id="book-author"></b></span><br>
                        <span>Год публикации: <b id="book_year_of_publishing"></b></span><br>
                        <span>Год прочтения: <b id="book_year_of_reading"></b></span><br>
                        <span>Издательство: <b id="book_publishing_house"></b></span><br>
                        <span>Мой рейтинг книге: <b id="book_my_rating"></b></span><br>
                        <span>Мой рейтинг автору: <b id="book_author_rating"></b></span><br>
                        <span>Количество прочтений: <b id="book_number_of_reads"></b></span><br>
                        <span>Количество страниц: <b id="book_total_pages"></b></span><br>
                        <span>Язык: <b id="book_language"></b></span>
                    </td>
                    <td>
                        <img id="book_preview" src="/themes/v3/images/index/logo.svg" alt="preview">
                    </td>
                </tr>
            </table>
        </div>
    </div>

</main>
<?php echo renderView('v3/footer.php'); ?>
<?php echo renderView('v3/js-scripts.php'); ?>

<script defer src="/themes/v3/js/modal.js"></script>
<script>
    window.BOOK_STATE = [];
</script>
<script defer src="/themes/v3/js/library-bookshelf.js"></script>
</body>
</html>


