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

        <p>Конец года, а значит самое время подвести статистику моего бега. И хоть в этом году у меня была краткосрочная, но очень неприятная болезнь, это не сильно отразилось на моем беге в этом году (разве что из-за того, что около месяца во время болезни и после восстановления я бегал сильно меньше, из-за чего средняя дистанция за год упала с 12 до 11 км) в целом не стала хуже, а по некоторым показателям даже лучше.</p>

        <p>Традиционно рассмотрим сначала все мои пробежки в этом году, после чего пойдут весьма интересные графики</p>



        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Дата</th>
                <th>Расстояние (км)</th>
                <th>Время (мин)</th>
                <th>Место</th>
                <th>Температура</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>10.01</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>81</td>
                <td>-4</td>
            </tr>
            <tr>
                <td>2</td>
                <td>23.01</td>
                <td>11,4</td>
                <td>Улица</td>
                <td>74</td>
                <td>-1</td>
            </tr>
            <tr>
                <td>3</td>
                <td>02.02</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>78</td>
                <td>0</td>
            </tr>
            <tr>
                <td>4</td>
                <td>10.02</td>
                <td>12,7</td>
                <td>Улица</td>
                <td>83</td>
                <td>-1</td>
            </tr>
            <tr>
                <td>5</td>
                <td>22.02</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>73</td>
                <td>-4</td>
            </tr>
            <tr>
                <td>6</td>
                <td>27.02</td>
                <td>12,5</td>
                <td>Улица</td>
                <td>83</td>
                <td>-5</td>
            </tr>
            <tr>
                <td>7</td>
                <td>20.03</td>
                <td>11,4</td>
                <td>Улица</td>
                <td>75</td>
                <td>7</td>
            </tr>
            <tr>
                <td>8</td>
                <td>06.04</td>
                <td>12,4</td>
                <td>Улица</td>
                <td>80</td>
                <td>12</td>
            </tr>
            <tr>
                <td>9</td>
                <td>11.04</td>
                <td>11,9</td>
                <td>Улица</td>
                <td>80</td>
                <td>11</td>
            </tr>
            <tr>
                <td>10</td>
                <td>21.04</td>
                <td>11,5</td>
                <td>Улица</td>
                <td>75</td>
                <td>15</td>
            </tr>
            <tr>
                <td>11</td>
                <td>28.04</td>
                <td>12</td>
                <td>Улица</td>
                <td>77</td>
                <td>11</td>
            </tr>
            <tr>
                <td>12</td>
                <td>10.05</td>
                <td>11,9</td>
                <td>Улица</td>
                <td>76</td>
                <td>14</td>
            </tr>
            <tr>
                <td>13</td>
                <td>29.05</td>
                <td>6,1</td>
                <td>Улица</td>
                <td>40</td>
                <td>21</td>
            </tr>
            <tr>
                <td>14</td>
                <td>01.06</td>
                <td>7,1</td>
                <td>Улица</td>
                <td>44</td>
                <td>18</td>
            </tr>
            <tr>
                <td>15</td>
                <td>06.06</td>
                <td>7,1</td>
                <td>Улица</td>
                <td>48</td>
                <td>21</td>
            </tr>
            <tr>
                <td>16</td>
                <td>13.06</td>
                <td>7,4</td>
                <td>Улица</td>
                <td>46</td>
                <td>21</td>
            </tr>
            <tr>
                <td>17</td>
                <td>27.06</td>
                <td>7,8</td>
                <td>Улица</td>
                <td>49</td>
                <td>20</td>
            </tr>
            <tr>
                <td>18</td>
                <td>12.07</td>
                <td>8,7</td>
                <td>Улица</td>
                <td>59</td>
                <td>25</td>
            </tr>
            <tr>
                <td>19</td>
                <td>20.07</td>
                <td>10,9</td>
                <td>Улица</td>
                <td>71</td>
                <td>21</td>
            </tr>
            <tr>
                <td>20</td>
                <td>26.07</td>
                <td>12,3</td>
                <td>Улица</td>
                <td>79</td>
                <td>22</td>
            </tr>
            <tr>
                <td>21</td>
                <td>03.08</td>
                <td>12,8</td>
                <td>Улица</td>
                <td>84</td>
                <td>25</td>
            </tr>
            <tr>
                <td>22</td>
                <td>09.08</td>
                <td>15</td>
                <td>Улица</td>
                <td>90</td>
                <td>19</td>
            </tr>
            <tr>
                <td>23</td>
                <td>22.08</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>81</td>
                <td>21</td>
            </tr>
            <tr>
                <td>24</td>
                <td>30.08</td>
                <td>10,1</td>
                <td>Улица</td>
                <td>62</td>
                <td>20</td>
            </tr>
            <tr>
                <td>25</td>
                <td>11.09</td>
                <td>10,9</td>
                <td>Улица</td>
                <td>69</td>
                <td>20</td>
            </tr>
            <tr>
                <td>26</td>
                <td>18.09</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>69</td>
                <td>21</td>
            </tr>
            <tr>
                <td>27</td>
                <td>25.09</td>
                <td>12,3</td>
                <td>Улица</td>
                <td>77</td>
                <td>17</td>
            </tr>
            <tr>
                <td>28</td>
                <td>16.10</td>
                <td>11,5</td>
                <td>Улица</td>
                <td>76</td>
                <td>6</td>
            </tr>
            <tr>
                <td>29</td>
                <td>23.10</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>73</td>
                <td>9</td>
            </tr>
            <tr>
                <td>30</td>
                <td>30.10</td>
                <td>13</td>
                <td>Улица</td>
                <td>84</td>
                <td>10</td>
            </tr>
            <tr>
                <td>31</td>
                <td>09.11</td>
                <td>12,2</td>
                <td>Улица</td>
                <td>75</td>
                <td>8</td>
            </tr>
            <tr>
                <td>32</td>
                <td>13.11</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>76</td>
                <td>5</td>
            </tr>
            <tr>
                <td>33</td>
                <td>20.11</td>
                <td>11,4</td>
                <td>Улица</td>
                <td>73</td>
                <td>-3</td>
            </tr>
            <tr>
                <td>34</td>
                <td>30.11</td>
                <td>11,1</td>
                <td>Улица</td>
                <td>72</td>
                <td>-7</td>
            </tr>
            <tr>
                <td>35</td>
                <td>04.12</td>
                <td>11,3</td>
                <td>Улица</td>
                <td>74</td>
                <td>-3</td>
            </tr>
            <tr>
                <td>36</td>
                <td>11.12</td>
                <td>11,1</td>
                <td>Улица</td>
                <td>74</td>
                <td>-2</td>
            </tr>
            <tr>
                <td>37</td>
                <td>18.12</td>
                <td>11,3</td>
                <td>Улица</td>
                <td>70</td>
                <td>5</td>
            </tr>
            <tr>
                <td>38</td>
                <td>25.12</td>
                <td>11,4</td>
                <td>Улица</td>
                <td>68</td>
                <td>5</td>
            </tr>
        </tbody>
        </table>

        <p>В этом году я набегал <strong>423 км</strong>, что является абсолютным моим рекордом и что на 83 км больше, чем в прошлом.<br>
            За 5.5 года я суммарно набегал уже <strong>1733 км</strong>.<br>
            Также стоит отметить, что в этом году я повторил по количеству пробежек 2019 год с 38-ю пробежками, однако если в 2019 году среднее расстояние пробежки было меньше 7 км, то в этом больше 11 км.</p>


        <p>Вот еще некоторые ключевые показатели:</p>

        <p>Общее расстояние: 423 км<br>
            Максимальное расстояние: 15 км<br>
            Минимальное расстояние: 6.2 км<br>
            Средняя дистанция: 12.13 км<br>
            Общее количество пробежек: 38<br>
            Количество пробежек по стадиону: 0<br>
            Количество пробежек по городу: 38<br>
            Максимальная температура воздуха при беге: +25<br>
            Минимальная температура воздуха при беге: -7<br>
            Максимальное время: 90 мин<br>
            Минимальное время: 40 мин<br>
            Среднее время: 71 мин<br>
        </p>

        <br>
        <div class="h3 text-center">График пробежек за 2023 год:</div>
        <img src="/images/blog/2023/run-2023/chart-1.jpg" alt="Все пробежки за 2023 год">
        <br>
        <br>
        <div class="h3 text-center">Общее количество пробежек по годам:</div>
        <img src="/images/blog/2023/run-2023/chart-2.jpg" alt="Общее количество пробежек по годам">
        <br>
        <br>
        <div class="h3 text-center">Суммарное расстояние (км) по годам:</div>
        <img src="/images/blog/2023/run-2023/chart-3.jpg" alt="Суммарное расстояние (км) по годам">
        <br>
        <br>
        <div class="h3 text-center">Максимальное расстояние (км) по годам:</div>
        <img src="/images/blog/2023/run-2023/chart-4.jpg" alt="Максимальное расстояние (км) по годам">
        <br>
        <br>
        <div class="h3 text-center">Минимальне расстояние (км) по годам:</div>
        <img src="/images/blog/2023/run-2023/chart-5.jpg" alt="Минимальне расстояние (км) по годам">
        <br>
        <br>
        <div class="h3 text-center">Среднее расстояние (км) по годам:</div>
        <img src="/images/blog/2023/run-2023/chart-6.jpg" alt="Среднее расстояние (км) по годам">
        <br>
        <br>
        <div class="h3 text-center">Максимальное время (мин) по годам:</div>
        <img src="/images/blog/2023/run-2023/chart-7.jpg" alt="Максимальное время (мин) по годам">
        <br>
        <br>
        <div class="h3 text-center">Минимальное время (мин) по годам:</div>
        <img src="/images/blog/2023/run-2023/chart-8.jpg" alt="Минимальное время (мин) по годам">
        <br>
        <br>
        <div class="h3 text-center">Среднее время (мин) по годам:</div>
        <img src="/images/blog/2023/run-2023/chart-9.jpg" alt="Среднее время (мин) по годам">


    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
