<?php
require_once 'template/src/class/main.php';
$api = new api();

$films = $api->getFilms();

require_once 'template/src/view/home.php';
