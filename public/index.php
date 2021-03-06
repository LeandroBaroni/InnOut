<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Lucas', 'email' => 'lucas@gmail.com']);
print_r($user);
echo '<br>';
echo $user->getSelect(['name' => 'Leandro', 'email' => 'leandrobaroni2103@hotmail.com'], 'name, email');