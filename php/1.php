<?php
function calcProfit($sum = 0, $months = 0, $percent = 0)
{
  $profit = $sum * $months * $percent / 100;
  return $profit;
}
?>
