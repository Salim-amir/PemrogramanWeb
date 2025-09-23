<?php
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo "$salam, ";
    echo "Perkenalkan, nama saya $nama<br/> ";
    echo "Senang bertemu dengan anda<br/>";
}
perkenalan("Salim", "Halo");

echo "<hr/>";

$saya = "Salim";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>