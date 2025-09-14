<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: $a + $b = $hasilTambah <br>";
echo "Hasil Pengurangan: $a - $b = $hasilKurang <br>";
echo "Hasil Perkalian: $a * $b = $hasilKali <br>";
echo "Hasil Pembagian: $a / $b = $hasilBagi <br>";
echo "Sisa Hasil Bagi: $a % $b = $sisaBagi <br>";
echo "Hasil Pangkat: $a ** $b = $pangkat <br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: $hasilSama <br>";
echo "Hasil Tidak Sama: $hasilTidakSama <br>";
echo "Hasil Lebih Kecil: $hasilLebihKecil <br>";
echo "Hasil Lebih Besar: $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama: $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama: $hasilLebihBesarSama <br>";
echo "<br>";


$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "Hasil AND: $hasilAnd <br>";
echo "Hasil OR: $hasilOr <br>";
echo "Hasil NOT A: $hasilNotA <br>";
echo "Hasil NOT B: $hasilNotB <br>";
echo "<br>";

$a += $b;
echo "Hasil a += b: $a <br>";
$a -= $b;
echo "Hasil a -= b: $a <br>";
$a *= $b;
echo "Hasil a *= b: $a <br>";
$a /= $b;
echo "Hasil a /= b: $a <br>";
$a %= $b;
echo "Hasil a %= b: $a <br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Hasil Identik: $hasilIdentik <br>";
echo "Hasil Tidak Identik: $hasilTidakIdentik <br>";
echo "<br>";

$kursiAwal = 45;
$kursiDitempati = 28;

$sisaKursiPersen = ($kursiAwal - $kursiDitempati) / $kursiAwal * 100;
echo "Sisa kursi dalam persen: $sisaKursiPersen% <br>";