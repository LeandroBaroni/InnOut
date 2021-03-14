<?php
session_start();
requireValidSession();

loadModel('WorkingHours');

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));
try{
    $currentTime = strftime('%H:%M:%S', time());
    if($_POST['forcedTime']) {
        $currentTime = $_POST['forcedTime'];
    }
    echo $currentTime . '<br>';
    echo '5<br>';
    $records->innout($currentTime);
    echo '6<br>';
    addSuccessMsg('Ponto inserido com sucesso!');
}catch(AppException $e){
    addSuccessMsg($e->getMessage());
}

header('Location: day_records.php');