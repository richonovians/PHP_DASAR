<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Cerita 3</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="234311024">
    <meta name="author" content="Richo Novian Saputra">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .student-info {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Soal Cerita 3</h1>

        <?php

        $data = [
            ['No Urut' => 1, 'Poin' => 75, 'Siswa' => 'Adi', 'NIS' => '2345'],
            ['No Urut' => 2, 'Poin' => 80, 'Siswa' => 'Joni', 'NIS' => '65'],
            ['No Urut' => 3, 'Poin' => 70, 'Siswa' => 'Jihan', 'NIS' => ''],
            ['No Urut' => 4, 'Poin' => 85, 'Siswa' => 'Aya', 'NIS' => ''],
            ['No Urut' => 5, 'Poin' => 90, 'Siswa' => 'Ita', 'NIS' => '6'],
            ['No Urut' => 6, 'Poin' => 95, 'Siswa' => 'Budi', 'NIS' => '7'],
            ['No Urut' => 7, 'Poin' => 65, 'Siswa' => 'Tini', 'NIS' => '8'],
            ['No Urut' => 8, 'Poin' => 65, 'Siswa' => 'Sari', 'NIS' => ''],
        ];

        function displayStudentByNumber($number, $data) {
            foreach ($data as $student) {
                if ($student['No Urut'] == $number) {
                    echo "<div class='student-info'>Nama siswa dengan nomor urut $number adalah " . $student['Siswa'] . " dengan poin " . $student['Poin'] . "</div>";
                    break;
                }
            }
        }

        function displayStudentsByScore($score, $data) {
            $students = [];
            foreach ($data as $student) {
                if ($student['Poin'] == $score) {
                    $students[] = $student['Siswa'];
                }
            }
            if (count($students) > 0) {
                echo "<div class='student-info'>Nama siswa yang memiliki poin $score adalah " . implode(', ', $students) . "</div>";
            } else {
                echo "<div class='student-info'>Tidak ada siswa yang memiliki poin $score</div>";
            }
        }

        displayStudentByNumber(5, $data);
        displayStudentsByScore(90, $data);
        displayStudentsByScore(100, $data);

        ?>
    </div>
</body>
</html>
