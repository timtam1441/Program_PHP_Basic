<?php

$total = 0;

$fruit = 10000;
$chicken = 25000;
$orangeJuice = 15000;

// menjumlahkan dengan biasa
$total = $total + $fruit;
$total = $total + $chicken;
$total = $total + $orangeJuice;

var_dump($total);

$total = 0;

$fruit = 10000;
$chicken = 25000;
$orangeJuice = 15000;

// menjumlahkan dengan cara singkat
$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);