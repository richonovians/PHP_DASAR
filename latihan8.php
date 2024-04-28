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

    // data kelas dengan array 2 dimensi
    $array = array(
        "1C" =>array("Udin, Ismail, Adi"),
        "1D" =>array("Lukman", "Fajri", "Mahmud")
    );
    // menampilkan data array
    print_r($array);
    // menampilkan kelas 1C
    print_r($array['1C']);
    // menampilkan kelas 1D dengan index 0
    echo $array['1D'][0];
    // tampilkan Fajri
    echo $array['1D'][1];
    // tampilkan Andi
    echo "<br>Nama Andi tidak ada dalam kelas 1C dan 1D<br>";

    // data kelas bisa ditulis juga dengan
    $array_simple = [
        "1C" =>["Udin, Ismail, Adi"],
        "1D" =>["Lukman", "Fajri", "Mahmud"]
    ];

    ?>
    
</body>
</html>