<?php
// teste temporario
// $e1 = DateInterval::createFromDateString('9 hours');
// $e2 = DateInterval::createFromDateString('6 hours');
// $r1 = sumIntervals($e1, $e2);
// $r2 = subtractIntervals($e1, $e2);
// print_r($r1);
// echo '<hr>';
// print_r($r2);
// echo '<hr>';
// print_r(getDateFromInterval($r2));
// echo '<hr>';
// print_r(getDateFromInterval($r2));

loadModel('WorkingHours');
$wh = WorkingHours::loadFromUserAndDate(6, date('Y-m-d'));
print_r($wh);
echo '<hr>';
$workedInterval = $wh->getWorkedInterval()->format('%H:%I:%S');
echo 'sad<br>';
print_r($workedInterval);
echo '<br>sad<br>';