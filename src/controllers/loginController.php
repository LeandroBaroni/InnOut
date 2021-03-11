<?php

loadModel('Login');
$exception = null;
if(count($_POST) > 0){
    $login = new Login($_POST);

    try{
        $user = $login->checkLogin();
        echo 'entrou<br>';
        header("Location: day_records.php");
        echo 'passou<br>';
    }catch(AppException $e){
        $exception = $e;
    }
}

loadView('login', $_POST + ['exception' => $exception]);