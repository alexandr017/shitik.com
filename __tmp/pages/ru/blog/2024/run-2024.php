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

        <p>Пришло время опубликовать статистику бега за 2024 год. В плане бега этот год оказался одним из самых благоприятных и результативных. Да, возможно, в этом году я не ставил рекордов в виде 18–20 км за одну пробежку (хотя была одна пробежка на 16 км), но в других показателях, таких как количество пробежек и среднее расстояние, год был, если уж не рекордным, то как минимум очень успешным.</p>

        <p>Для начала представлю все свои пробежки, которых в этом году было 42. Это является абсолютным рекордом — ни в одном другом году я ещё не бегал так много раз.</p>

        <table class="table table-bordered table-hover table-condensed">
            <thead>
            <tr>
                <th>№</th>
                <th>Дата</th>
                <th>Расстояние (км)</th>
                <th>Место</th>
                <th>Время (мин)</th>
                <th>Температура (°C)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>09.01</td>
                <td>11</td>
                <td>Улица</td>
                <td>70</td>
                <td>-6</td>
            </tr>
            <tr>
                <td>2</td>
                <td>15.01</td>
                <td>11,4</td>
                <td>Улица</td>
                <td>73</td>
                <td>-1</td>
            </tr>
            <tr>
                <td>3</td>
                <td>19.01</td>
                <td>11,1</td>
                <td>Улица</td>
                <td>67</td>
                <td>-6</td>
            </tr>
            <tr>
                <td>4</td>
                <td>31.01</td>
                <td>11,2</td>
                <td>Улица</td>
                <td>71</td>
                <td>1</td>
            </tr>
            <tr>
                <td>5</td>
                <td>06.02</td>
                <td>11,1</td>
                <td>Улица</td>
                <td>67</td>
                <td>-1</td>
            </tr>
            <tr>
                <td>6</td>
                <td>13.02</td>
                <td>11,3</td>
                <td>Улица</td>
                <td>70</td>
                <td>2</td>
            </tr>
            <tr>
                <td>7</td>
                <td>20.02</td>
                <td>11,2</td>
                <td>Улица</td>
                <td>72</td>
                <td>1</td>
            </tr>
            <tr>
                <td>8</td>
                <td>26.02</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>71</td>
                <td>6</td>
            </tr>
            <tr>
                <td>9</td>
                <td>05.03</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>72</td>
                <td>5</td>
            </tr>
            <tr>
                <td>10</td>
                <td>13.03</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>74</td>
                <td>5</td>
            </tr>
            <tr>
                <td>11</td>
                <td>18.03</td>
                <td>12,2</td>
                <td>Улица</td>
                <td>75</td>
                <td>5</td>
            </tr>
            <tr>
                <td>12</td>
                <td>25.03</td>
                <td>12,2</td>
                <td>Улица</td>
                <td>73</td>
                <td>7</td>
            </tr>
            <tr>
                <td>13</td>
                <td>18.04</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>74</td>
                <td>9</td>
            </tr>
            <tr>
                <td>14</td>
                <td>25.04</td>
                <td>12,2</td>
                <td>Улица</td>
                <td>73</td>
                <td>11</td>
            </tr>
            <tr>
                <td>15</td>
                <td>30.04</td>
                <td>12,3</td>
                <td>Улица</td>
                <td>71</td>
                <td>21</td>
            </tr>
            <tr>
                <td>16</td>
                <td>14.05</td>
                <td>12,4</td>
                <td>Улица</td>
                <td>73</td>
                <td>15</td>
            </tr>
            <tr>
                <td>17</td>
                <td>23.05</td>
                <td>12,6</td>
                <td>Улица</td>
                <td>76</td>
                <td>21</td>
            </tr>
            <tr>
                <td>18</td>
                <td>28.05</td>
                <td>16</td>
                <td>Улица</td>
                <td>96</td>
                <td>23</td>
            </tr>
            <tr>
                <td>19</td>
                <td>03.06</td>
                <td>12,6</td>
                <td>Улица</td>
                <td>76</td>
                <td>22</td>
            </tr>
            <tr>
                <td>20</td>
                <td>10.06</td>
                <td>12,6</td>
                <td>Улица</td>
                <td>72</td>
                <td>21</td>
            </tr>
            <tr>
                <td>21</td>
                <td>17.06</td>
                <td>12,5</td>
                <td>Улица</td>
                <td>76</td>
                <td>22</td>
            </tr>
            <tr>
                <td>22</td>
                <td>27.06</td>
                <td>12,4</td>
                <td>Улица</td>
                <td>75</td>
                <td>27</td>
            </tr>
            <tr>
                <td>23</td>
                <td>01.07</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>72</td>
                <td>25</td>
            </tr>
            <tr>
                <td>24</td>
                <td>10.07</td>
                <td>13</td>
                <td>Улица</td>
                <td>74</td>
                <td>25</td>
            </tr>
            <tr>
                <td>25</td>
                <td>15.07</td>
                <td>12,4</td>
                <td>Улица</td>
                <td>76</td>
                <td>26</td>
            </tr>
            <tr>
                <td>26</td>
                <td>22.07</td>
                <td>12,6</td>
                <td>Улица</td>
                <td>75</td>
                <td>24</td>
            </tr>
            <tr>
                <td>27</td>
                <td>02.08</td>
                <td>12,4</td>
                <td>Улица</td>
                <td>74</td>
                <td>22</td>
            </tr>
            <tr>
                <td>28</td>
                <td>08.08</td>
                <td>13</td>
                <td>Улица</td>
                <td>69</td>
                <td>21</td>
            </tr>
            <tr>
                <td>29</td>
                <td>14.08</td>
                <td>12,4</td>
                <td>Улица</td>
                <td>71</td>
                <td>21</td>
            </tr>
            <tr>
                <td>30</td>
                <td>26.08</td>
                <td>12</td>
                <td>Улица</td>
                <td>73</td>
                <td>28</td>
            </tr>
            <tr>
                <td>31</td>
                <td>03.09</td>
                <td>12,3</td>
                <td>Улица</td>
                <td>77</td>
                <td>25</td>
            </tr>
            <tr>
                <td>32</td>
                <td>12.09</td>
                <td>12,5</td>
                <td>Улица</td>
                <td>72</td>
                <td>20</td>
            </tr>
            <tr>
                <td>33</td>
                <td>19.09</td>
                <td>12,5</td>
                <td>Улица</td>
                <td>73</td>
                <td>19</td>
            </tr>
            <tr>
                <td>34</td>
                <td>25.09</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>74</td>
                <td>19</td>
            </tr>
            <tr>
                <td>35</td>
                <td>28.10</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>74</td>
                <td>10</td>
            </tr>
            <tr>
                <td>36</td>
                <td>05.11</td>
                <td>11,8</td>
                <td>Улица</td>
                <td>74</td>
                <td>6</td>
            </tr>
            <tr>
                <td>37</td>
                <td>12.11</td>
                <td>11,9</td>
                <td>Улица</td>
                <td>73</td>
                <td>2</td>
            </tr>
            <tr>
                <td>38</td>
                <td>18.11</td>
                <td>12</td>
                <td>Улица</td>
                <td>76</td>
                <td>2</td>
            </tr>
            <tr>
                <td>39</td>
                <td>25.11</td>
                <td>11,7</td>
                <td>Улица</td>
                <td>74</td>
                <td>2</td>
            </tr>
            <tr>
                <td>40</td>
                <td>02.12</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>68</td>
                <td>4</td>
            </tr>
            <tr>
                <td>41</td>
                <td>10.12</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>74</td>
                <td>-2</td>
            </tr>
            <tr>
                <td>42</td>
                <td>19.12</td>
                <td>11,5</td>
                <td>Улица</td>
                <td>69</td>
                <td>6</td>
            </tr>
            </tbody>
        </table>

        <p>Суммарно в этом году я набегал аж <strong>509 км</strong>, что является абсолютным рекордом по общему расстоянию за год. Это на 86 км больше, чем в прошлом году.
            За последние 6,5 года я суммарно набегал уже <strong>1224 км</strong>. Это немного больше, чем расстояние от Минска до Берлина.
            Также стоит отметить, что в этом году состоялась моя <strong>200-я пробежка с момента</strong>, как я начал бегать.
        </p>

        <p>Вот еще некоторые ключевые показатели:</p>

        <p>Общее расстояние: 509 км<br>
            Максимальное расстояние: 16 км<br>
            Минимальное расстояние: 11 км<br>
            Средняя дистанция: 12,13 км<br>
            Общее количество пробежек: 42<br>
            Количество пробежек по стадиону: 0<br>
            Количество пробежек по городу: 42<br>
            Максимальная температура воздуха при беге: 28 °C<br>
            Минимальная температура воздуха при беге: -6 °C<br>
            Максимальное время: 96 мин<br>
            Минимальное время: 67 мин<br>
            Среднее время: 73 мин<br>
        </p>

        <p>Ниже, по традиции, я приведу несколько графиков. Первый относится к этому году, а все остальные — это сравнение пробежек по годам по различным показателям.</p>

        <br>
        <div class="h3 text-center">График пробежек за 2024 год:</div>
        <img src="/images/blog/2024/run-2024/chart-1.png" alt="Все пробежки за 2024 год">
        <br>
        <br>
        <div class="h3 text-center">Общее количество пробежек по годам:</div>
        <img src="/images/blog/2024/run-2024/chart-2.png" alt="Общее количество пробежек по годам">
        <br>
        <br>
        <div class="h3 text-center">Суммарное расстояние (км) по годам:</div>
        <img src="/images/blog/2024/run-2024/chart-3.png" alt="Суммарное расстояние (км) по годам">
        <br>
        <br>
        <div class="h3 text-center">Максимальное расстояние (км) одной пробежки по годам:</div>
        <img src="/images/blog/2024/run-2024/chart-4.png" alt="Максимальное расстояние (км) одной пробежки по годам">
        <br>
        <br>
        <div class="h3 text-center">Минимальное расстояние (км) одной пробежки по годам:</div>
        <img src="/images/blog/2024/run-2024/chart-5.png" alt="Минимальное расстояние (км) одной пробежки по годам">
        <br>
        <br>
        <div class="h3 text-center">Среднее расстояние (км) одной пробежки по годам:</div>
        <img src="/images/blog/2024/run-2024/chart-6.png" alt="Среднее расстояние (км) одной пробежки по годам">
        <br>
        <br>
        <div class="h3 text-center">Максимальное время (мин) одной пробежки по годам:</div>
        <img src="/images/blog/2024/run-2024/chart-7.png" alt="Максимальное время (мин) одной пробежки по годам">
        <br>
        <br>
        <div class="h3 text-center">Минимальное время (мин) одной пробежки по годам:</div>
        <img src="/images/blog/2024/run-2024/chart-8.png" alt="Минимальное время (мин) одной пробежки по годам">
        <br>
        <br>
        <div class="h3 text-center">Среднее время (мин) одной пробежки по годам:</div>
        <img src="/images/blog/2024/run-2024/chart-9.png" alt="Среднее время (мин) одной пробежки по годам">


    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
