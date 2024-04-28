<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Variable</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311024">
    <meta name="author" content="Richo Novian Saputra">
</head>
<body>
    
    <h1>Latihan Variable</h1>

    <?php
    // Mendefinisikan array nama-nama hari
    $hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

    // Menampilkan semua nama hari
    foreach ($hari as $index => $nama) {
    echo "Hari ke-" . ($index + 1) . ": " . $nama . "<br>";
    }

    ?>
    
</body>
</html>
