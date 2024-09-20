<?php
$hargaProduk = 120000;

$diskonPersen = 20;

$hargaSetelahDiskon = $hargaProduk - ($hargaProduk * ($diskonPersen / 100));

echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
?>
