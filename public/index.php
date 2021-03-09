<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
echo '1 <hr>';
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
echo $uri . '<hr>';
echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if($uri === '/' || $uri === '' || $uri === '/index.php'){
    $uri = '/login.php';
}

echo $uri . '<hr>';
echo CONTROLLER_PATH . "/{$uri}";
require_once(CONTROLLER_PATH . "/{$uri}");