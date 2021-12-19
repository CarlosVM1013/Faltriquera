<?php
$dir = "/assets/$pid/v";

if (is_dir_empty($dir)) {
  echo "the folder is empty"; 
}else{
  echo "the folder is NOT empty";
}

function is_dir_empty($dir) {
  if (!is_readable($dir)) return null; 
  return (count(scandir($dir)) == 2);
}

?>