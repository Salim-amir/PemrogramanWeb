<?php

$nama = @$_GET['nama']; //tanda @ agar tidak peringatan eror ketike key-nya kosong
$usia = @$_GET['usia']; //tanda @ agar tidak peringatan eror ketike key-nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>