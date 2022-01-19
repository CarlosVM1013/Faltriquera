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
    <?php
    if(!empty($_SESSION['usuario'])) {

    ?>
    <div id="mainContent">
        <h2>¿Quiénes somos?</h2>
        <h3>GRUPO DE DANZAS DE LA MAYORDOMIA DE SAN ANTON "LA FALTRIQUERA</h3>
        <p>En 1998, el grupo sale a las calles de Elda junto a la Mayordomía de San Antón en la celebración de la Media Fiesta de Moros y Cristianos recuperando así las danzas de Elda. A partir de 1999 queda consolidado el grupo con el nombre de “La Faltriquera” bajo la tutela de la Mayordomía de San Antón.</p> 
        <p>Desde su inicio han sido muchas y diversas sus actuaciones (Fiestas Mayores, Pregón de Moros y Cristianos, presentaciones en fallas, visitas al geriátrico “El Catí”, actuaciones en otros municipios como Torrent, Festival Folclórico de Sax, etc.), pero su papel determinante lo desempeñan en los actos de la Media Fiesta de Moros y Cristianos de Elda, celebrada en honor a San Antón, así como en el día de la festividad de nuestro  santo, el 17 de enero.</p>
        <p>En la actualidad son unas treinta personas las que componen “La Faltriquera”, cuyas actuaciones siempre están acompañadas por la colla de la Mayordomía. Además de los ensayos mensuales que realiza el grupo, las danzas están siendo difundidas gracias a la inestimable colaboración de la profesora del C.P. Antonio Machado, Gloria, que de forma desinteresada realiza como actividad extraescolar ensayos de las danzas entre los alumn@s de ese colegio. Podríamos decir que en este momento es la cantera del grupo de danzas, porque estos alumnos pasan a formar parte del grupo de la Mayordomía una vez están preparados para bailar en público. Dirigidas por Mari Reme Molina, siguen ahondando en las tradiciones eldenses y el folclore de la comunidad incorporando a su repertorio nuevas danzas de localidades cercanas como Sax, Salinas, Pinoso, o Beneixama.</p>
    </div>

    <?php }
    else {
    ?>

    <div id="loginSignin">
        <div id="login">
            <form id="loginForm" action="/controller/loginController.php" method="POST">
                <label for="loginNombre">Usuario: </label>
                <input type="text" id="loginNombre" name="loginNombre" required>
                <?php if (!empty($usuarioError)) {echo '<p class="error">'.$usuarioError.'</p>';}?>

                <label for="loginContrasena">Contraseña: </label>
                <input type="password" id="loginContrasena" name="loginContrasena" required>
                <?php if (!empty($contrasenaError)) {echo '<p class="error">'.$contrasenaError.'</p>';}?>
                
                <input type="submit" id="loginButton" value="Iniciar Sesión">
            </form>
        </div>
    </div>

    <?php }
    ?>

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
</body>
</html>