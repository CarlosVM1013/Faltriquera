<?php
require_once "../model/db.php";

$videos = [];

function is_dir_empty($dir) {
    if (!is_readable($dir)) return null; 
        return (count(scandir($dir)) == 3);
}

function getVideos($dir) {
    $videos = [];
    foreach (scandir($dir) as $video) {
        if (substr($video, -3) === 'mp4')
        array_push($videos, $dir.$video);
    }

    return $videos;
}

function buscarVideos() {
    $link =Conectar::conexion();
    $query = mysqli_query($link, 'SELECT * FROM videos ORDER BY nombre;');
    while ($results = mysqli_fetch_array($query)) {
        $tutorial = "class='disabled'";
        $baile = "class='disabled'";
        
        $video = 
            '<div class="video">
                <h4>'.$results['nombre'].'</h4>
                <div class="videosButtons">
                    <button '.$tutorial.'>Tutorial</button>
                    <button '.$baile.'">Baile</button>
                </div>
            </div>';

        array_push($videos, $video);
        var_dump($video);
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