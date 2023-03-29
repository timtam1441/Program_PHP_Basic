<?php

//Tanpa For Each
$name = ["Tama", "Setiawan"];

for($i = 0; $i < count($name); $i++){
    echo "Data ke $i : $name[$i]" . PHP_EOL;
}

//Menggunakan For Each
foreach ($name as $i => $name) {
    echo "Data ke $i : $name" . PHP_EOL;
}

//For Each dengan Key
$person = [
    "firts_name" => "Tama",
    "last_name" => "Setiawan"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}