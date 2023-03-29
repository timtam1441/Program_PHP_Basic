<?php

$nilai = 70;
$absen = 90;

/* If-Else Statment */

if ($nilai >= 75 && $absen >= 75) :
    echo "Selamat Anda Lulus" . PHP_EOL;
else :
    echo "Maaf, Anda Tidak Lulus" . PHP_EOL;
endif;

/* If-Else If Statement */

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}