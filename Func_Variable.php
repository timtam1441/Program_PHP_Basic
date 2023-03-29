<?php

//Variable Function
function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$FunctionYangAkanDipanggil = "foo";
$FunctionYangAkanDipanggil();

$FunctionYangAkanDipanggil = "bar";
$FunctionYangAkanDipanggil();

//Penggunaan Variable Function
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Tama", "strtoupper"); //Menjadikan teks Besar Semua
sayHello("Tama", "strtolower"); //Menjadikan teks Kecil Semua