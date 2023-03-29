<?php

// Tanpa null coalesing operator

$data = [];

if (isset($data['action'])) {
    $action = $data['action'];
} else{
    $action = 'Nothing';
}

echo $action . PHP_EOL; 

// null coalesing operator

$data = [
    "action" => "Create"
];
$action = $data['action'] ?? 'Nothing';

echo $action . PHP_EOL;