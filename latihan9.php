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

    // contoh fungsi
    function writeMsg($nama) {
        echo "Selamat datang ". $nama." <br>";
    }
    writeMsg("Ahmad"); // pemanggilan fungsi

    // fungsi dengan mengirimkan nilai balik
    function tambah(int $angka1, int $angka2) {
        $a= $angka1+$angka2;
        return $a; // mengirim nilai $a ke pemanggil
    }
    $hasil=tambah(5, 5);
    echo ($hasil);

    ?>
    
</body>
</html>