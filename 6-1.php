<?php
$file = new SplFileObject("log.txt", "a");
$today = new DateTime();
$file->fwrite($today->format("Y-m--d H:i:s") . "\n");
