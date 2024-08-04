<?php
    require_once("./view/layout/header.php");
?>
    <link rel="stylesheet" href="./view/css/stylos_principal.css">
    <script  defer src="./view/js/app.js"></script>
</head>
<body>
    <?php require_once("./view/layout/navbar.php"); ?>
    <section class="hero">
        <div class="hero_texts">
            <h2 class="hero_title"> NOSOTROS</h2>
            <p>
                Somos una empresa que busca desarrollar las tecnologias peruanas , y llevarla al siguiente nivel , para eso creemos 
                que devemos formar excelentes programadores y excelentes Sistemas.
            </p>
        </div>
        <figure class="hero_figure">
            <img src="./view/img/objetivos.png" alt="" class="hero_img" data-animation="up">
        </figure>
    </section>
    <section class="hero">
        <div class="hero_texts">
            <h2 class="hero_title"> Mision </h2>
            <p>
                Nuestra mision es liderar la innovacion en el desarrollo de soluciones de 
                software y hardware de alta calidad, al mismo tiempo que fomentamos el aprendisaje 
                y el crecimiento profesional a traves de una educacion tecnologica accesible y efectiva.
            </p>
        </div>
        <figure class="hero_figure">
            <img src="./view/img/modelo_gif_cdvo.gif" alt="" class="hero_img" data-animation="up">
        </figure>
        <div class="hero_texts">
            <h2 class="hero_title"> Vision </h2>
            <p>
                Ser lider en el desarrollo de tecnologias de vanguardia y en la formacion de talentos
                , creando un impacto positivo en el sector tecnologico y contribuyendo al desarrollo de una comunidad tecnologica 
                dinamica y altamente capacitada.
            </p>
        </div>
    </section>
<?php require_once("./view/layout/footer.php"); ?>