<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keliling Lingkaran</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311024">
    <meta name="author" content="Richo Novian Saputra">
</head>
<body>
    
    <h1>Hitung Keliling Lingkaran</h1>

    <?php
 
    // Mendefinisikan jari-jari lingkaran dalam satuan cm
    $jari_jari = 15;

    // Menghitung keliling lingkaran
    $keliling = 2 * M_PI * $jari_jari;

    // Menampilkan hasil perhitungan
    echo "Keliling lingkaran dengan jari-jari 15 cm adalah: " . $keliling . " cm";

    ?>
    
</body>
</html>