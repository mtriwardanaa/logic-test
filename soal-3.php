<?php
error_reporting(E_ERROR | E_PARSE);

$angka = 8;
for ($i = $angka; $i >= 1; $i--) {
    for ($j = 1; $j <= ($angka + 1) - $i; $j++) {

        echo $j;
    }

    echo "<br>";
}
