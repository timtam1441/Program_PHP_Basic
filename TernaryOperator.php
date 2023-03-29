<?php

// Bukan Ternary Operator (sourcecode cukup banyak)
$gender = "PRIA";
$hi = null;

if ($gender == "PRIA"){
    $hi = "Hi bro!";
} else{
    $hi = "Hi nona!";
}

echo $hi . PHP_EOL;

// Ternary Operator (sourcecode lebih simple dan pendek)
$gender = "PRIA";
$hi = $gender == "WANITA" ? "Hi bro!" : "Hi nona!";

echo $hi . PHP_EOL;