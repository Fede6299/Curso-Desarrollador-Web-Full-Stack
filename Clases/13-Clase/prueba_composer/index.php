<?php 

require __DIR__ . '/vendor/autoload.php'; //INCLUIR EL ARCHIVO AUTOLOAD.php

use Cocur\Slugify\Slugify;

//echo "TITULO DE LA NOTICIA"; // => slug?? dominio.com.ar/posteos/titulo-de-la-noticia

$slugify = new Slugify();
echo $slugify->slugify("TITULO DE LA NOTICIA");