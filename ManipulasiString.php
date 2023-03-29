<?php

$name = "Tama Setiawan";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

$valueString = (string)100; //mengkonversi nilai integer ke string
var_dump($valueString);

$valueInt = (int)"100"; //mengkonversi nilai string ke integer
var_dump($valueInt);

$valueFloat = (float)"100.1"; //mengkonversi nilai string ke float
var_dump($valueFloat);

/* contoh menampilkan array dengan index tertentu*/
$name = "Tama";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

/* contoh variable parsing */
$name = "Tama";
echo "Hallo " . $name . " Setiawan. Selamat Belajar PHP" . PHP_EOL;
echo "Hallo $name Setiawan. Selamat Belajar PHP" . PHP_EOL;

$var = "Tama ";
echo "Saya adalah {$var}Setiawan" . PHP_EOL;