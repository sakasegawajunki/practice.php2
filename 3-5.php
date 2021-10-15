<?php
// $pref = [
//   "hokkaido" => "北海道",
//   "aomori" => "青森県",
//   "iwate" => "岩手県"
// ];

// $mypref = "aomori";

// echo $pref[$mypref];

$pref["hokkaido"] = [
  "赤平市",
  "旭川市",
  "芦別市"
];

echo $pref["hokkaido"][0];
