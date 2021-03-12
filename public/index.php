<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri === '/' || $uri === '' || $uri === '/index.php'){
    $uri = '/login.php';
}

//Assim funciona
//require_once(CONTROLLER_PATH . '/day_records.php');
//abaixo não redireciona para o arquivo acima

//echo CONTROLLER_PATH . "/{$uri}";
require_once(CONTROLLER_PATH . "/{$uri}");