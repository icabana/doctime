<?php

$config = Config::singleton();

$config->set('controladores', 'controladores/');
$config->set('plantillas', 'plantillas/');
$config->set('modelos', 'modelos/');
$config->set('vistas', 'vistas/');
$config->set('imagenes', 'images/');
$config->set('libreria', 'libs/');

$config->set('dbtype', 'mysql');
$config->set('dbhost', 'localhost');
$config->set('dbname', 'documentime');
$config->set('dbuser', 'root');
$config->set('dbpass', '');

$config->set('passEncript', 'sinap_palmasoft');

?>