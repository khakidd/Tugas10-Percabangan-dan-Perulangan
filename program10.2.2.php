<?php
$rows = 5; // Jumlah baris

// Loop untuk setiap baris
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $rows - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
