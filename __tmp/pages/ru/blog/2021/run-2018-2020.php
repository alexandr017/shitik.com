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

        <span class="h2">Содержание:</span>
        <ul class="post-nav">
            <li><a href="#a-1">Пробежки в 2018 году</a></li>
            <li><a href="#a-2">Пробежки в 2019 году</a></li>
            <li><a href="#a-3">Пробежки в 2020 году</a></li>
        </ul>

        <p>После активного спортивного детства и подросткового возраста я закинул спорт буквально на 4-5 лет после чего мое здоровье слегка ухудшилось. Врачи даже поставили мне тахикардию (учащенное сердцебиение), но я не стал с этим мирится и в середине 2018 года активно вернулся к спорту. Сначала в бегу, а затем и к футболу, хотя с последним дело имею достаточно редко, а вот бег после этого стал присутствовать регулярно в моей жизни. </p>

        <h2 id="a-1">Пробежки в 2018 году</h2>

        <p>И хоть этот пост выходит в конце 2021 года я достал результаты почти всех пробежек за исключением первых штук 5-10. Возможно тогда у меня еще не было приложений для отслеживания бега, однако могу сказать что эти начальные пробежки не превышали 3-5 километров. Рассмотрим те, которые у меня были сохранены.</p>

        <table>
            <thead>
            <tr>
                <td>#</td>
                <td>Дата</td>
                <td>Расстояние (км)</td>
                <td>Время (мин)</td>
                <td>Место</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>01.11</td>
                <td>7.3</td>
                <td>52</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>2</td>
                <td>04.11</td>
                <td>9.0 🎉</td>
                <td>63</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>3</td>
                <td>06.11</td>
                <td>8.0</td>
                <td>54</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>4</td>
                <td>12.11</td>
                <td>8.0</td>
                <td>54</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>5</td>
                <td>15.11</td>
                <td>8.0</td>
                <td>51</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>6</td>
                <td>20.11</td>
                <td>7.8</td>
                <td>48</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>7</td>
                <td>22.11</td>
                <td>8.0</td>
                <td>52</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>8</td>
                <td>03.12</td>
                <td>7.8</td>
                <td>53</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>9</td>
                <td>06.12</td>
                <td>8.0</td>
                <td>52</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>10</td>
                <td>12.12</td>
                <td>7.9</td>
                <td>54</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>11</td>
                <td>15.12</td>
                <td>8.0</td>
                <td>55</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>12</td>
                <td>19.12</td>
                <td>8.0</td>
                <td>50</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>13</td>
                <td>22.12</td>
                <td>8.0</td>
                <td>55</td>
                <td>Улица</td>
            </tr>
            </tbody>
        </table>


        <p>Сейчас рассмотрим таблицу чуть детальнее и выделим наиболее интересные показатели:</p>
        <ul>
            <li>Общее расстояние: 104 км</li>
            <li>Максимальное расстояние: 9 км</li>
            <li>Минимальное расстояние: 7.3 км</li>
            <li>Средняя дистанция: 8.0 км</li>
            <li>Общее количество пробежек: 13</li>
            <li>Максимальное время: 63 мин</li>
            <li>Минимальное время: 48 мин</li>
            <li>Среднее время: 53 мин</li>
            <li>Количество рекордов: 1</li>
        </ul>



        <h2 id="a-2">Пробежки в 2019 году</h2>

        <p>По 2019 году мне удалось достать полный список всех моих пробежек и он выглядит следующим образом:</p>

        <table>
            <thead>
            <tr>
                <td>#</td>
                <td>Дата</td>
                <td>Расстояние (км)</td>
                <td>Время (мин)</td>
                <td>Место</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>13.01</td>
                <td>8.0</td>
                <td>55</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>2</td>
                <td>02.02</td>
                <td>8.0</td>
                <td>54</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>3</td>
                <td>04.02</td>
                <td>8.0</td>
                <td>52</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>4</td>
                <td>07.02</td>
                <td>8.0</td>
                <td>49</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>5</td>
                <td>11.02</td>
                <td>3.0</td>
                <td>20</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>6</td>
                <td>15.02</td>
                <td>7.9</td>
                <td>52</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>7</td>
                <td>19.03</td>
                <td>3.0</td>
                <td>22</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>8</td>
                <td>21.03</td>
                <td>3.0</td>
                <td>20</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>9</td>
                <td>27.03</td>
                <td>5.0</td>
                <td>36</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>10</td>
                <td>01.04</td>
                <td>5.1</td>
                <td>34</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>11</td>
                <td>08.04</td>
                <td>2.6</td>
                <td>16</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>12</td>
                <td>16.04</td>
                <td>3.0</td>
                <td>20</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>13</td>
                <td>17.04</td>
                <td>8.0</td>
                <td>50</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>14</td>
                <td>21.04</td>
                <td>8.0</td>
                <td>47</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>15</td>
                <td>26.04</td>
                <td>6.4</td>
                <td>35</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>16</td>
                <td>30.04</td>
                <td>10.1 🎉</td>
                <td>61</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>17</td>
                <td>28.05</td>
                <td>10.0</td>
                <td>59</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>18</td>
                <td>31.05</td>
                <td>5.0</td>
                <td>30</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>19</td>
                <td>02.06</td>
                <td>8.0</td>
                <td>46</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>20</td>
                <td>06.06</td>
                <td>8.1</td>
                <td>48</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>21</td>
                <td>10.06</td>
                <td>5.1</td>
                <td>31</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>22</td>
                <td>13.06</td>
                <td>7.3</td>
                <td>44</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>23</td>
                <td>25.06</td>
                <td>7.2</td>
                <td>44</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>24</td>
                <td>01.07</td>
                <td>12.8 🎉</td>
                <td>79</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>25</td>
                <td>30.07</td>
                <td>5.0</td>
                <td>32</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>26</td>
                <td>01.08</td>
                <td>8.0</td>
                <td>50</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>27</td>
                <td>04.08</td>
                <td>8.0</td>
                <td>48</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>28</td>
                <td>18.08</td>
                <td>5.0</td>
                <td>30</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>29</td>
                <td>19.09</td>
                <td>5.2</td>
                <td>31</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>30</td>
                <td>24.09</td>
                <td>6.3</td>
                <td>37</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>31</td>
                <td>16.10</td>
                <td>8.0</td>
                <td>50</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>32</td>
                <td>27.10</td>
                <td>9.6</td>
                <td>57</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>33</td>
                <td>02.11</td>
                <td>7.9</td>
                <td>47</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>34</td>
                <td>19.11</td>
                <td>8.0</td>
                <td>46</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>35</td>
                <td>25.11</td>
                <td>8.0</td>
                <td>50</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>36</td>
                <td>01.12</td>
                <td>3.0</td>
                <td>17</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>37</td>
                <td>05.12</td>
                <td>9.7</td>
                <td>56</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>38</td>
                <td>10.12</td>
                <td>8.0</td>
                <td>48</td>
                <td>Улица</td>
            </tr>
            </tbody>
        </table>

        <p>Сейчас рассмотрим таблицу чуть детальнее и выделим наиболее интересные показатели:</p>
        <ul>
            <li>Общее расстояние: 260 км</li>
            <li>Максимальное расстояние: 12.8 км</li>
            <li>Минимальное расстояние: 2.6 км</li>
            <li>Средняя дистанция: 6.9 км</li>
            <li>Общее количество пробежек: 38</li>
            <li>Максимальное время: 79 мин</li>
            <li>Минимальное время: 16 мин</li>
            <li>Среднее время: 53 мин</li>
            <li>Количество рекордов: 2</li>
        </ul>





        <h2 id="a-3">Пробежки в 2020 году</h2>

        <p>По 2020 году у меня также на руках была полная статистика пробежке, поэтому не составило труда ее загнать в таблицу и посмотреть результаты. Из особенностей бега в 2020 году добавляется пробежки по стадиону, которые почти вытеснили пробежки по улице в текущем году. Итак рассмотрим пробежки в 2020 детально:</p>

        <table>
            <thead>
            <tr>
                <td>#</td>
                <td>Дата</td>
                <td>Расстояние (км)</td>
                <td>Время (мин)</td>
                <td>Место</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>09.01</td>
                <td>5.1</td>
                <td>31</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>2</td>
                <td>16.01</td>
                <td>8.0</td>
                <td>47</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>3</td>
                <td>20.01</td>
                <td>8.0</td>
                <td>44</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>4</td>
                <td>06.02</td>
                <td>8.0</td>
                <td>46</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>5</td>
                <td>21.02</td>
                <td>7.9</td>
                <td>44</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>6</td>
                <td>02.03</td>
                <td>3.0</td>
                <td>16</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>7</td>
                <td>06.03</td>
                <td>8.0</td>
                <td>45</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>8</td>
                <td>09.03</td>
                <td>7.9</td>
                <td>45</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>9</td>
                <td>16.03</td>
                <td>9.6</td>
                <td>56</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>10</td>
                <td>29.03</td>
                <td>7.9</td>
                <td>45</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>11</td>
                <td>31.03</td>
                <td>8.0 🎉</td>
                <td>43</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>12</td>
                <td>06.04</td>
                <td>8.5</td>
                <td>45</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>13</td>
                <td>11.04</td>
                <td>9.8</td>
                <td>55</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>14</td>
                <td>17.04</td>
                <td>10.3</td>
                <td>54</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>15</td>
                <td>28.04</td>
                <td>8.4</td>
                <td>43</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>16</td>
                <td>20.05</td>
                <td>8.5</td>
                <td>44</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>17</td>
                <td>16.06</td>
                <td>8.8</td>
                <td>45</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>18</td>
                <td>21.06</td>
                <td>10.7</td>
                <td>57</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>19</td>
                <td>25.06</td>
                <td>8.4</td>
                <td>44</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>20</td>
                <td>04.07</td>
                <td>14.1 🎉</td>
                <td>74</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>21</td>
                <td>11.07</td>
                <td>15.4 🎉</td>
                <td>85</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>22</td>
                <td>21.08</td>
                <td>10.1</td>
                <td>54</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>23</td>
                <td>22.09</td>
                <td>9.8</td>
                <td>54</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>24</td>
                <td>01.10</td>
                <td>11.2</td>
                <td>61</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>25</td>
                <td>07.10</td>
                <td>8.0</td>
                <td>47</td>
                <td>Улица</td>
            </tr>
            <tr>
                <td>26</td>
                <td>14.10</td>
                <td>11.1</td>
                <td>64</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>27</td>
                <td>16.11</td>
                <td>7.5</td>
                <td>42</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>28</td>
                <td>24.11</td>
                <td>10.1</td>
                <td>59</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>29</td>
                <td>01.12</td>
                <td>11.2</td>
                <td>65</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>30</td>
                <td>12.22</td>
                <td>9.0</td>
                <td>49</td>
                <td>Стадион</td>
            </tr>
            <tr>
                <td>31</td>
                <td>22.12</td>
                <td>9.2</td>
                <td>48</td>
                <td>Стадион</td>
            </tr>
            </tbody>
        </table>


        <p>Сейчас рассмотрим таблицу чуть детальнее и выделим наиболее интересные показатели:</p>
        <ul>
            <li>Общее расстояние: 282 км</li>
            <li>Максимальное расстояние: 15.4 км</li>
            <li>Минимальное расстояние: 3 км</li>
            <li>Средняя дистанция: 9.1 км</li>
            <li>Общее количество пробежек: 31</li>
            <li>Количество пробежек по стадиону: 20</li>
            <li>Количество пробежек по городу: 11</li>
            <li>Максимальное время: 85 мин</li>
            <li>Минимальное время: 16 мин</li>
            <li>Среднее время: 50 мин</li>
            <li>Количество рекордов: 3</li>
            <li>Дважды обновил общий личный рекорд</li>
            <li>Дважды обновил личный рекорд стадиона</li>
        </ul>

    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
