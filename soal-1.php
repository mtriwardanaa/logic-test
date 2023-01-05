<?php
error_reporting(E_ERROR | E_PARSE);

$angka = 0;
$angka_param = $_GET['angka'];
$url = $_SERVER['REQUEST_URI'];

if (isset($angka_param) && is_numeric($angka_param)) {
    $angka = $angka_param;
} else {
    echo 'Angka tidak boleh kosong dan harus integer (numeric) <br>';
    echo 'Contoh: ' . $url . '?angka=10';
    return;
}

$hasil = true;
for ($i = 2; $i < $angka; $i++) {
    if ($angka % $i == 0) {
        $hasil = false;
    }
}

echo 'Angka <b>' . $angka . '</b>';
echo $hasil ? ' adalah bilangan prima' : ' bukan bilangan prima';
