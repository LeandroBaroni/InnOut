<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
<<<<<<< HEAD
echo '1 <hr>';
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
echo $uri . '<hr>';
echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
=======
echo '1';
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

>>>>>>> 1b1d713b6aad9122cdd5f44e6393890299e429d5
if($uri === '/' || $uri === '' || $uri === '/index.php'){
    $uri = '/login.php';
}

echo $uri . '<hr>';
<<<<<<< HEAD
echo CONTROLLER_PATH . "/{$uri}";
=======

>>>>>>> 1b1d713b6aad9122cdd5f44e6393890299e429d5
require_once(CONTROLLER_PATH . "/{$uri}");