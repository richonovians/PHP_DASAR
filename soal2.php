<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Cerita 2</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311024">
    <meta name="author" content="Richo Novian Saputra">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .result {
            background-color: #f9f9f9;
            padding: 10px 20px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        .result p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Soal Cerita 2</h1>

        <?php
        function hitungPecahan($jumlah_uang) {
            // Array untuk menyimpan jumlah masing-masing pecahan
            $pecahan = array(
                100000 => 0,
                50000  => 0,
                20000  => 0,
                10000  => 0,
                5000   => 0,
                2000   => 0,
                500    => 0
            );

            // Daftar pecahan uang yang berlaku
            $uang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

            // Proses penghitungan
            foreach ($uang as $nilai) {
                if ($jumlah_uang >= $nilai) {
                    $pecahan[$nilai] = floor($jumlah_uang / $nilai);
                    $jumlah_uang %= $nilai;
                }
            }

            // Output hasil
            echo "<div class='result'>";
            foreach ($pecahan as $nilai => $jumlah) {
                if ($jumlah > 0) {
                    echo "<p>Pecahan Rp. " . number_format($nilai) . " = " . $jumlah . " lembar</p>";
                }
            }
            echo "</div>";
        }

        // Panggil fungsi hitungPecahan dengan jumlah uang yang dimiliki Ani
        hitungPecahan(1387500);
        ?>
    </div>
    
</body>
</html>
