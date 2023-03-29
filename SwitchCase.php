<?php

/* Switch Case */

$nilai = 'E';

switch ($nilai) {
    case "A" :
        echo "Anda Lulus Dengan Sangat Baik" . PHP_EOL;
        break;
    case "B" :
        echo "Anda Lulus Dengan Baik" . PHP_EOL;
        break;
    case "C" :
        echo "Anda Lulus Dengan Cukup Baik" . PHP_EOL;
        break;
    case "D" :
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;   
    default :
        echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
}

/* Syntax Alternatif tanpa kurung kurawal */
$nilai = 'B';

switch ($nilai) :
    case "A" :
        echo "Anda Lulus Dengan Sangat Baik" . PHP_EOL;
        break;
    case "B" :
        echo "Anda Lulus Dengan Baik" . PHP_EOL;
        break;
    case "C" :
        echo "Anda Lulus Dengan Cukup Baik" . PHP_EOL;
        break;
    case "D" :
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;   
    default :
        echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
endswitch;