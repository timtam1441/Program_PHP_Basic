<?php

$first = [
    "First_name" => "Tama"
];

$last = [
    "Last_name" => "Setiawan"
];

$fullname = $first + $last;

var_dump($fullname);

$a = [
    "First_name" => "Tama",
    "Last_name" => "Setiawan"
];

$b = [
    "Last_name" => "Setiawan",
    "First_name" => "Tama"
];

var_dump($a == $b);
var_dump($a === $b);