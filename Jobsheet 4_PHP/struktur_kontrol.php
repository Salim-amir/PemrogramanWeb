<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br>";
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan waktu $hari hari untuk mencapai target jarak 500 kilometer.";
echo "<br>";
echo "<br>";


$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah $jumlahBuah";
echo "<br>";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br>";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai $nilai: Lulus<br>";
    } else {
        echo "Nilai $nilai: Tidak Lulus<br>";
    }
}
echo "<br>";
echo "<br>";

$nilaiUjian = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$total = 0;
$jumlah = 0;

foreach ($nilaiUjian as $nilai) {
    if ($nilai > 90) {
        continue;
    } elseif ($nilai <= 70) {
        continue;
    } else {
        $total += $nilai;
        $jumlah++;
    }
}

$rataRata = $total / $jumlah;

echo "Total nilai setelah mengabaikan 2 tertinggi dan 2 terendah: $total <br>";
echo "Rata-rata nilai: $rataRata";
echo "<br>";
echo "<br>";


$hargaProduk = 120000;
if($hargaProduk > 100000) {
    $discount = 0.2 * $hargaProduk;
}
echo "Harga produk setelah diskon: " . ($hargaProduk - $discount);
echo "<br>";
echo "<br>";

$skor = 600;
$cekHadiah = $skor > 500 ? "Ya" : "Tidak";
echo " Total skor pemain adalah: $skor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $cekHadiah. ";
