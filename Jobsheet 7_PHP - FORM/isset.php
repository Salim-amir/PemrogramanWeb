<?php
$umur;
if(isset($umur) && $umur >=18){
    echo "Anda sudah dewasa";
} else {
    echo "Anda belum dewasa dan variabel 'umur' belum di tentukan";
}
echo "<br>";

$data = array("nama" => "Jane", "umur" => 25);
if(isset($data["nama"])) {
    echo "Nama: ". $data["nama"];
} else {
    echo "Variabel 'nama' tidak ada dalam array";
}

$myArray = array(); // Array kosong
if(empty($myArray)) {
    echo "Array tidak terdefinisi atau  kosong";
} else {
    echo "Array terdefinisi atau tidak kosong";
}
