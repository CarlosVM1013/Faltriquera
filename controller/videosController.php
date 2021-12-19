<?php

$dir = '../videos';
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

    echo var_dump($videos);
    return $videos;
}

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

include '../view/videos.php';

?>