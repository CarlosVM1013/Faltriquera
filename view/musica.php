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
    <h2 id="tituloMusica">Música</h2>
    <div id="barra">
        <input type="text" id="buscador" onkeyup="buscar()" placeholder="Busca cualquier canción...">   
    </div>
    <div id="musica">
        <div class="song">
            <div class="songHeader">
                <h4>01. San Antón</h4>
                <a href="/musica/01. SAN ANTON.mp3" download="01.SAN_ANTON.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/01. SAN ANTON.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>02. Sax</h4>
                <a href="/musica/02. SAX.mp3" download="02.SAX.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/02. SAX.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>03. Salinas</h4>
                <a href="/musica/03. SALINAS (AROS).mp3" download="03.SALINAS.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/03. SALINAS (AROS).mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>04. Pinoso</h4>
                <a href="/musica/04. PINOSO (3) CORTADA.mp3" download="04.PINOSO.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/04. PINOSO (3) CORTADA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>05. Beneixama</h4>
                <a href="/musica/05. BENEIXAMA 2.0 (CASTAÑUELAS).mp3" download="05.BENEIXAMA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/05. BENEIXAMA 2.0 (CASTAÑUELAS).mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>06. Jota Banyeres (Lenta)</h4>
                <a href="/musica/06. JOTA BANYERES LENTA.mp3" download="06.JOTA_BANYERES_LENTA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/06. JOTA BANYERES LENTA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>06. Jota Banyeres (Rapida)</h4>
                <a href="/musica/06. JOTA DE BANYERES RAPIDA.mp3" download="06.JOTA_BANYERES_RAPIDA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/06. JOTA DE BANYERES RAPIDA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>07. Jota de Monovar</h4>
                <a href="/musica/07. JOTA DE MONOVAR 2.0.mp3" download="07.JOTA_MONOVAR.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/07. JOTA DE MONOVAR 2.0.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>08. Jota de la Alguenya</h4>
                <a href="/musica/08. JOTA DE LA ALGUENYA.mp3" download="08.JOTA_ALGUENYA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/08. JOTA DE LA ALGUENYA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>08. Jota de la Alguenya 2.0</h4>
                <a href="/musica/08. JOTA DE LA ALGUENYA 2.0.mp3" download="08.JOTA_ALGUENYA2.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/08. JOTA DE LA ALGUENYA 2.0.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>09. L'u d'Alcoi (Bajos)</h4>
                <a href="/musica/09. L_U D_ALCOI 2.0.mp3" download="09.LU_D_ALCOI_BAJOS.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/09. L_U D_ALCOI 2.0.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>09. L'u d'Alcoi (Alto)</h4>
                <a href="/musica/09. L_Ú D_ALCOI.mp3" download="09.LU_D_ALCOI_ALTO.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/09. L_Ú D_ALCOI.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>10. Jota de Villena (Lenta)</h4>
                <a href="/musica/10. JOTA DE VILLENA LENTA.mp3" download="10.VILLENA_LENTA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/10. JOTA DE VILLENA LENTA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>10. Jota de Villena 2(Lenta)</h4>
                <a href="/musica/10. JOTA DE VILLENA LENTA 2.mp3" download="10.VILLENA_LENTA2.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/10. JOTA DE VILLENA LENTA 2.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>10. Jota de Villena (Rapida)</h4>
                <a href="/musica/10. JOTA DE VILLENA RAPIDA.mp3" download="10.VILLENA_RAPIDA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/10. JOTA DE VILLENA RAPIDA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>11. Fandango de Tres Xativa</h4>
                <a href="/musica/11. FANDANGO DE TRES XÀTIVA (Castañuelas).mp3" download="11.FANDANGO_TRES_XATIVA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/11. FANDANGO DE TRES XÀTIVA (Castañuelas).mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>12. Bolero Pla de Xativa</h4>
                <a href="/musica/12. BOLERO PLA DE XÀTIVA.mp3" download="12.BOLERO_PLA_XATIVA"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/12. BOLERO PLA DE XÀTIVA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>12. Bolero Pla de Xativa 2</h4>
                <a href="/musica/12. BOLERO PLA DE XATIVA 2.mp3" download="12.BOLERO_PLA_XATIVA2"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/12. BOLERO PLA DE XATIVA 2.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>13. Bolero de Castellon</h4>
                <a href="/musica/13. BOLERO DE CASTELLON.mp3" download="13.BOLERO_CASTELLON.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/13. BOLERO DE CASTELLON.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>14. Jota del Postiguet</h4>
                <a href="/musica/14. JOTA DEL POSTIGUET.mp3" download="14.JOTA_DEL_POSTIGUET.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/14. JOTA DEL POSTIGUET.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>15. Jota Novelda</h4>
                <a href="" download=""><i class="fas fa-download"></i></a> 
            </div>
            <audio src="" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>16. Fandango de Tibi</h4>
                <a href="/musica/16. FANDANGO DE TIBI.mp3" download="16.FANDANGO_TIBI.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/16. FANDANGO DE TIBI.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>17. Sandinga de Crevillent</h4>
                <a href="/musica/17. SANDINGA DE CREVILLENT.mp3" download="17.SANDINGA_CREVILLENT.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/17. SANDINGA DE CREVILLENT.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>18. La Danceta de Crevillent</h4>
                <a href="/musica/18. LA DANCETA DE CREVILLENT.mp3" download="18.DANCETA_CREVILLENT"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/18. LA DANCETA DE CREVILLENT.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>19. Jota Rodà de Castalla</h4>
                <a href="/musica/19. JOTA RODA DE CASTALLA.mp3" download="19.JOTA_RODA_CASTALLA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/19. JOTA RODA DE CASTALLA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>20. Cadena</h4>
                <a href="/musica/20. CADENA.mp3" download="20.CADENA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/20. CADENA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>21. La Villanera de Ibi</h4>
                <a href="/musica/21. LA VILLANERA DE IBI.mp3" download="21.VILLANERA_IBI.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/21. LA VILLANERA DE IBI.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>22. Mazurca dels Pascualos</h4>
                <a href="/musica/22. MAZURCA DELS PASCUALOS.mp3" download="22.MAZURCA_DELS_PASCUALOS.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/22. MAZURCA DELS PASCUALOS.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>23. Malaguenya de Barxeta</h4>
                <a href="/musica/23. MALAGUENYA DE BARXETA.mp3" download="23.MALAGUENYA_BARXETA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/23. MALAGUENYA DE BARXETA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
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
    <script type="text/javascript" src="/js/musica.js"></script>
</body>
