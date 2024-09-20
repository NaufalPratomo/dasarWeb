<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
echo "Hasil Perkalian: " . $hasilKali . "<br>";
echo "Hasil Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Bagi: " . $sisaBagi . "<br>";
echo "Hasil Pangkat: " . $pangkat . "<br>";
echo "Apakah $a sama dengan $b? " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a tidak sama dengan $b? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih kecil dari $b? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih besar dari $b? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih kecil dari atau sama dengan $b? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih besar dari atau sama dengan $b? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br>";
?>