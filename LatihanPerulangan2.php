<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan 2</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311024">
    <meta name="author" content="Richo Novian Saputra">
</head>
<body>
    
    <h1>Latihan Perulangan 2</h1>

    <?php

     $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

        for ($i = 0; $i < count($angka); $i++) {
            $currentNumber = $angka[$i];

            if ($currentNumber % 2 == 0) {
                echo "$currentNumber : Genap <br>";
            } else {
                echo "$currentNumber : Ganjil <br>";
            }
        }
    
    ?>
    
</body>
</html>