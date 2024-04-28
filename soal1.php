<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Cerita 1</title>
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
            padding: 20px;
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
        <h1>Hitung Gaji Bersih</h1>

        <?php

        // Gaji pokok dan tunjangan
        $gaji_pokok = 3250000;
        $tunjangan = 1200000;

        // Menghitung gaji kotor
        $gaji_kotor = $gaji_pokok + $tunjangan;

        // Menghitung pajak penghasilan (10% dari gaji kotor)
        $pajak = 0.1 * $gaji_kotor;

        // Menghitung gaji bersih (gaji kotor dikurangi pajak)
        $gaji_bersih = $gaji_kotor - $pajak;

        // Menampilkan hasil
        echo "<div class='result'>";
        echo "<p>Gaji Pokok: Rp. " . number_format($gaji_pokok, 0, ',', '.') . "</p>";
        echo "<p>Tunjangan Jabatan: Rp. " . number_format($tunjangan, 0, ',', '.') . "</p>";
        echo "<p>Gaji Kotor: Rp. " . number_format($gaji_kotor, 0, ',', '.') . "</p>";
        echo "<p>Pajak Penghasilan: Rp. " . number_format($pajak, 0, ',', '.') . "</p>";
        echo "<h4>Gaji bersih yang diterima Obi setiap bulannya adalah Rp. " . number_format($gaji_bersih, 0, ',', '.') . ",-</h4>";
        echo "</div>";

        ?>
    </div>
    
</body>
</html>
