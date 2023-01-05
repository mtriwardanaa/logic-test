<?php
error_reporting(E_ERROR | E_PARSE);

$bilangan = array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);
$terbesar = 0;

for ($i = 0; $i < count($bilangan); $i++) {
    if ($bilangan[$i] > $terbesar) {
        $terbesar = $bilangan[$i];
    }
}

echo $terbesar . ' adalah yang terbesar';
