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

        <p>Пришло время подвести итоги бегового 2022 года. Сначала рассмотрим таблицу всех пробежек в году, после чего дам некоторые комментарии.</p>

        <table>
            <thead>
            <tr>
                <td>#</td>
                <td>Дата</td>
                <td>Расстояние (км)</td>
                <td>Время (мин)</td>
                <td>Место</td>
                <td>Температура</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>06.01</td>
                <td>10,4</td>
                <td>63</td>
                <td>Улица</td>
                <td>0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>13.01</td>
                <td>10,6</td>
                <td>64</td>
                <td>Стадион</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>25.01</td>
                <td>11,2</td>
                <td>76</td>
                <td>Стадион</td>
                <td>0</td>
            </tr>
            <tr>
                <td>4</td>
                <td>30.01</td>
                <td>12,1</td>
                <td>68</td>
                <td>Стадион</td>
                <td>1</td>
            </tr>
            <tr>
                <td>5</td>
                <td>16.02</td>
                <td>10,5</td>
                <td>65</td>
                <td>Улица</td>
                <td>3</td>
            </tr>
            <tr>
                <td>6</td>
                <td>23.02</td>
                <td>11,4</td>
                <td>68</td>
                <td>Стадион</td>
                <td>3</td>
            </tr>
            <tr>
                <td>7</td>
                <td>03.03</td>
                <td>11,1</td>
                <td>64</td>
                <td>Стадион</td>
                <td>2</td>
            </tr>
            <tr>
                <td>8</td>
                <td>14.03</td>
                <td>12,1</td>
                <td>70</td>
                <td>Стадион</td>
                <td>4</td>
            </tr>
            <tr>
                <td>9</td>
                <td>25.03</td>
                <td>11,4</td>
                <td>70</td>
                <td>Улица</td>
                <td>9</td>
            </tr>
            <tr>
                <td>10</td>
                <td>07.04</td>
                <td>13,2</td>
                <td>78</td>
                <td>Улица</td>
                <td>13</td>
            </tr>
            <tr>
                <td>11</td>
                <td>26.04</td>
                <td>10,6</td>
                <td>62</td>
                <td>Стадион</td>
                <td>11</td>
            </tr>
            <tr>
                <td>12</td>
                <td>29.04</td>
                <td>12,3</td>
                <td>73</td>
                <td>Улица</td>
                <td>10</td>
            </tr>
            <tr>
                <td>13</td>
                <td>06.05</td>
                <td>12,3</td>
                <td>71</td>
                <td>Улица</td>
                <td>17</td>
            </tr>
            <tr>
                <td>14</td>
                <td>16.05</td>
                <td>12,5</td>
                <td>73</td>
                <td>Улица</td>
                <td>12</td>
            </tr>
            <tr>
                <td>15</td>
                <td>06.06</td>
                <td>13,3</td>
                <td>75</td>
                <td>Улица</td>
                <td>19</td>
            </tr>
            <tr>
                <td>16</td>
                <td>13.06</td>
                <td>12,4</td>
                <td>70</td>
                <td>Улица</td>
                <td>23</td>
            </tr>
            <tr>
                <td>17</td>
                <td>18.06</td>
                <td>15,4</td>
                <td>87</td>
                <td>Улица</td>
                <td>22</td>
            </tr>
            <tr>
                <td>18</td>
                <td>29.06</td>
                <td>12,2</td>
                <td>74</td>
                <td>Улица</td>
                <td>27</td>
            </tr>
            <tr>
                <td>19</td>
                <td>14.07</td>
                <td>12,2</td>
                <td>75</td>
                <td>Улица</td>
                <td>21</td>
            </tr>
            <tr>
                <td>20</td>
                <td>20.07</td>
                <td>13,1</td>
                <td>77</td>
                <td>Улица</td>
                <td>20</td>
            </tr>
            <tr>
                <td>21</td>
                <td>04.08</td>
                <td>12,2</td>
                <td>76</td>
                <td>Улица</td>
                <td>19</td>
            </tr>
            <tr>
                <td>22</td>
                <td>11.08</td>
                <td>12,3</td>
                <td>76</td>
                <td>Улица</td>
                <td>22</td>
            </tr>
            <tr>
                <td>23</td>
                <td>18.08</td>
                <td>12,7</td>
                <td>83</td>
                <td>Улица</td>
                <td>25</td>
            </tr>
            <tr>
                <td>24</td>
                <td>31.08</td>
                <td>12,4</td>
                <td>76</td>
                <td>Улица</td>
                <td>18</td>
            </tr>
            <tr>
                <td>25</td>
                <td>05.10</td>
                <td>13</td>
                <td>99</td>
                <td>Улица</td>
                <td>11</td>
            </tr>
            <tr>
                <td>26</td>
                <td>13.10</td>
                <td>12,7</td>
                <td>83</td>
                <td>Улица</td>
                <td>6</td>
            </tr>
            <tr>
                <td>27</td>
                <td>16.11</td>
                <td>13,6</td>
                <td>93</td>
                <td>Улица</td>
                <td>0</td>
            </tr>
            <tr>
                <td>28</td>
                <td>16.12</td>
                <td>11,4</td>
                <td>74</td>
                <td>Улица</td>
                <td>-6</td>
            </tr>
            </tbody>
        </table>
        <br>

        <p>В этом году я набегал почти <b>341 км</b>, что на 18 км больше, чем в прошлом.<br>
            За 4.5 года я суммарно набегал уже <b>1310 км</b> (969 + 341).<br>
            В этом году не было рекордов, хотя по некоторым показателям были улучшения, например, по среднему расстоянию бега, по среднему времени бега, по самой жаркой пробежке.</p>
        <p>Вот еще некоторые ключевые показатели:</p>
        <ul>
            <li>Общее расстояние: 341 км</li>
            <li>Максимальное расстояние: 15.4 км</li>
            <li>Минимальное расстояние: 10.4 км</li>
            <li>Средняя дистанция: 12.16 км</li>
            <li>Общее количество пробежек: 28</li>
            <li>Количество пробежек по стадиону: 7</li>
            <li>Количество пробежек по городу: 21</li>
            <li>Максимальная температура воздуха при беге: +27</li>
            <li>Минимальная температура воздуха при беге: -6</li>
            <li>Максимальное время: 99 мин</li>
            <li>Минимальное время: 62 мин</li>
            <li>Среднее время: 74 мин</li>
        </ul>
        <br>

        <div class="h3 text-center">Общее количество пробежек по годам:</div>
        <img src="/images/blog/2022/run-2022/chart-1.jpg" alt="Общее количество пробежек по годам">
        <div class="h3 text-center">Суммарное расстояние (км) по годам:</div>
        <img src="/images/blog/2022/run-2022/chart-2.jpg" alt="Суммарное расстояние (км) по годам">
        <div class="h3 text-center">Максимальное расстояние (км) по годам:</div>
        <img src="/images/blog/2022/run-2022/chart-3.jpg" alt="Максимальное расстояние (км) по годам">
        <div class="h3 text-center">Минимальное расстояние (км) по годам:</div>
        <img src="/images/blog/2022/run-2022/chart-4.jpg" alt="Минимальное расстояние (км) по годам">
        <div class="h3 text-center">Среднее расстояние (км) по годам:</div>
        <img src="/images/blog/2022/run-2022/chart-5.jpg" alt="Среднее расстояние (км) по годам">
        <div class="h3 text-center">Максимальное время (мин) по годам:</div>
        <img src="/images/blog/2022/run-2022/chart-6.jpg" alt="Максимальное время (мин) по годам">
        <div class="h3 text-center">Минимальное время (мин) по годам:</div>
        <img src="/images/blog/2022/run-2022/chart-7.jpg" alt="Минимальное время (мин) по годам">
        <div class="h3 text-center">Среднее время (мин) по годам:</div>
        <img src="/images/blog/2022/run-2022/chart-8.jpg" alt="Среднее время (мин) по годам">


    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
