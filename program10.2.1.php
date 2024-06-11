<?php
$nilai = 78;
if ($nilai >= 80 && $nilai <= 100) {
    echo "$nilai mendapatkan nilai angka A";
} else if ($nilai >= 76.25 && $nilai <= 79.99) {
    echo "$nilai mendapatkan nilai angka A-";
} else if ($nilai >= 68.75 && $nilai <= 76.24) {
    echo "$nilai mendapatkan nilai angka B+";
} else if ($nilai >= 65 && $nilai <= 68.74) {
    echo "$nilai mendapatkan nilai angka B";
} else if ($nilai >= 62.50 && $nilai <= 64.99) {
    echo "$nilai mendapatkan nilai angka B-";
} else if ($nilai >= 57.50 && $nilai <= 62.49) {
    echo "$nilai mendapatkan nilai angka C+";
} else if ($nilai >= 55 && $nilai <= 57.99) {
    echo "$nilai mendapatkan nilai angka C";
} else if ($nilai >= 51.25 && $nilai <= 54.49) {
    echo "$nilai mendapatkan nilai angka C-";
} else if ($nilai >= 43.75 && $nilai <= 51.24) {
    echo "$nilai mendapatkan nilai angka D+";
} else if ($nilai >= 40 && $nilai <= 43.74) {
    echo "$nilai mendapatkan nilai angka D";
} else if ($nilai >= 0 && $nilai <= 39.99) {
    echo "$nilai mendapatkan nilai angka E";
}
