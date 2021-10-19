<?php
function sum($num1, $num2) {
  $answer = $num1 + $num2;
  echo "画面に記述しました";
  return $answer;
}

$item_sum = sum(167, 269);
echo $item_sum;
