<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'about']);
include DOCUMENT_ROOT . '/view/v3/head.php';
?>
<body>
<?php include DOCUMENT_ROOT . '/view/v3/menu.php'; ?>

<main class="container">
    <ul class="breadcrumb">
        <li><a href="/fr">Accueil</a></li>
        <li class="active">Shitik Alexandre Andreïevitch</li>
    </ul>

    <div class="content">
        <h1>Shitik Alexandre Andreïevitch</h1>
        <h2>Informations générales</h2>
        <img width="500" height="634" class="about-photo" src="/themes/v3/images/about/photo.jpg" alt="Шитик Александр Андреевич" loading="lazy">
        <p>Bonjour à tous. Je suis l'auteur et le créateur du site shitik.com. Autrefois, ce site était mon portfolio et un projet où je publiais mes pensées. Au fur et à mesure de ma lecture de livres, de la vision de films et de l'étude des sciences, mes pensées sont devenues si nombreuses que j'ai décidé de créer des sections supplémentaires sur le site et de commencer à transmettre mes connaissances aux autres. C'est ce que je vais faire très bientôt. Vous pouvez également trouver sur ce site mes livres personnels, des photos de mes voyages et bien plus encore.</p>

        <div style="clear: both"></div>

        <h2>Éducation</h2>
        <p><b>Collège d'Orcha "Université d'État de Vitebsk P.M. Masherov"</b><br>
            <span>Période:</span> 2009-2013<br>
            <span>Spécialité:</span> Logiciels pour les technologies de l'information<br>
            <span>Qualification:</span> Technicien-programmateur
        </p>
        <p><b>Université d'État de l'Informatique et de l'Électronique Radio (BGUIR)</b><br>
            <span>Période:</span> 2013-2017<br>
            <span>Spécialité:</span> Logiciels pour les technologies de l'information<br>
            <span>Qualification:</span> Ingénieur-programmateur
        </p>

        <h2>Mes centres d'intérêt et passions</h2>
        <ul>
            <li><a href="#programming">Je programme</a></li>
            <li><a href="#travel">Je voyage</a></li>
            <li><a href="#run">Je cours en extérieur 10-14 km (même en hiver)</a></li>
            <li><a href="#football">Je joue au football et je le regarde depuis 2003</a></li>
            <li><a href="#collection">Je collectionne des objets</a></li>
            <li><a href="#books">Je déteste lire des livres, mais ces dernières années, j'ai lu plus de 150 livres</a></li>
            <li><a href="#productivity">Je m'intéresse à la planification et à la productivité. J'ai écrit 2 livres</a></li>
            <li><a href="#space">J'aime l'astrophysique et l'espace. Je vulgarise la science et je méprise la pseudoscience</a></li>
            <li><a href="#blog">J'écris des articles sur divers sujets</a></li>
            <li><a href="#movie">Je m'y connais bien en cinéma</a></li>
            <li><a href="#music">J'écoute de la musique rock</a></li>
            <li>J'ai précédemment regardé activement la WWE</li>
        </ul>

        <h2 id="programming">Programmation</h2>
        <p>Je suis programmeur de formation, par style et par mode de vie. Actuellement, je travaille dans le domaine du développement de logiciels pour des projets financiers et commerciaux. Cela fait plus de 7 ans que je travaille dans mon poste actuel, où je suis passé de simple employé à CTO de l'entreprise.</p>
        <p>De 2012 à 2014, j'ai travaillé sur la programmation de logiciels de bureau pour Windows.<br>
            Depuis 2014, je me suis principalement concentré sur le développement web. De 2014 à 2017, j'ai travaillé dans l'un des studios web de Minsk, participant à plus de cent projets, ce qui fait que depuis 2017, je ne compte plus mes petits et moyens projets.<br>
            Depuis 2017, je travaille sur un site web financier et économique, qui est devenu un grand projet. En parallèle, je suis passé de programmeur middle à le principal programmeur de l'entreprise. En plus de ce projet, plusieurs autres projets intéressants et de grande envergure dans ce domaine ont été ajoutés.</p>
        <p>Pendant mes études, j'ai eu l'occasion d'essayer l'Assembleur, Visual Basic, Pascal, C, C++, C#, Delphi, JavaScript, PHP. La majorité de mes projets étaient réalisés en Delphi, tout en étudiant activement PHP.</p>
        <p>Pendant l'université, j'ai découvert Java, et ma référence avec Delphi a évolué vers C++ Builder. J'ai regardé une multitude de vidéos sur YouTube pour améliorer mes compétences théoriques et pratiques. À cette époque, je travaillais activement dans le développement web, acquérant de l'expérience tant en back-end qu'en front-end.</p>
        <p>J'ai lu plusieurs dizaines de livres sur différents langages de programmation, technologies, bases de données, concepts et approches. Depuis 2021, j'écoute des <a href="/fr/blog/podcasts" target="_blank">podcasts</a> et lis des articles chaque semaine pour rester à jour sur les dernières actualités et événements IT. En raison de la spécificité des projets sur lesquels je travaille, je connais assez bien la partie technique du SEO.</p>

        <h2 id="travel">Voyages</h2>
        <p>J'ai commencé à voyager activement seulement en 2019. À ce jour, j'ai visité 12 pays. Pour certains de mes voyages, j'ai rédigé des articles détaillés sur mon blog. Par exemple, j'y raconte en détail mon voyage en <a href="/fr/blog/trip-to-azerbaijan" target="_blank">Azerbaïdjan</a> et en <a href="/fr/blog/trip-to-georgia" target="_blank">Géorgie</a>, ainsi que mon séjour à <a href="fr/blog/trip-to-bali" target="_blank">Bali</a> avec un transit par la Chine.
            Je prévois d'améliorer la section voyages de mon site et d'y publier davantage de contenu, mais pour l'instant, mon principal moyen de partager mes expériences de voyage reste mon compte <a rel="noopener" href="https://www.instagram.com/shitik.sasha" target="_blank">Instagram</a>.</p>

        <h2 id="run">Course à pied</h2>
        <p>Je cours en extérieur depuis plus de 8 ans et, au total, j'ai parcouru plus de 1500 km. Plus de 200 sessions de course, qu'il fasse une chaleur étouffante en été ou un froid glacial en hiver. Mon <a href="/fr/blog" target="_blank">blog</a> contient régulièrement des articles sur la course à pied:<br>
            <a href="/fr/blog/run-2024">Bilan de la course en 2024</a><br>
            <a href="/fr/blog/run-2023">Statistiques de course pour 2023</a><br>
            <a href="/fr/blog/run-2022">Résultats de course pour 2022</a><br>
            <a href="/fr/blog/run-2021" target="_blank">Résultats de course pour 2021</a><br>
            <a href="/fr/blog/run-2018-2020" target="_blank">Statistiques de ma course sur 2,5 ans</a><br>
            <a href="/fr/blog/run" target="_blank">Nouveau record personnel en course</a>
        </p>

        <h2 id="football">Football</h2>
        <p>"Une fois que l'AC Milan entre dans vos veines, il reste à jamais dans votre sang." – Rui Costa. C'est exactement ce qui m'est arrivé en 2002-2003, lorsque Milan a remporté la Ligue des champions. Depuis, je ne me suis pas contenté de regarder le football, j’ai aussi commencé à y jouer activement. Cependant, ces dernières années, par manque de temps, mon lien avec le football se limite uniquement au visionnage des matchs, sans participation aux jeux.</p>

        <h2 id="collection">Collection</h2>
        <p>Dans mon enfance, je collectionnais des jetons Pokémon (environ un millier), des pièces de monnaie dont j’ai perdu le compte, ainsi que des posters et affiches de football provenant de magazines, qui se comptaient par centaines. D’ailleurs, jusqu’à récemment, je conservais également des magazines et des journaux de football, eux aussi par centaines. À l’époque, sans Internet, les magazines et la télévision étaient mes seules sources d’information sur le football.</p>
        <p>Aujourd’hui, mes collections se composent de deux types d’objets : des stylos à bille et des puzzles. Mes puzzles sont généralement de grande taille, comptant 1000 pièces.</p>

        <h2 id="books">Livres</h2>
        <p>Il se trouve que je lis beaucoup de livres. La moitié concerne les technologies et les langages de programmation. Le domaine de l'IT est immense et évolue rapidement, ce qui m'oblige à apprendre en permanence. L'autre moitié couvre des sujets variés : développement personnel, psychologie, santé, planification, bien-être financier et d'autres genres.</p>
        <p>Chaque année, j’écris un article sur mon <a href="/fr/blog" target="_blank">blog</a> pour résumer mes lectures de l’année écoulée:<br>
            <a href="/fr/blog/books-2024" target="_blank">Résultats de lecture en 2024</a><br>
            <a href="/fr/blog/books-2023" target="_blank">Statistiques de lecture pour 2023</a><br>
            <a href="/fr/blog/books-2022" target="_blank">Livres lus en 2022</a><br>
            <a href="/fr/blog/books-2021" target="_blank">Livres lus en 2021</a><br>
            <a href="/fr/blog/books-2020" target="_blank">Un tiers de cent livres en 11 mois</a>
        </p>
        <p>Je prévois également de créer une section dédiée sur mon site où je publierai des analyses détaillées de livres. Pour l’instant, tous mes commentaires de lecture se trouvent sur mon compte Instagram consacré aux livres.</p>

        <h2 id="productivity">Productivité et planification</h2>
        <p>Depuis environ cinq ans, j'applique activement une approche de gestion de projet à ma vie personnelle, ce qui m’aide à atteindre mes objectifs. Je pense avoir acquis une bonne expertise dans ce domaine, ayant lu plusieurs dizaines de livres sur le sujet.
            Cela m’a conduit à écrire des articles tels que <a href="/fr/blog/planning" target="_blank">« La planification comme moyen d’atteindre ses objectifs »</a> et <a href="/fr/blog/scrum-and-sprint-life" target="_blank">« Vivre en mode Scrum avec des sprints »</a>. J’ai également rédigé mon propre livre sur la productivité, <a href="/fr/blog/my-first-book" target="_blank">« Comment un humaniste peut-il maîtriser la productivité et la planification ? »</a>, et je suis en train d’en écrire un second.</p>
        <p>Dans un avenir proche, je prévois d’ouvrir une section dédiée sur mon site pour publier mes livres et les rendre disponibles directement sur ma plateforme.</p>

        <h2 id="space">Espace et science</h2>
        <p>Depuis mes années d’école, je me passionne pour la science et la cosmologie. Je n’en ai jamais fait mon métier, mais cette passion, entretenue de manière systématique depuis 15 à 20 ans, m’a permis d’acquérir des connaissances bien au-delà de celles de la plupart des gens, qui ignorent souvent les avancées récentes dans ce domaine et l’évolution fulgurante des technologies.
            C’est pourquoi je prévois de publier des articles sur l’espace et la science, en expliquant des concepts complexes de manière simple et captivante. Un nouveau volet dédié à ces sujets apparaîtra bientôt sur mon site.
            S’il y a bien un domaine où j’ai un modèle, c’est la science. Et ce modèle, c’est Stephen Hawking. Un brillant scientifique et vulgarisateur, qui, malgré les épreuves qu’il a traversées, incarne à mes yeux un véritable amour de la vie et du savoir.</p>

        <h2 id="blog">Blog</h2>
        <p>J’ai commencé à tenir mon <a href="/fr/blog" target="_blank">blog</a> il y a environ dix ans, et à l’époque, j’y publiais principalement des articles sur la programmation. Cependant, le domaine du développement évolue si rapidement que mes articles devenaient vite obsolètes.
            Parallèlement, j’ai commencé à lire davantage de livres, à m’intéresser à la planification, et à approfondir mes connaissances en science et en astronomie. Mon blog a donc évolué, et son contenu est devenu plus varié et intéressant. Aujourd’hui, je n’y publie plus d’articles sur la programmation.</p>

        <h2 id="movie">Cinéma et films</h2>
        <p>Depuis 2020, j’ai commencé à regarder activement le <a href="/fr/blog/movies-imdb" target="_blank">Top 250 des films selon IMDb</a>. J’ai tellement aimé cette expérience que j’ai ensuite poursuivi avec le <a href="/fr/blog/kinopoisk-250" target="_blank">Top 250 des films selon Kinopoisk</a>.
            Après chaque visionnage, j’ai écrit des articles détaillés où j’ai analysé en profondeur de nombreux films. En plus du simple visionnage, j’ai lu et regardé de nombreuses critiques, ce qui m’a aidé à mieux comprendre l’intention et le message des réalisateurs.
            Ces dernières années, je vais souvent au cinéma pour voir les avant-premières. Dans un avenir proche, je prévois de créer une section dédiée sur mon site pour y publier des critiques de films, aussi bien sur les nouveautés que sur les classiques du cinéma.</p>

        <h2 id="music">Musique</h2>
        <p>J’ai déjà mentionné Stephen Hawking comme mon idole dans le domaine de la science, mais il y en a un autre, et cette fois, il est dans le domaine de la musique. Il s’agit d’un homme tout aussi déterminé, qui a travaillé sur ses objectifs jusqu’à ses derniers jours. Cet homme, c’est Freddie Mercury.
            Pour moi, les chansons de Queen sont inégalées, et seul Klaus Meine pourrait s’approcher de la voix de Mercury. Ainsi, comme vous l’aurez compris, j’aime la musique rock, surtout le rock étranger, et particulièrement celui des années 80. Cependant, j’écoute également avec plaisir le rock moderne et national.</p>

        <h2 class="text-center title">Retour d'information</h2>
        <p>Vous pouvez me contacter personnellement.</p>
        <ul>
            <li><a rel="noopener" href="https://www.instagram.com/shitik.sasha" target="_blank">Instagram</a></li>
            <li><a rel="noopener" href="https://t.me/sasha_shitik" target="_blank">Telegram</a></li>
        </ul>
        <p>Vous pouvez également vous abonner à mes pages publiques pour ne pas manquer la publication de nouvelles actualités et articles:</p>
        <ul>
            <li><a rel="noopener" href="https://www.facebook.com/groups/1634020277998483" target="_blank">Facebook</a></li>
            <li><a rel="noopener" href="https://www.whatsapp.com/channel/0029VbBOueF2Jl8BBbawQS15" target="_blank">WhatsApp</a></li>
            <li><a rel="noopener" href="https://t.me/shitikcom" target="_blank">Telegram</a></li>
        </ul>

    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>