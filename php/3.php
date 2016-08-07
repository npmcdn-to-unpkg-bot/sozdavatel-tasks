Результат:
<?php
$firstNum = (int)$_POST['firstNum'];
$secondNum = (int)$_POST['secondNum'];
switch (htmlspecialchars($_POST['expression'])) {
  case 'add':
    $res = $firstNum + $secondNum;
    break;
  case 'sub':
    $res = $firstNum - $secondNum;
    break;
  case 'div':
    $res = $firstNum / $secondNum;
    break;
  case 'mul':
    $res = $firstNum * $secondNum;
    break;
  default:
    $res = 'Ошибка!';
    break;
}
echo $res;
?>
