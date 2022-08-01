<?php

$url= "https://metar.vatsim.net/all";

$metar = file_get_contents($url);


$file = fopen("metar.txt", "w");

ftruncate($file, 0);

fwrite($file, $metar);

fclose($file);


?>
