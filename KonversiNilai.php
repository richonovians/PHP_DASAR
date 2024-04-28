<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311024">
    <meta name="author" content="Richo Novian Saputra">
</head>
<body>
    
    <h1>Konversi Nilai</h1>

    <form method="post">
        <label for="nilai">Masukkan Nilai Angka:</label>
        <input type="number" id="nilai" name="nilai" required>
        <button type="submit">Konversi</button>
    </form>

    <?php

    function konversiNilai($nilai) {
        if ($nilai >= 90 && $nilai <= 100) {
            return 'A';
        } elseif ($nilai >= 80 && $nilai <= 89) {
            return 'AB';
        } elseif ($nilai >= 70 && $nilai <= 79) {
            return 'B';
        } elseif ($nilai >= 60 && $nilai <= 69) {
            return 'BC';
        } elseif ($nilai >= 0 && $nilai <= 59) {
            return 'C';
        } else {
            return 'Nilai tidak valid';
        }
    }

    // Memeriksa apakah nilai sudah di-submit melalui form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari input
        $nilai_mahasiswa = $_POST["nilai"];
        // Menampilkan hasil konversi jika nilai valid
        if ($nilai_mahasiswa >= 0 && $nilai_mahasiswa <= 100) {
            echo "<p>Nilai angka : " . $nilai_mahasiswa . "</p>";
            echo "<p>Konversi menjadi huruf : " . konversiNilai($nilai_mahasiswa) . "</p>";
        } else {
            echo "<p>Nilai yang Anda masukkan tidak valid.</p>";
        }
    }

    ?>
    
</body>
</html>