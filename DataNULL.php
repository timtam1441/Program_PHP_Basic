<?php

$name = "Tama";
$name = null; 

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name NUll? : ";
var_dump(is_null($name));
echo "\n";

/*
    menghapus variable dengan unset($variable)
*/

$name = "Tama";
unset($name);

$name = "Setiawan";

/*
    jika dihapus maka data boolean(true), 
    dan jika ditambahkan dengan variable null maka data boolean|(false)
 */
$name = null;

/*
    mengecek apakah variable ada dan nilainya null
*/

var_dump(isset($name));