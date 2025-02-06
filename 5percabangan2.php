<?php

$uts = 75;
$uas = 85;
$tugas = 70;

$status = "";
$grade = "";

$rata = ($uts + $uas + $tugas) / 3;

if ($rata >= 70 && $rata <= 79) {
    $status = "Perbaikan";
    $grade = "C";
}elseif ($rata >=80 && $rata <=89) {
    $status = "Lulus";
    $grade = "B";
}elseif ($rata >=90 && $rata <=100) {
    $status = "Lulus";
    $grade = "A";
}

echo "Hasil : " .$rata. "<br> Status : " .$status. "<br> Grade : " .$grade. "<br> <br>";

