<?php
error_reporting(E_ERROR | E_PARSE);

$row = 4;
$col = 3;

for ($xRow = 1; $xRow <= $row; $xRow++) {
    for ($xColumn = 1; $xColumn <= $col; $xColumn++) {
        $number = $xRow + $row * ($xColumn - 1);
        echo $number . " ";
    }
    echo "<br>";
}
