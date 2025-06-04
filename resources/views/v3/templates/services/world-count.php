<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/footer']);
echo renderView('v3/modules/head.php');
?>
    <body>
    <?php echo renderView('v3/modules/menu.php'); ?>
    <main class="container">
        <ul class="breadcrumb">
            <li><a href="/ru">Главная</a></li>
            <li><a href="/ru/blog">Блог</a></li>
            <li class="active">Количество слов в тексте</li>
        </ul>
        <div class="content">
            <h1>Количество слов в тексте</h1>
            <style>
                textarea {
                    width: 100%;
                    height: 150px;
                }
            </style>
            <textarea id="textInput" placeholder="Введите текст..."></textarea>
            <p>Количество слов: <span id="wordCount">0</span></p>

            <script>
                function countWords(text) {
                    let words = text.trim().match(/\S+/g);
                    return words ? words.length : 0;
                }

                document.getElementById("textInput").addEventListener("input", function () {
                    let wordCount = countWords(this.value);
                    document.getElementById("wordCount").textContent = wordCount;
                });
            </script>
        </div>
    </main>
    <?php echo renderView('v3/modules/footer.php'); ?>
    <?php echo renderView('v3/modules/js-scripts.php'); ?>
    </body>
    </html>
<?php die(); ?>