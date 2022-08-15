<?php
require_once "../model/db.php";

function buscarVideos() {
    $link =Conectar::conexion();
    
    $videos = [];

    $query = mysqli_query($link, 'SELECT * FROM videos ORDER BY nombre;');
    while ($results = mysqli_fetch_array($query)) {
        $tutorial = "class='disabled'";
        $baile = "class='disabled'";

        /* Se busca si hay algun video del baile*/
        $query2 = mysqli_query($link, 'SELECT * FROM enlaceVideos WHERE tipoVideo = 1 and idVideos = '.$results['ID']);
        if (($query2) && ($query2->num_rows > 0)) {
            $videosBaile = [];
            while ($results2 = mysqli_fetch_array($query2)) {
                array_push($videosBaile, $results2['url']);
            }
            $baile = "onclick='showTutorial(this, ".json_encode($videosBaile).")'";
        }

        
        /* Se busca si hay algun video del tutorial*/ 
        $query3 = mysqli_query($link, 'SELECT * FROM enlaceVideos WHERE tipoVideo = 2 and idVideos = '.$results['ID']);
        if (($query3) && ($query3->num_rows > 0)) {
            $videosTutorial = [];
            while ($results2 = mysqli_fetch_array($query3)) {
                array_push($videosTutorial, $results2['url']);
            }
            $tutorial = "onclick='showBaile(this, ".json_encode($videosTutorial).")'";
        }

        $video = 
            '<div class="video">
                <h4>'.$results['nombre'].'</h4>
                <div class="videosButtons">
                    <button '.$tutorial.'>Tutorial</button>
                    <button '.$baile.'">Baile</button>
                </div>
            </div>';

        array_push($videos, $video);
    }

    include '../view/videos.php';
}

/*
foreach (scandir($dir) as $folder) {
    if (substr($folder, 0,1) != '.') {
        $titulo = file_get_contents($dir.'/'.$folder.'/titulo.txt');
        $tutorial = '';
        $baile = '';

        if (is_dir_empty($dir.'/'.$folder.'/Tutorial/')) {
            $tutorial = "class='disabled'"; 
        } else {
            $videosTutorial = getVideos($dir.'/'.$folder.'/Tutorial/');
            $tutorial = "onclick='showTutorial(this, ".json_encode($videosTutorial).")'";
        }

        if (is_dir_empty($dir.'/'.$folder.'/Baile/')) {
            $baile = "class='disabled'"; 
        } else {
            $videosBaile = getVideos($dir.'/'.$folder.'/Baile/');
            $baile = "onclick='showBaile(this, ".json_encode($videosBaile).")'";
        }

        if ($titulo) {
            $video = 
            '<div class="video">
                <h4>'.$titulo.'</h4>
                <div class="videosButtons">
                    <button '.$tutorial.'>Tutorial</button>
                    <button '.$baile.'">Baile</button>
                </div>
            </div>';

            array_push($videos, $video);
        }
    }
}
*/

buscarVideos();

?>