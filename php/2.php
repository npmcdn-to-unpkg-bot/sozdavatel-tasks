<?php
function formRussianDate($day, $month){
  if(($day < 1 || $day > 31) || ($month < 1 || $month > 12)){
    echo 'Функция должна принимать на вход два аргумента – число (1..31) и номер месяца (1..12)';
    exit(1);
  }
  $month--;
  $months = [
    'января',
    'февраля',
    'марта',
    'апреля',
    'мая',
    'июня',
    'июля',
    'августа',
    'сентября',
    'октября',
    'ноября',
    'декабря'
  ];
  return "$day $months[$month]";
}
?>
