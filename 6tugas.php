<?php

$gaji = 12000000;
$status = "tetap";
$pajak = 0;
$potonganPajak = ($pajak / 100) * $gaji;


if ($gaji >=20000000) {
    $pajak = 20;
    $potonganPajak = "";
}elseif ($gaji >=10000000 && $gaji <=19000000) {
    $pajak = 15;
    $potonganPajak = "2400000";
}elseif ($gaji >=5000000 && $gaji <=9000000) {
    $pajak = 10;
    $potonganPajak = "";
}elseif ($gaji <5000000) {
    $pajak = 5;
    $potonganPajak = "";
}else {
    $pajak = 0;
}

echo "=====Rincian Pajak=====<br>";

echo "Gaji Bulanan : " .$gaji;
echo "<br>Status Pegawai : Tetap Pajak : 20%";
echo "<br>Potongan Pajak : " .$potonganPajak;
echo "<br>Gaji Bersih : " .$gaji - $potonganPajak;

echo "<hr>";
