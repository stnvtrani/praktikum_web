<?php
$r = 5;
$s= 21;
$phi =M_PI;

//rumus kerucut Luas Alas
$luasAlas = $phi * pow($r, 2);

//rumus kerucut luas permukaan 
$luasPermukaan = ($phi * pow($r, 2)) + ($phi * $r * $s);

echo "-----------Perhitungan------------------" . "<br>";
echo "Jari-jari (r) : $r". "<br>";
echo "Sisi (s) : $s". "<br>";
echo "~~~~~~~~~~~~Hasil~~~~~~~~~~~" . "<br>";
echo "Luas Alas     : ". number_format($luasAlas, 2, ',', '.'). "<br>";
echo "Luas Pemukaan : ". number_format($luasPermukaan, 2, ',', '.'). "<br>";



