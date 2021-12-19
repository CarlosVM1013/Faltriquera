<html>
<head>
    <meta charset="UTF-8">
    <title>La Faltriquera</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">
</head>
<body>
    <div id="banner">
        <p id="tituloBanner">La Faltriquera Elda</p>
    </div>
    <nav id="nav">
        <ul>
            <li><a href="/view/musica.html">Música</a></li>
            <li><a href="/view/apuntes.html">Apuntes</a></li>
            <li><a href="/view/indexView.html">Home</a></li>
            <li><a href="/controller/videosController.php">Videos</a></li>
        </ul>
    </nav>
    <h2 id="tituloMusica">Vídeos</h2>
    <div id="barra">
        <input type="text" id="buscador" onkeyup="buscar()" placeholder="Busca cualquier video...">   
    </div>
    <div id="popupVideos">
        <h2 id="tituloJota"></h2>
        <h3 id="tipoVideo"></h3>
        <div class="videoDiv">
            <h4 class="tituloVideo">JotaVillena_Parte1</h4>
            <video controls>
                <source src="/videos/JotaVillena/Tutorial/JotaVillena_Parte1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="videoDiv">
            <h4 class="tituloVideo">JotaVillena_Parte2</h4>
            <video controls>
                <source src="/videos/JotaVillena/Tutorial/JotaVillena_Parte2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="videoDiv">
            <h4 class="tituloVideo">JotaVillena_Castañuelas</h4>
            <video controls>
                <source src="/videos/JotaVillena/Tutorial/JotaVillena_Castañuelas.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div id="videos">
        <?php

        if (!empty($videos)) {
            foreach ($videos as $video) {
                echo $video;
            }
        }

        ?>
    </div>


    <div id="footer">
        <div class="container">
            <div class="row">
                <section class="col-3 col-6-narrower col-12-mobilep">
                    <h3>MENÚ</h3>
                    <ul class="links">
                        <li><a href="#">Musica</a></li>
                        <li><a href="#">Apuntes</a></li>
                        <li><a href="#">Jotas</a></li>
                        <li><a href="#">Videos Bailes</a></li>
                        <li><a href="#">Videos Tutoriales</a></li>
                    </ul>
                </section>
                <section class="col-3 col-6-narrower col-12-mobilep">
                    <h3>CONTACTO</h3>
                    <ul class="links">
                        <li><i class="fas fa-phone"></i><a href="tel:+34656698565">+34 644 321 513</a></li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:faltriqueras@gmail.com">faltriqueras@gmail.com</a></li>
                        <li><i class="fab fa-facebook"></i><a href="https://www.facebook.com/lafaltriquera.elda/" >La Faltriquera Elda</a></li>
                    </ul>
                </section>
                <section class="col-6 col-12-narrower">
                    <h3>CONTÁCTANOS</h3>
                    <form action="#" method="POST">
                        <div class="row gtr-50">
                            <div class="col-6 col-12-mobilep">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="col-6 col-12-mobilep">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" class="button alt" value="Send Message" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>

        <!-- Copyright -->
            <div class="copyright">
                <ul class="menu">
                    <li>&copy; La Faltriquera Elda. All rights reserved</li><li>Design: Carlos Vicente Mellinas</li>
                </ul>
            </div>
    </div>
    <script type="text/javascript" src="/js/videos.js"></script>
</body>