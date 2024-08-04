<?php
    require_once("./view/layout/header.php");
?>
    <link rel="stylesheet" href="./view/css/stylos_principal.css">
    <link rel="stylesheet" href="./view/css/estylos-academy.css">
    <script  defer src="./view/js/app.js"></script>
    <script defer src="./view/js/card_habilitar.js"></script>
    <script defer src="./view/js/disparador_arhivos.js"></script>
    <script defer src="./view/js/academy.js"></script>
</head>
<body>
    <?php require_once("./view/layout/navbar.php"); ?>
    <div class="imagen_date1"></div>
    <section class="hero">
        <div class="presentacion">
            <div class="imagen_presentacion ">
                <img src="./view/img/1.png" alt="">
                <p class="movimiento" >CDVO</p>
            </div>
            <div class="dato_presentacion " >
                <p>
                    Corporación de Desarrollo v. Online <br>
                    comprometido con el desarrollo de las tecnologias peruanas
                </p>
            </div>
        </div>
        <div class="botones_derecha">
            <a href="https://api.whatsapp.com/send/?phone=925543023&text= hola quisiera matricularme &type=phone_number" target="_blank" class="button">Matricularse</a>
            <a href="#intranet" class="button">Intranet</a>
            <a href="#cursos" class="button">ver cursos</a>
            <a href="#whi_cdvo" class="button">Informacion</a>
        </div>
        <div class="hero_texts">
            <h2 class="hero_title"> Inicio </h2>
            <p>
                Las clases inician el 4 de agosto <br> cada clase esta configurada de lunes a viernes 
                cada uno de ellos duran 3 horas.
                Aprende un nuevo lenguaje de programacion mientras disfrutas tus vacaciones
                ¡Clases gratuitas de c++ los domingos!
             </p>
        </div>
        <figure class="hero_figure">
            <img src="./view/img/academy1.gif" class="hero_img" alt="" data-animation="show">
        </figure>
    </section>
    <section class="hero" id="informacion">
        <div class="hero_texts">
            <h2 class="hero_title"> Informacion </h2>
            <p>
                CDVO comprometido con el desarrollo de tecnologias brinda clases a todos las personas que quieran 
                aprender las tecnologias que estan innovando el futuro. 
                Asesorando a los estudiantes desde cero a intermedio. 
                <br>
                Al completar el curso por completo y estar entre los primeros puestos , obtendras un certificado de reconocimiento
                firmado por la empresa.(este puede ayudarte a entrar a la empresa).
                <br>

            </p>
        </div>
        <figure class="hero_figure">
            <img src="./view/img/academy4.gif" class="hero_img" alt="" data-animation="show">
        </figure>
    </section>
    <section class="hero" id="whi_cdvo">
        <div class="hero_texts">
            <h2 class="hero_title title"> ¿ QUE ES CDVO-Academy?</h2>
            <div class="card">
                    <div class="card-content">
                        <p class="title">
                        “CDVO - ACADEMY”
                        </p>
                        <p class="subtitle">
                            Se creo esta plataforma para pulir las capacidades de los estudiantes de informatica o sistemas, llevandolos al siguiente nivel. 
                            donde cada mienbro es asesorado en su camino de la programacion.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <p class="card-footer-item">
                            <span> Pedir mas <a target="_blank" href="https://api.whatsapp.com/send/?phone=925543023&text= hola quisiera mas informacion &type=phone_number">Informacion</a> </span>
                        </p>
                    </footer>
                </div>
        </div>
        <figure class="hero_figure">
            <img src="./view/img/modelo_gif_cdvo.gif" alt="" class="hero_img" data-animation="up">
        </figure>
    </section>
    <section class="hero" id="cursos">
        <div class="hero_texts">
            <h2 class="hero_title"> Cursos </h2>
            <div class="contenedor_cursos">
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                        “C++”
                        </p>
                        <p class="subtitle">
                            Disponible en 2 turnos (por la mañana y por la tarde)
                            en un horario de lunes a vienes , con 3h de programacion.
                            ¡Actualmente los domingos es gratuito!
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            Incribirse al 
                            <a target="_blank" href="https://api.whatsapp.com/send/?phone=925543023&text= hola quisiera incribirme al curso de c++ &type=phone_number"
                            >Curso</a
                            >
                        </span>
                        </p>
                        <p class="card-footer-item">
                            <span> Pedir mas <a class="informacion">Informacion</a> </span>
                        </p>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                        “DISEÑO DE PAGINAS WEB”
                        </p>
                        <p class="subtitle">
                            El curso esta disponible en el horario de 9 - 11 am
                            lunes a vienes , con 3h de diseños.
                            ¡Actualmente los domingos es gratuito!
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            Incribirse al 
                            <a target="_blank" href="https://api.whatsapp.com/send/?phone=925543023&text= hola quisiera incribirme al curso de diseño de paginas web &type=phone_number"
                            >Curso</a
                            >
                        </span>
                        </p>
                        <p class="card-footer-item">
                            <span> Pedir mas <a class="informacion">Informacion</a> </span>
                        </p>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                        “Javascript”
                        </p>
                        <p class="subtitle">
                            clases de lunes a viernes . con 2 turnos (por la mañana y por la tarde) 
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            Incribirse al 
                            <a target="_blank" href="https://api.whatsapp.com/send/?phone=925543023&text= hola quisiera matricularme a js &type=phone_number"
                            >Curso</a
                            >
                        </span>
                        </p>
                        <p class="card-footer-item">
                            <span> Pedir mas <a target="_blank" href="https://api.whatsapp.com/send/?phone=925543023&text= hola quisiera mas informacion &type=phone_number">Informacion</a> </span>
                        </p>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                        “PHP”
                        </p>
                        <p class="subtitle">
                            El curso finalizo 
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            Consultar otras 
                            <a href="https://api.whatsapp.com/send/?phone=925543023&text= hola quisiera informacion de php &type=phone_number"
                            target="_blank">Fecha</a
                            >
                        </span>
                        </p>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                        “JAVA”
                        </p>
                        <p class="subtitle">
                            El curso finalizo 
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            Consultar otras 
                            <a href="https://api.whatsapp.com/send/?phone=925543023&text= hola quisiera informacion &type=phone_number"
                            target="_blank" >Fecha</a
                            >
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
        </div>
        <figure class="hero_figure">
            <img src="./view/img/academy5.gif" class="hero_img" alt="" data-animation="up">
        </figure>
    </section>
    <section class="hero" id="intranet">
        <div class="hero_texts">
            <h2 class="hero_title"> INTRANET </h2>
            <div class="card">
                    <div class="card-content">
                        
                        <p class="subtitle">
                            CDVO desarrollo una plataforma exclusivamente para sus estudiantes 
                            donde puedes ver tus avances y tus apuntes del curso.
                            puedes acceder a el de manera gratuita. 
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            Ir a
                            <a href="#"
                            target="_blank" >Intranet</a
                            >
                        </span>
                        </p>
                    </footer>
                </div>
        </div>
        <figure class="hero_figure">
            <img src="./view/img/academy2.gif" alt="" class="hero_img" data-animation="up">
        </figure>
    </section>
    <!-- modal para los datos -->
    <div id="modal_datos" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
            <p class="modal-card-title" id="titulo_modal">a</p>
            <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body" id="contenido_modal">
            <!-- Content ... -->
            </section>
            <footer class="modal-card-foot">
            <div class="buttons">
                <a target="_blank" href="s" id="suscribirse" class="button is-success" >SUSCRIBIRSE</a>
                <!-- <button id="suscribirse" class="button is-success">SUSCRIBIRSE</button> -->
                <button class="button">Entendido</button>
            </div>
            </footer>
        </div>
    </div>
<?php require_once("./view/layout/footer.php"); ?>