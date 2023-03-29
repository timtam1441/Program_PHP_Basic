<?php

//Perulangan Tanpa Henti
for (; ;){
    echo "Hello For Loop" . PHP_EOL;
}

$counter = 1;

//Perulangan Dengan Kondisi
for (; $counter <= 10 ;){
    echo "Hello For Loop ke-$counter" . PHP_EOL;
    $counter++;
}

//Perulangan Dengan Init Statement
for($counter = 1; $counter <= 10;){
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
}

//Perulangan Dengan Post Statement
for($counter = 1; $counter <= 10; $counter++){
    echo "Hello For Loop ke-$counter" . PHP_EOL;
}

//Syntax Alternatif For Loop
for($counter = 1; $counter >= 1; $counter--):
    echo "Hello For Loop ke-$counter" . PHP_EOL;
endfor;