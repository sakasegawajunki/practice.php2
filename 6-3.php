<?php
$file = new SplFileObject("data/items.csv");

while (!$file->eof()) {
  $item = $file->fgetcsv();
  echo $item[0], "\n";

// $file->setFlags(SplFileObject::READ_CSV);
// foreach ($file as $item) {
//   echo $item[1], "\n";
}

