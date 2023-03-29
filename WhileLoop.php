<?php

//Perulangan While Loop
$counter = 1;

while($counter <= 10){
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
}

//Syntax Alternatif While Loop

$counter = 1;

while($counter <= 10):
    echo " Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;