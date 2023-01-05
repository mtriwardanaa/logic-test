<?php
error_reporting(E_ERROR | E_PARSE);

function bubbleSort($arr)
{
    $size = count($arr) - 1;
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size - $i; $j++) {
            $k = $j + 1;
            if ($arr[$k] < $arr[$j]) {
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}

$bilangan = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);

echo 'Before';
echo '<br>';
print_r($bilangan);
echo '<br>';
echo '<br>';

$bilangan = bubbleSort($bilangan);
echo 'After';
echo '<br>';
print_r($bilangan);
