<?php
// Indexed Array
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

// Associative Array
$umur = [
    "Meita" => 23
];

// Multidimensional Array
$kelas = [
    ["Meita", 23, "Perempuan"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contoh Array dan Looping PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f4f7f6;
            color: #333;
        }
        h2 {
            color: #2c3e50;
        }
        table {
            border-collapse: collapse;
            margin-bottom: 30px;
            width: 50%;
        }
        table, th, td {
            border: 1px solid #7f8c8d;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.html" aria-label="Kembali ke halaman utama">← Kembali ke Index</a>
    </nav>

<h2>Indexed Array</h2>
<ul>
<?php
// Looping menggunakan for untuk Indexed Array
for ($i = 0; $i < count($buah); $i++) {
    echo "<li>$buah[$i]</li>";
}
?>
</ul>

<h2>Associative Array</h2>
<table>
    <tr>
        <th>Nama</th>
        <th>Umur</th>
    </tr>
    <?php
    // Looping menggunakan foreach untuk Associative Array
    foreach ($umur as $nama => $usia) {
        echo "<tr><td>$nama</td><td>$usia tahun</td></tr>";
    }
    ?>
</table>

<h2>Multidimensional Array</h2>
<table>
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
    </tr>
    <?php
    // Looping menggunakan foreach untuk multidimensional array
    foreach ($kelas as $murid) {
        echo "<tr>";
        echo "<td>{$murid[0]}</td>";
        echo "<td>{$murid[1]} tahun</td>";
        echo "<td>{$murid[2]}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
