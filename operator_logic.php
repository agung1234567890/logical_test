<?php
$a = 7;
$b = 2;

$cek = $a;
$hasil = 0;
while ($cek > 0) {
    if ($cek < $b) {
        break;
    }
    $cek = $cek - $b;
    $hasil++;
}

echo "$a : $b = $hasil";
