<?php
function sum(...$numbers) {
  // $answer = $num1 + $num2 + $num3;
  $answer = 0;
  foreach ($numbers as $num) {
    $answer += $num;
  }
  return $answer;
}

$item_sum = sum(10,20,30,40,50,60,70,80,90,100);
echo $item_sum;
