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
<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!empty($_SESSION['usuario'])) {
        $inactividad = 3600;
        if(!empty($_SESSION["timeout"])){
            $sessionTTL = time() - $_SESSION["timeout"];
            if($sessionTTL > $inactividad){
                session_destroy();
                header("Location: /index.php");
            }
        }
    ?>
    <div id="banner">
        <p id="tituloBanner">La Faltriquera Elda</p>
    </div>
    <nav id="nav">
        <ul>
            <li><a href="/view/musica.php">Música</a></li>
            <li><a href="/view/apuntes.php">Apuntes</a></li>
            <li><a href="/view/indexView.php">Inicio</a></li>
            <li><a href="/controller/videosController.php">Videos</a></li>
        </ul>
    </nav>
    <h2 id="tituloMusica">Apuntes</h2>
    <div id="barra">
        <input type="text" id="buscador" onkeyup="buscar()" placeholder="Busca cualquier documento...">   
    </div>
    <iframe src="" id="visor"></iframe>
    <div id="apuntes">
        <div class="docs">
            <h4>Jota de San Antón</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota San Anton.pdf" download="Jota_San_Anton.pdf"><i class="fas fa-download"></i></a>
        </div>
        <div class="docs">
            <h4>Jota de Sax</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota Sax.pdf" download="Jota_Sax.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Jota de Salinas</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota Salinas.pdf" download="Jota_Salinas.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Ball de Tres (Pinoso)</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Ball de Tres (Pinoso).pdf" download="Ball_de_Tres.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Danza de Beneixama</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Danza Beneixama.pdf" download="Danza_Benexiama.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Jota de Banyeres</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota de Banyeres.pdf" download="Jota_Banyeres.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Jota de Monovar</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota de Monovar.pdf" download="Jota_Monovar.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Jota de Alguenya</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota Alguenya.pdf" download="Jota_Alguenya.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>L'u d' Alcoi</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/L'u d'Alcoi.pdf" download="Lu_Alcoi.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Jota de Villena</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota de Villena.pdf" download="Jota_Villena.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Fandango de Tres Xativa</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Fandango de Tres Xativa.pdf" download="Fandango_Xativa.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Jota de Novelda</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota Novelda.pdf" download="Jota_Novelda.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Jota del Postiguet</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota del Postiguet.pdf" download="Jota_Postiguet.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>Bolero Pla de Xàtiva</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Bolero Pla de Xativa.pdf" download="Bolero_Pla_Xativa.pdf"><i class="fas fa-download"></i></a> 
        </div>
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
            <?php 
    } else {

    ?>

    <div>
        <h2 class="error">Tienes que iniciar sesion para acceder</h2>
        <a href="/index.php">Vuelta a la pagina principal</a>
    </div>

    <?php

    } ?>
            <script type="text/javascript" src="/js/apuntes.js"></script>

</body>