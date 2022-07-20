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
                <a href="/musica/09. L'U D'ALCOI 2.0.mp3" download="09.LU_D_ALCOI.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/09. L'U D'ALCOI 2.0.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>10. Jota de Villena (Lenta)</h4>
                <a href="/musica/10. JOTA DE VILLENA LENTA 2.mp3" download="10.VILLENA_LENTA.mp3"><i class="fas fa-download"></i></a> 
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
                <h4>13. Jota de Xativa</h4>
                <a href="/musica/13. JOTA DE XATIVA (Cortada).mp3" download="13.JOTA_XATIVA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/13. JOTA DE XATIVA (Cortada).mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>14. Jota de Xixona</h4>
                <a href="/musica/14. JOTA DE XIXONA.mp3" download="14.JOTA_XIXONA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/14. JOTA DE XIXONA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>14. Jota de Xixona 2</h4>
                <a href="/musica/14. JOTA DE XIXONA 2.mp3" download="14.JOTA_XIXONA2.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/14. JOTA DE XIXONA 2.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>15. Bolero de Castellon</h4>
                <a href="/musica/15. BOLERO DE CASTELLON.mp3" download="15.BOLERO_CASTELLON.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/15. BOLERO DE CASTELLON.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>16. Jota del Postiguet</h4>
                <a href="/musica/16. JOTA DEL POSTIGUET.mp3" download="16.JOTA_DEL_POSTIGUET.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/16. JOTA DEL POSTIGUET.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>17. Jota Novelda</h4>
                <a href="" download=""><i class="fas fa-download"></i></a> 
            </div>
            <audio src="" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>18. Malaguenya de Barxeta</h4>
                <a href="/musica/18. MALAGUENYA DE BARXETA.mp3" download="18.MALAGUENYA_BARXETA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/18. MALAGUENYA DE BARXETA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>19. Jota de Beniganim</h4>
                <a href="/musica/19. JOTA DE BENIGANIM.mp3" download="19.JOTA_BENIGANIM.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/19. JOTA DE BENIGANIM.mp3" controls>	
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
                <h4>21. Malagueña de Aspe</h4>
                <a href="/musica/21. MALAGUENYA DE ASPE 2.mp3" download="21.MALAGUENYA_ASPE.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/21. MALAGUENYA DE ASPE 2.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>22. Fandango de Xixona</h4>
                <a href="/musica/22. FANDANGO DE XIXONA.mp3" download="22.FANDANGO_XIXONA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/22. FANDANGO DE XIXONA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>23. Petenera de Xativa</h4>
                <a href="/musica/23. PETENERA DE XATIVA.mp3" download="23.PETENERA_XATIVA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/23. PETENERA DE XATIVA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>24. Jota Calle de la Cruz</h4>
                <a href="/musica/24. JOTA CALLE DE LA CRUZ.mp3" download="24.JOTA_CALLE_CRUZ.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/24. JOTA CALLE DE LA CRUZ 2.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>25. L'U de Biar</h4>
                <a href="/musica/25. L_U DE BIAR.mp3" download="25.LU_BIAR.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/25. L_U DE BIAR.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>26. Jota del Castellut</h4>
                <a href="/musica/26. JOTA DEL CASTELLUT.mp3" download="26.JOTA_CASTELLUT.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/26. JOTA DEL CASTELLUT.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>27. Ball de Tres (Monforte Corta)</h4>
                <a href="/musica/27. BALL DE TRES (MONFORTE CORTA).mp3" download="27.BALL_TRES_MONFORTE_CORTA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/27. BALL DE TRES (MONFORTE CORTA).mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>27. Ball de Tres (Monforte Larga)</h4>
                <a href="/musica/27. BALL DE TRES (MONFORTE LARGA).mp3" download="27.BALL_TRES_MONFORTE_LARGA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/27. BALL DE TRES (MONFORTE LARGA).mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>28. Fandango de Verdegas</h4>
                <a href="/musica/28. FANDANGO DE VERDEGAS.mp3" download="28.FANDANGO_VERDEGAS.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/28. FANDANGO DE VERDEGAS.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>29. Jota de Aspe</h4>
                <a href="/musica/29. JOTA DE ASPE.mp3" download="29.JOTA_ASPE.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/29. JOTA DE ASPE.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>30. Malagueña de la Casa de los Pavos</h4>
                <a href="/musica/30. MALAGUEÑA DE LA CASA DE LOS PAVOS.mp3" download="30.MALAGUENYA_CASA_PAVOS.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/30. MALAGUEÑA DE LA CASA DE LOS PAVOS.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>31. Jota de Hondon de las Nieves</h4>
                <a href="/musica/31. JOTA HONDON DE LAS NIEVES.mp3" download="31.JOTA_HONDON_NIEVES.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/31. JOTA HONDON DE LAS NIEVES.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>32. Pedreguera de Benissa</h4>
                <a href="/musica/32. PEDREGUERA DE BENISSA.mp3" download="32.PEDREGUERA_BENISSA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/32. PEDREGUERA DE BENISSA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>33. Jota de la Serra de la Pila</h4>
                <a href="/musica/33. JOTA SERRA DE LA PILA.mp3" download="33.JOTA_SERRA_PILA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/33. JOTA SERRA DE LA PILA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>34. Malagueña de Hondon de las Nieves</h4>
                <a href="/musica/34. MALAGUENYA HONDON DE LAS NIEVES.mp3" download="34.MALAGUENYA_HONDON_NIEVES.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/34. MALAGUENYA HONDON DE LAS NIEVES.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>35. Jota de Pinoso</h4>
                <a href="/musica/35. JOTA DEL PINOS.mp3" download="35.JOTA_PINOSO.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/35. JOTA DEL PINOS.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>36. La Carrasquilla</h4>
                <a href="/musica/36. LA CARRASQUILLA.mp3" download="36.CARRASQUILLA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/36. LA CARRASQUILLA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>37. Baile a Tres de Villena</h4>
                <a href="/musica/37. BAILE A TRES DE VILLENA.mp3" download="37.BAILE_TRES_VILLENA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/37. BAILE A TRES DE VILLENA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>38. Seguidilles de Enguera</h4>
                <a href="/musica/38. SEGUIDILLES ENGUERA.mp3" download="38.SEGUIDILLES_ENGUERA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/38. SEGUIDILLES ENGUERA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>39. Jota de Bacarot</h4>
                <a href="/musica/39. JOTA DE BACAROT.mp3" download="39.JOTA_BACAROT.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/39. JOTA DE BACAROT.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>40. Ball pla de Busot</h4>
                <a href="/musica/40. BALL PLA DE BUSOT.mp3" download="40.BALL_PLA_BUSOT"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/40. BALL PLA DE BUSOT.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>41. Malaguenya de Mutxamel</h4>
                <a href="/musica/41. MALAGUENYA DE MUTXAMEL.mp3" download="41.MALAGUENYA_MUTXAMEL"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/41. MALAGUENYA DE MUTXAMEL.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>42. Jota Roda de Biar</h4>
                <a href="/musica/42. JOTA RODA DE BIAR.mp3" download="42.JOTA_RODA_BIAR"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/42. JOTA RODA DE BIAR.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>43. Copeo de Banyeres</h4>
                <a href="/musica/43. COPEO DE BANYERES.mp3" download="43.COPEO_BANYERES"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/43. COPEO DE BANYERES.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>44. Bolero Creuat</h4>
                <a href="/musica/44. BOLERO CREUAT.mp3" download="44.BOLERO_CREUAT"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/44. BOLERO CREUAT.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>45. L'U del Tio Mariano</h4>
                <a href="/musica/45. L'U DEL TIO MARIANO.mp3" download="45.U_TIO_MARIANO"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/45. L'U DEL TIO MARIANO.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>46. Danza de Santa Caterina</h4>
                <a href="/musica/46. DANZA DE SANTA CATERINA.mp3" download="46.DANZA_SANTA_CATERINA"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/46. DANZA DE SANTA CATERINA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>47. Malaguenya de Monover</h4>
                <a href="/musica/47. MALAGUENYA DE MONOVER.mp3" download="47.MALAGUENYA_MONOVER"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/47. MALAGUENYA DE MONOVER.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>48. Danza del Velatorio</h4>
                <a href="/musica/48. DANSA DEL VETLATORI.mp3" download="48.DANZA_VELATORIO"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/48. DANSA DEL VETLATORI.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>49. Jota de Alfarp</h4>
                <a href="/musica/49. JOTA DE ALFARP.mp3" download="49.JOTA_ALFARP"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/49. JOTA DE ALFARP.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>50. Ball de Tres Monover</h4>
                <a href="/musica/50. BALL DE TRES DE MONOVER.mp3" download="50.BALL_TRES_MONOVER"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/50. BALL DE TRES DE MONOVER.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>51. Sandinga de Xixona</h4>
                <a href="/musica/51. SANDINGA DE XIXONA.mp3" download="51.SANDINGA_XIXONA"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/51. SANDINGA DE XIXONA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>52. Jota de Liberata</h4>
                <a href="/musica/52. JOTA DE LIBERATA.mp3" download="52.JOTA_LIBERATA"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/52. JOTA DE LIBERATA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>53. Jota Alguenyera del Segadors</h4>
                <a href="/musica/53. JOTA ALGUENYERA DELS SEGADORS.mp3" download="53.JOTA_SEGADORS"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/53. JOTA ALGUENYERA DELS SEGADORS.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>54. Malaguenya de la Tia Leonarda</h4>
                <a href="/musica/54. MALAGUENYA DE LA TIA LEONARDA.mp3" download="54.MALAGUENYA_TIA_LEONARDA"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/54. MALAGUENYA DE LA TIA LEONARDA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>55. Seguidilles de la Foia de Castalla</h4>
                <a href="/musica/55. SEGUIDILLES DE LA FOIA DE CASTALLA.mp3" download="55.SEGUIDILLES_FOIA_CASTALLA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/55. SEGUIDILLES DE LA FOIA DE CASTALLA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>56. La Danceta de Crevillent</h4>
                <a href="/musica/56. LA DANCETA DE CREVILLENT.mp3" download="56.DANCETA_CREVILLENT"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/56. LA DANCETA DE CREVILLENT.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>57. La Villanera de Ibi</h4>
                <a href="/musica/57. LA VILLANERA DE IBI.mp3" download="57.VILLANERA_IBI.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/57. LA VILLANERA DE IBI.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>58. Mazurca dels Pascualos</h4>
                <a href="/musica/58. MAZURCA DELS PASCUALOS.mp3" download="5/8.MAZURCA_DELS_PASCUALOS.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/58. MAZURCA DELS PASCUALOS.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>59. Fandango de Tibi</h4>
                <a href="/musica/59. FANDANGO DE TIBI.mp3" download="59.FANDANGO_TIBI.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/59. FANDANGO DE TIBI.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>60. Sandinga de Crevillent</h4>
                <a href="/musica/60. SANDINGA DE CREVILLENT.mp3" download="60.SANDINGA_CREVILLENT.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/60. SANDINGA DE CREVILLENT.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>61. Jota Rodà de Castalla</h4>
                <a href="/musica/61. JOTA RODA DE CASTALLA.mp3" download="61.JOTA_RODA_CASTALLA.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/61. JOTA RODA DE CASTALLA.mp3" controls>	
                <p>Fallback content goes here.</p>
            </audio>
        </div>
        <div class="song">
            <div class="songHeader">
                <h4>62. Bolero de Carlet</h4>
                <a href="/musica/62. BOLERO DE CARLET.mp3" download="62.BOLERO_CARLET.mp3"><i class="fas fa-download"></i></a> 
            </div>
            <audio src="/musica/62. BOLERO DE CARLET.mp3" controls>	
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
