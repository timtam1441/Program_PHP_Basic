<?php

//Penggunaan fungsi Break 
$counter = 1;

while(true){
    echo "Ini adalah For While ke-$counter" . PHP_EOL;
    $counter++;

    if($counter > 10){
        break;
    }
}

//Penggunaan fungsi Continue
for($counter = 1; $counter <= 100; $counter++){
    if($counter % 2 == 1){ //nilai 0 (tampil bilangan ganjil) dan nilai 1 (tampil bilangan genap)
        continue;
    }
    echo "Counter : $counter" . PHP_EOL;
}