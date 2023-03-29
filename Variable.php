<?php

/*
    Contoh coding tipe variable    
*/

$namedp = "Tama";
$namebk = "Setiawan";
$age = 21;

echo "Name : ";
echo $namedp;
echo " ";
echo $namebk;
echo "\n";
echo "Age : ";
echo $age;
echo "\n";

/*
    Contoh coding tipe variable variables dengan menggunakan fungsi $$
*/

$name = "Tama";
$$name = "Setiawan";

echo "Name = ";
echo $name;
echo "\n";

echo "Tama = ";
echo $Tama;
echo "\n";