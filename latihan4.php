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

    /* Operator logika yang bisa digunakan
    * == Sama Dengan            $x == $y
    * === Identical             $x === $y
    * != Tidak Sama Dengan      $x != $y
    * <> Tidak Sama Dengan      $x <> $y
    * !== Not identical         $x !== $y
    * > Lebih besar dari        $x > $y
    * < Kurang dari             $x < $y
    * >= Lebih besar atau Sama dengan       $x >= $y
    * <= Kurang dari atau Sama dengan       $x <= $y
    * <==> Spaceship    $x <==> $y
    */

    $t = date(format:"H"); // mendapatkan jam dengan format 1-24
    echo "If";
    if ($t < 16) {
        echo "Selamat Siang!";
    } 

    $t = date(format:"H"); // mendapatkan jam dengan format 1-24
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }

    echo "<br> Nested If <br>";
    if ($t < 16) {
        echo "Selamat pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat malam!";
    }

    ?>
    
</body>
</html>