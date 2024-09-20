<?php
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
}
$rataRataKelas = $totalNilai / count($daftarNilai);

echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas: <br>";
foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rataRataKelas) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
?>