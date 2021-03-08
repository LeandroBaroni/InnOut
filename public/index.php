<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
echo '1';
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri === '/' || $uri === '' || $uri === '/index.php'){
    $uri = '/login.php';
}

echo $uri . '<hr>';

require_once(CONTROLLER_PATH . "/{$uri}");