<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content']);
include DOCUMENT_ROOT . '/view/v3/head.php';
$posts = getPosts();
?>
<body>
<?php include DOCUMENT_ROOT . '/view/v3/menu.php'; ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/ru">Главная</a></li>
        <li><a href="/ru/blog">Блог</a></li>
        <li class="active"><?php echo getSeoField('h1') ?></li>
    </ul>
    <article class="content">
        <h1><?php echo getSeoField('h1') ?></h1>
        <time datetime="<?php echo getSeoField('date.htmlFormat') ?>" class="date-pub"><?php echo getSeoField('date.viewFormat') ?></time>
        <span class="h2">Содержание</span>
        <ul class="post-nav">
            <li><a href="#a-1">Введение</a></li>
            <li><a href="#a-2">План антидеградации</a></li>
            <li><a href="#a-3">Стикеры</a></li>
            <li><a href="#a-4">Менеджер по заметкам</a></li>
            <li><a href="#a-5">Спринты</a></li>
            <li><a href="#a-6">Выводы</a></li>
        </ul>


        <h2 id="a-1">Введение</h2>
        <p>На протяжении последних 7 лет я активно планирую различные долгосрочные цели 📝 на каждый год, а также последних лет 5 я активно <a href="/ru/blog/planning">планирую</a> и расписываю краткосрочные задачи. За последнюю пятилетку мои инструменты 📑 претерпели немало изменений в поисках наиболее эффективного управления своими задачами.</p>

        <h2 id="a-2">План антидеградации</h2>
        <p>Все началось с того, что все свои цели и увлечения, которые хотел себе привить и заниматься ими я размещал прямо на рабочем столе в виде фонового изображения 🌅. Это было удобно, все нужные для тебя пути развития себя и своих увлечений были всегда перед глазами. Такой схемы я придерживался на протяжении 2ух лет (2019 и 2020 года). У данных схем у меня даже было чёткое название “План антидеградации”. В подобных схемах были как свои плюсы, так и недостатки. Плюсы я уже перечислил: все глобальные задачи и цели были перед глазами, ты всегда обращаешь на них внимание и значит они не лежат по долгу, а ты берешься их выполнять и тем самым приближаешь себя к поставленным целям. Минусами данного подхода является то, что необходимо было где-то хранить краткосрочнее задача и цели 🤔: ведь любая крупная задача всегда разбивается на несколько мелких и держать все мелкие задачи в голове на протяжении короткого времени невозможно, не говоря уже о неделях и месяцах.</p>
        <div class="shadow"><img class="post-img" src="/images/blog/2023/scrum-and-sprint-life/scrum-and-sprint-life-1.jpg" alt="image" loading="lazy"></div>

        <h2 id="a-3">Стикеры</h2>
        <p>На смену “планов антидеградации“ пришли заметки в виде стикеров 📌. Они также располагались на рабочем столе. Таких заметок-стикеров было ровно 5 штук. Вот для чего я использовал такие стикеры:</p>
        <ul>
            <li>Повторявшиеся ежедневные задачи</li>
            <li>Задачи на сегодняшний день</li>
            <li>Задачи на неделю</li>
            <li>Задачи на месяц</li>
            <li>День рождения близких и друзей в текущем месяце</li>
        </ul>
        <p>Все эти заметки имели минимальный размер и каждая их них располагалась в углу экрана, так что суммарно они не занимали более 15-20 процентов рабочего стола 💻. Задачи от повторяющихся до задач на месяц располагались в углах по часовой стрелке (повторяющиеся сверху справа, задачи на день снизу справа, задачи на неделю снизу слева, задачи на месяц и день рождения располагались в верхнем левом углу). При этом стикер с днями рождениями был почти полностью скрыт под стикеров задач на месяц для экономии места на рабочем столе. Если со списком дней рождений в текущем месяце понятно, то по остальным спискам (что там хранится) наверняка мало понятно. Поэтому немного детальнее распишу что именно размещалась в этих списках и приведу примеры. К повторяющимся 🔁 задачам относились задачи которые в идеале надо было выполнять каждый день (что-то поделать на английском (чтение/сериал/дуолинго/ что-то другое)), физ упражнения (поиграть в футбол/ бег/др), написание левой рукой, чтение книги. У вас бы это могли быть свои задачи. С задачами на сегодняшний день 📅 тоже должно быть все понятно. Часто я составлял такой список вечером, чтобы днем не забыть все, что надо сделать. В такой список задач на день могли входить как личные задачи, так и что-то важное по работе, что не стоит забыть сделать. Стикер задачи на неделю, также должен быть понятным, туда записывались задачи на неделю, далее на протяжении недели 📋 я какие-то задачи переносил на протяжении недели в задачи на день. Список задач на месяц 🗓 работал примерно по такой же логике: сначала задачи переносились в список задач на неделю (в одну из недель месяца), далее в один из дней я старался брать задачи в список на день и выполнять задачи.</p>
        <p>Такая схема работала достаточно долго. На протяжении минимум двух лет я содержал стикеры на рабочем столе и манипулировал задачами. Теперь уже у меня перед глазами не было моих целей на год 🎯. Наверно это мне и не надо было, потому что за прошлые 2 года я научился думать о своих годовых целях без необходимости явного напоминания мне об этих целях. Если же все же попадалась какая-то цель, про которую я постоянно забывал или не мог добраться до нее, то такую цель я помещал в список задач на месяц и старался выполнять в текущем месяце, хотя иногда такие задачи (особенно если они очень долгие) переносились (оставались в списке) на следующий месяц.</p>
        <p>Эта схема была достаточно продуктивная, но все же кое-что в ней мне не нравилось 🌝. Иногда проходили недели и месяца, а я так и не добирался до некоторых неудобных для меня задач. Сложно сказать виной всему была прокрастинация или я действительно не успевал выполнять некоторые задачи, но небольшая часть задач регулярно скиталась ↩️ от одной неделе к другой, от одного месяца к другому.</p>
        <div class="shadow"><img class="post-img" src="/images/blog/2023/scrum-and-sprint-life/scrum-and-sprint-life-2.jpg" alt="image" loading="lazy"></div>

        <h2 id="a-4">Менеджер по заметкам</h2>
        <p>Не так давно я перешел на другую программу ведения заметок 📋 и отказался от стикеров на рабочем столе. Какая именно программа раскрывать не буду, но она достаточно примитивная. Заметки можно группировать, создавать неограниченную вложенность. Пользоваться поиском по заметкам и прочие примитивные, но важные функции. Но проблема с откладыванием некоторых задач в долгий ящик никуда не исчезла.</p>

        <h2 id="a-5">Спринты</h2>
        <p>Примерно с начала года я решил применить подход скрам к личной жизни. От скрама я взял только несколько терминов, а именно бэклог и спринты. Если кратко бэклог это просто список задач 📋, которые необходимо выполнить. Далее эти задачи разбиваются на группы по N задач. Каждая группа называется спринтом 📂. Как правило, я не беру в спринт более 5-8 задач. Спринты никак не привязаны к неделям и месяцам, и каждый спринт может иметь разную продолжительность в выполнении. Но как правило я планирую спринт не больше, чем на 1.5 месяца. Главной отличительной особенность нового подхода является то, что я не перехожу к другому спринту (или другим задачам из бэклога) 🙅‍♂️, пока не выполню все задачи из текущего спринта. У меня не такой большой бэклог, чтобы список задач был на годы вперед, но на несколько спринтов обязательно хватает. Также я не включаю спонтанные идеи 💭 и “хотелки” в текущий или следующий спринт, которые уже скорее всего сформирован задачами. Такие спонтанные задачи идут только в бэклог. И дальше если по истечению некоторого времени необходимость в этих задачах остается высокой, то они добавляются в новый спринт. Еще одно изменение, которые косвенно коснулось моих задач это то, что я читаю книги, только через спринт. Создаю задачу для чтения книг к которой выбираю 3-4 книги 📚 и одновременно читаю их в рамках одной задачи. Далее в следующем спринте, если я и хочу получить дополнительное образование я уже получаю его из других источников, а не книг. Надеюсь общее количество книг в году также не пострадает и останется в пределах 25 книг за год. Из главных минусов такого подхода, как и всей новой программы то, что я закинул список с ведением дней рождений 🎉. Хотя мне ничего не мешает перенести список в менеджер заметок и регулярно к нему обращаться.</p>

        <h2 id="a-6">Выводы</h2>
        <p>В этом году я перешел на новую программу хранения заметок. А также применил новый подход к ведению задач (скрам). Далеко не факт, что данная программа и подход будут у меня долгое время, ведь со временем потребности меняются, инструменты совершенствуются, а подходы оптачиваются опытом использования, но на данный момент я нашел для себя максимально удобный инструмент и методологию ведению личных и рабочих задач.</p>

    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
