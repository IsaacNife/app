<?php

$myArray = [1, 2, 3, 4, 5];
$myAssoc = [
    "one" => "here",
    "two" => null,
];
$inArray = in_array("here", $myAssoc);
$keyExists = array_key_exists("two", $myAssoc);
// echo $keyExists;

$sliced = array_slice($myArray, 1, 3);
$myArray[1] = 15;
// print_r($sliced);

$empty = empty($myAssoc["two"]);
$isset = isset($myAssoc["two"]);
var_dump($empty, $isset);
