<?php

function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Tama");
sayHello("Setiawan");

//Default Argument Value
function sayHi($name = "Anonymous")
{
    echo "Hello $name" . PHP_EOL;
}

sayHi(); //Mencetak output default karna tidak mengirim value
sayHi("Tama");
sayHi("Setiawan");

//Penggunaan 2 parameter
function sayHe($firtsname, $lastname = "")
{
    echo "Hello $firtsname $lastname" . PHP_EOL;
}

sayHe("Tama");
sayHe("Setiawan");
sayHe("Tama", "Setiawan");

//Type Declaration
function sum(int $firts, int $last)
{
    $total = $firts + $last;
    echo "Total $firts + $last = $total" . PHP_EOL;
}

sum("100", "100"); //type String akan di konversi ke Integer
sum(100, 100); //type Integer tidak perlu di konversi lagi
sum(true, false); //type boolean akan di konversi ke Integer

//Variable-length Argument List
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40);
sumAll(...[10, 20, 30, 40]);

//Function Return Value(1)
function sumAja(int $firts, int $second)
{
    return $firts + $second;
}

$total = sumAja(10, 10);
var_dump($total);

$total = sumAja(20, 20);
var_dump($total);

//Function Return Value(2)
function getFinalValue(int $value)
{
    if($value >= 80) {
        return "A";
    } else if($value >= 70) {
        return "B";
    } else if($value >= 60) {
        return "C";
    } else if($value >= 50) {
        return "D";
    } else{
        return;
    }
    echo "Ups" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);
$score = getFinalValue(55);
var_dump($score);