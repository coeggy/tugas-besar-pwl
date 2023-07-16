<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Nilai KHS</title>
</head>
<body>
    <h1>Kalkulator Nilai KHS</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        // Menghitung nilai KHS
        $khs = $tugas * 0.2 + $uts * 0.3 + $uas * 0.5;

        // Menentukan nilai huruf
        if ($khs >= 90) {
            $nilaiHuruf = 'A';
        } elseif ($khs >= 80) {
            $nilaiHuruf = 'B';
        } elseif ($khs >= 60) {
            $nilaiHuruf = 'C';
        } else {
            $nilaiHuruf = 'D';
        }

        // Menampilkan hasil
        echo "<p>Nilai KHS: $khs</p>";
        echo "<p>Nilai Huruf: $nilaiHuruf</p>";
        
        // Membersihkan output setelah menampilkan hasil
        echo "<script>history.replaceState({}, '', location.href);</script>";
    }
    ?>

    <form method="post" action="">
        <label for="tugas">Nilai Tugas:</label>
        <input type="text" name="tugas" required><br>

        <label for="uts">Nilai UTS:</label>
        <input type="text" name="uts" required><br>

        <label for="uas">Nilai UAS:</label>
        <input type="text" name="uas" required><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>
