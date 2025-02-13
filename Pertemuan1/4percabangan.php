<?php

$total_belanja = 1000;

echo "Total belanja anda $total_belanja <br>";

if($total_belanja >= 1000){
    echo "Selamat anda mendapat diskon Rp.500";
}else {
    echo "Maaf anda tidak mandapatkan diskon";
}

// ====================================================================

echo "<hr>";

$hari = "sabtu";
// $hari = "selasa";
// $hari = "rabu";
// $hari = "kamis";
// $hari = "jumat";

if ($hari == "senin") {
    echo "<br> Mengenakan seragam putih abu";
}elseif ($hari == "selasa") {
    echo "<br> Mengenakan seragam pramuka";
}elseif ($hari == "rabu") {
    echo "<br> Mengenakan seragam prduktif";
}elseif ($hari == "kamis") {
    echo "<br> Mengenakan baju batik";
}elseif ($hari == "jumat") {
    echo "<br> Mengenakan baju gamis";
}else {
    echo "<br> Libur";
}
