<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px 12px;
        }
        th {
            background: #ddd;
        }
    </style>
</head>
<body>
<?php
$Dosen = [
    'Nama' => 'Elok Nur Hamdana',
    'Domisili' => 'Malang',
    'Jenis Kelamin' => 'Perempuan'
];

echo "<table>";
echo "<tr><th>Data</th><th>Isi</th></tr>";
foreach ($Dosen as $key => $value) {
    echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
}
echo "</table>";
?>
</body>
</html>
