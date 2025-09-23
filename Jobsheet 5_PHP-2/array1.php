<!DOCTYPE html>
<html>

<head>

<body>
    <h2>Array Terindeks</h2>
    <?php
    $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha", "Rizki Aditya"];

    for($i = 0; $i < count($Listdosen); $i++) {
        echo "Dosen ke-" . ($i + 1) . " : " . $Listdosen[$i] . "<br>";
    }   
    ?>
</body>
</head>

</html>