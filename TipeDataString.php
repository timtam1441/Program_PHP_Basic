<?php

/*  
    \n digunakan untuk fungsi ENTER
    \t digunakan untuk fungsi TAB 
*/

echo 'Nama : ';
echo 'Tama Setiawan';
echo "\n";

echo "Nama : ";
echo "Tama\t Setiawan";
echo "\n";

/*
    contoh coding menggunakan fungsi Heredoc
*/

echo <<<TAMA
Selamat belajar php dasar
ini adalah contoh coding
tipe data string.

TAMA;

/*
    contoh coding menggunakan fungsi Nowdoc
*/

echo <<<'TAMA'
Selamat belajar php dasar,
ini adalah contoh coding
tipe data string.
TAMA;