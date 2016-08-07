<?php
function calcTimeAgle($hours = 0, $mins = 0){
  if(($hours < 0 || $hours > 23) || ($mins < 0 || $mins > 59)){
    echo 'Функция должна принимать на вход два аргумента первое число - часы (0..23), второе - минуты(0..59)';
    exit(1);
  }
  if($hours >= 12) $hours = $hours - 12;
  $hourToMin = ($hours + $mins / 60) * 5;
  $resAgle = abs($hourToMin - $mins) * 360 / 60;
  return $resAgle;
}
?>
