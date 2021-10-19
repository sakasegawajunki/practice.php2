<?php

function make_list($list) {
  foreach ($list as $key  => $value) {
    echo "・", $key, ":", $value, "\n";
  }
}

$pref = [
  "hokkaido" => "北海道",
  "aomori" => "青森県",
  "iwate" => "岩手県"
];
make_list($pref);

// foreach ($pref as $pref_code => $pref_name) {
//   echo "・", $pref_code, ":", $pref_name, "\n";
// }

$color = [
  "red" => "赤",
  "blue" => "青",
  "black" => "黒"
];

make_list($color);
// foreach ($color as $color_code => $color_name) {
//   echo "・", $color_code, ":", $color_name, "\n";
// }
