<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311024">
    <meta name="author" content="Richo Novian Saputra">
</head>
<body>
    
    <h1>Latihan Perulangan</h1>

    <?php

    // Mendifinisikan jumlah baris
    $rows = 10;

    for ($row = 1; $row <= $rows; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo "*";
        }
        echo "<br>";
    }
    
    ?>
    
</body>
</html>