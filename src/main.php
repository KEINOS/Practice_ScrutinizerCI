<?php
namespace KEINOS\SCRUTINIZER;

include('functions.php');

$string = getValue(1, $argv, 'n/a');

echo parrotry($string), PHP_EOL;
