<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311024">
    <meta name="author" content="Richo Novian Saputra">
</head>
<body>
    
    <h1>Halaman PHP Saya</h1>

    <?php

    $namaBuah = array ("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
    echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";
    
    // Tampilkan Mangga
    echo "Saya suka " . $namaBuah[1] . "<br>";
    // Tampilkan Jeruk
    echo "Saya suka " . $namaBuah[2] . "<br>";
    // Tampilkan Apel
    echo "Saya suka " . $namaBuah[3] . "<br>";
    // Tampilkan Melon
    echo "Saya suka " . $namaBuah[4] . "<br>";

    // array dengan spesifik index
    $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"40 Tahun");
    $umur['ahmad']="50 Tahun";
    echo "Umur Andi adalah " . $umur["Andi"] . "<br>";

    // Tampilkan semua umur
    foreach ($umur as $nama => $umur) {
        echo "Umur " . $nama . " adalah " . $umur . "<br>";
    }

    ?>
    
</body>
</html>