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
            <h4>1. Jota de San Antón</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota San Anton.pdf" download="Jota_San_Anton.pdf"><i class="fas fa-download"></i></a>
        </div>
        <div class="docs">
            <h4>2. Jota de Sax</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota Sax.pdf" download="Jota_Sax.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>3. Jota de Salinas</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota Salinas.pdf" download="Jota_Salinas.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>4. Ball de Tres (Pinoso)</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Ball de Tres (Pinoso).pdf" download="Ball_de_Tres.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>5. Danza de Beneixama</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Danza Beneixama.pdf" download="Danza_Benexiama.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>6. Jota de Banyeres</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota de Banyeres.pdf" download="Jota_Banyeres.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>7. Jota de Monovar</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota de Monovar.pdf" download="Jota_Monovar.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>8. Jota de Alguenya</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota Alguenya.pdf" download="Jota_Alguenya.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>9. L'u d' Alcoi</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/L'u d'Alcoi.pdf" download="Lu_Alcoi.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>10. Jota de Villena</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota de Villena.pdf" download="Jota_Villena.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>11. Fandango de Tres Xativa</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Fandango de Tres Xativa.pdf" download="Fandango_Xativa.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>12. Bolero Pla de Xàtiva</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Bolero Pla de Xativa.pdf" download="Bolero_Pla_Xativa.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>13. Jota de Xàtiva</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota de Xativa.pdf" download="Jota_Xativa.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>15. Bolero de Castellon</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Bolero de Castellon.pdf" download="Bolero_Castellon.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>16. Jota del Postiguet</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota del Postiguet.pdf" download="Jota_Postiguet.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>17. Jota de Novelda</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota Novelda.pdf" download="Jota_Novelda.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>18. Malaguenya de Barxeta</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Malaguenya de Barxeta.pdf" download="Malaguenya_Barxeta.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>19. Jota de Beniganim</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota de Beniganim.pdf" download="Jota_Beniganim.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>21. Malaguenya de Aspe</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Malaguenya de Aspe.pdf" download="Malaguenya_Aspe.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>22. Fandango de Xixona</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Fandango de Xixona.pdf" download="Fandango_Xixona.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>23. Petenera de Xativa</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Petenera de Xativa.pdf" download="Petenera_Xativa.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>24. Jota de la Calle de la Cruz</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota de la Calle de la Cruz.pdf" download="Jota_Calle_Cruz.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>25. L'u de Biar</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/L' u de Biar.pdf" download="LU_Biar.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>26. Jota del Castellut</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota del Castellut.pdf" download="Jota_Castellut.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>27. Ball de Tres de Monforte</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Ball de Tres de Monforte.pdf" download="Ball_Tres_Monforte.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>28. Fandango de Verdegas</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Fandango de Verdegas.pdf" download="Fandango_Verdegas.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>29. Jota de Aspe</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Jota de Aspe.pdf" download="Jota_Aspe.pdf"><i class="fas fa-download"></i></a> 
        </div>
        <div class="docs">
            <h4>30. Malagueña de la Casa de los Pavos</h4>
            <a onclick="mostrar(this)"><i class="fas fa-eye"></i></a>
            <a href="/apuntes/Malaguenya de la Casa de los Pavos.pdf" download="Malaguenya_Casa_Pavos.pdf"><i class="fas fa-download"></i></a> 
        </div>
    </div>

    <div id="footer">
        <div class="container">
            <div class="row">
                <section class="col-3 col-6-narrower col-12-mobilep">
                    <h3>MENÚ</h3>
                    <ul class="links">
                        <li><a href="/view/musica.php">Música</a></li>
                        <li><a href="/view/apuntes.php">Apuntes</a></li>
                        <li><a href="/view/indexView.php">Inicio</a></li>
                        <li><a href="/controller/videosController.php">Videos</a></li>
                    </ul>
                </section>
                <section class="col-3 col-6-narrower col-12-mobilep">
                    <h3>CONTACTO</h3>
                    <ul class="links">
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
