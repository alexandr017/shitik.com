<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'modules/blog/car-in-winter']);
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

        <p>В начале этого года у меня вышла статья, <a href="/ru/blog/car-in-winter">почему водители не любят зиму</a>. В продолжение этой тематики решил написать еще одну.</p>

        <p>В автошколе помимо изучения ПДД и практики тот, кто ведет лекции, часто рассказывает свои негласные правила, случаи из жизни и некоторые советы. Возможно так далеко не везде, но у меня уж точно было именно так. Не скажу, что эти советы были очень новыми и неочевидными. Чаще всего это была банальщина, хотя для пенсионеров возможно это были ценные советы.</p>

        <p>Ниже я собрал несколько пунктов советов, про которые я никогда не слышал в автошколе или от друзей/знакомых. Здесь не будет очевидных советов, типа  “повороты налево самые опасные и будь осторожен” или “обгон самое опасное действие на дороге и ты должен 7 раз подумать, убедиться в его безопасности и необходимости”. И так, поехали:</p>

        <ol>
            <li><img src="/images/blog/2023/tips-for-motorists/1.jpg" alt="Съезды и въезды на мост" width="300" height="200" loading="lazy"><span>Съезды и въезды на мост не менее опасны поворотов налево. Осмотритесь по сторонам, пропуская транспорт, когда выезжаете на мост, и не вьедьте в “зад” тому, кто перед вами резко остановился. Также не спешите очень рано выезжать и дождитесь, пока весь транспорт проедет (например весь длинный автобус целиком).</span></li>
            <li><img src="/images/blog/2023/tips-for-motorists/2.jpg" alt="Движение по однополюсным за городом" width="300" height="200" loading="lazy"> <span>Самое опасное движение - движение по однополоскам за городом. Всегда включайте дальний свет. У кого-то могут быть проблемы со зрением или же просто цвет вашей машины может отражаться в солнечную погоду или сливаться с цветом асфальта или же может быть не виден в пасмурный и дождливый день. Человек может пойти на обгон не увидя вашу машину. Поэтому явно обозначьте себя заранее издалека. Еще более безопасно ехать в колонне машин, но не первым.</span></li>
            <li><img src="/images/blog/2023/tips-for-motorists/3.jpg" alt="Остановиться на повороте" width="300" height="200" loading="lazy"> <span>Если за городом вы решили остановиться на повороте какой-то глухой деревни, то я в этом не вижу ничего плохо. Но есть один нюанс, всегда делайте это на полосе разгона, а не торможения (разумеется максимально ближе к обочине). Для того, кто едет за вами и хочет полноценно повернуть, перестроившись на полосу торможения вы можете создавать огромную помеху, потому что авто сзади едет на большой скорости и не всегда может успеть остановиться.  Если же вы стоите на разгонной полосе, то тут чуть проще, вы просто мешаете выехать машине, у которой почти нулевая скорость, а не 90-120 км в час.</span></li>
            <li><img src="/images/blog/2023/tips-for-motorists/4.jpg" alt="Включенная аварийка" width="300" height="200" loading="lazy"> <span>Встречал ситуации, когда люди, подъезжая на автострадах или мкаде на большой скорости к стоящей пробке, включают аварийку, чтобы привлечь внимание. Неплохое решение, хотя сам ни разу не прибегал к его использованию.</span></li>
            <li><img src="/images/blog/2023/tips-for-motorists/5.jpg" alt="Перестроиться в центральную полосу" width="300" height="200" loading="lazy"> <span>Если вы едете в 3-хполоске, скажем, в самом правом ряду, и кто-то напротив вас едет в самом левом ряду, и вам нужно перестроиться в центральную полосу, то не спешите это делать. Так как в это же время другая машина также возможно захочет сделать тоже самое. В итоге вы можете столкнуться в средней полосе.</span></li>
            <li><img src="/images/blog/2023/tips-for-motorists/6.jpg" alt="Нет полосы разгона" width="300" height="200" loading="lazy"> <span>Если вы выезжаете из стоянки или поворота, где нет полосы разгона, и не видно, едет ли кто-то или нет, и вы вынуждены даже выехать на первую полосу, чтобы посмотреть машины, но в случае, когда вы понимаете, что не успеваете выехать из-за идущего плотного потока машин, в том числе и на первой полосе, на которую вы уже немного успели вылезти корпусом, то по возможности включите заднюю передачу и уберите полностью свой бампер и капот с дороги, чтобы не мешать другим автомобилям.</span></li>
            <li><img src="/images/blog/2023/tips-for-motorists/7.jpg" alt="Усталость за рулем" width="300" height="200" loading="lazy"> <span>Все говорят, что пьяным нельзя садиться за руль, но мало кто говорит это по отношению к усталости. Из-за усталости даже в обычных дорожных ситуациях, где сработал бы автоматизм, мы можем медлить, так что если сильно устали или не выспались, лучше воспользоваться общественным транспортом.</span></li>
            <li><img src="/images/blog/2023/tips-for-motorists/8.jpg" alt="Знаки диких животных" width="300" height="200" loading="lazy"> <span>При движении за городом обращайте внимание на знаки диких животных. Причем это касается и светлого, и темного времени суток. Если у вас есть несколько полос движения в каждую сторону, старайтесь ехать во второй полосе ближе к центру дороги, даже если это противоречит моего следующему совету. Так у вас будет чуть больше времени среагировать на внезапно появившегося зверя.</span></li>
            <li><img src="/images/blog/2023/tips-for-motorists/9.jpg" alt="Езда по второй полосе" width="300" height="200" loading="lazy"> <span>А вот этот совет пожалуй точно можно отнести к банальщине. Не ездите за городом по второй полосе без необходимости, так как она используется для опережения, а не для постоянной езды. Так что не удивляйтесь потом если вам сигналят и моргают фарами несмотря на то, что есть рядом справа вторая полоса.</span></li>
            <li><img src="/images/blog/2023/tips-for-motorists/10.jpg" alt="Подходящая дистанция" width="300" height="200" loading="lazy"> <span>Может совет выбора дистанции за машиной и относится к банальным, и все советуют просто выбрать подходящую дистанцию, я же пойду дальше и продолжу этот совет. При выборе дистанции (особенно это касается загородных дорог или хотя бы МКАДа, где плотное движение и скорость больше 80 км/ч) старайтесь ехать за легковой машиной типа седан, хэтчбек или универсал чтобы вы могли не только видеть ее, но и несколько следующих машин едущих перед ней. Так вы можете быстрее среагировать не только на торможение вашей ближайшей машины, но и других машин вашей полосы, если высоты ближайшей машины позволят это увидеть. Поэтому, если не уверены в своих способностях экстренно затормозить, при необходимости не езжайте за микроавтобусами, внедорожниками и прочими высокими машинами, которые полностью закрывают обзор вашей полосы.</span></li>
            <li><img src="/images/blog/2023/tips-for-motorists/11.jpg" alt="Включение поворота" width="300" height="200" loading="lazy"> <span>Представьте, что вы едете за городом двухполосной (в каждую из сторон) автострады по второй полосе. Вы догоняете две движущиеся машины по первой полосе и видите, что вторая машина включила левый поворот на опережение. Что вы собираетесь делать, ускориться чтобы быстрее обогнать обе или наоборот притормозить и дать возможность машине сделать опережение? Ваши действия скорее всего будет зависеть от мыслей водителя того самого авто, включившего поворот. Если он не идет через пару секунд на опережение, то скорее всего пропускает вас. Не будьте такими же водителями, как водитель, включивший поворотник сильно раньше, чем это нужно было. Не вводите в заблуждение других водителей, дайте вас обогнать и только потом включайте поворотник и делайте свое опережение.</span></li>
        </ol>

        <p>Вероятнее всего данная статья будет время от времени дополняться новыми пунктами.</p>
    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
