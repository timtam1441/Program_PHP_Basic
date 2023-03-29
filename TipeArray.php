<?php

$values = array(1, 2, 3, 4);
var_dump($values);

$name = ["Dimas", "Diman", "Diki"];
var_dump($name);

/*
    menampilkan salah satu data dengan indeks
*/
var_dump($name[0]); 

/*
    merubah data pada indeks[0]
*/
$name[0] = "Dikta";
var_dump($name);

/*
    menghapus data pada indeks[1]
*/
unset($name[1]);
var_dump($name);

/*
    menambahkan data dengan indeks baru
*/
$name[] = "Darman";
var_dump($name);

/*
    menghitung total array
*/
var_dump(count($name));

/*
    contoh membuat Array sebagai Map
*/
$tama = array(
    "id" => "tama",
    "name" => "Tama Setiawan",
    "age" => 21,
    "address" => array(
        "city" => "Tangerang",
        "country" => "Indonesia"
    )
);
var_dump($tama);
var_dump($tama["name"]);
var_dump($tama["address"]["country"]);

$tama = [
    "id" => "tama",
    "name" => "Tama Setiawan",
    "age" => 22,
    
    // menambahkan data array di dalam array
    "address" => [
        "city" => "Tangerang",
        "country" => "Indonesia"
    ]
];
var_dump($tama);