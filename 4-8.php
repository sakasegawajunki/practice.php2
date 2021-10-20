<?php

// $get_sum = function ($a, $b) {
//   return $a + $b;
// };

$get_sum = fn($a, $b) => $a + $b;


$sum = $get_sum(10,35);
echo $sum;

