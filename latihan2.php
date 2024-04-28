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

    // variabel dalam php
    $txt = "Selamat Datang !";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>Isi variable txt adalah: $txt</p>";
    echo "<p>Isi variable x adalah: $x</p>";
    echo "<p>Isi variable y adalah: $y</p>";
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo $x + $y;

    // PHP Konstanta
    define("nama_konstanta", "{Richo Novian Saputra}");
    echo "<br>".nama_konstanta;

    ?>
    
</body>
</html>