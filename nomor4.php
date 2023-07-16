<!DOCTYPE html>
<html>
<head>
    <title>Status Gaji Karyawan</title>
</head>
<body>
    <h1>Status Gaji Karyawan</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $gajiPokok = $_POST['gaji_pokok'];
        $uangLembur = $_POST['uang_lembur'];
        $tunjangan = $_POST['tunjangan'];
        $utang = $_POST['utang'];

        // Menghitung total gaji
        $totalGaji = $gajiPokok + $uangLembur + $tunjangan - $utang;

        // Menentukan status karyawan
        if ($totalGaji >= 10000000) {
            $statusGaji = "Karyawan Tetap";
        } elseif ($totalGaji >= 5000000) {
            $statusGaji = "Karyawan Kontrak";
        } else {
            $statusGaji = "Karyawan Honor";
        }

        // Menampilkan informasi gaji
        echo "<p>Gaji Pokok: $gajiPokok</p>";
        echo "<p>Uang Lembur: $uangLembur</p>";
        echo "<p>Tunjangan: $tunjangan</p>";
        echo "<p>Utang: $utang</p>";
        echo "<p>Total Gaji: $totalGaji</p>";
        echo "<p>Status Gaji: $statusGaji</p>";
        
        // Membersihkan output setelah menampilkan hasil
        echo "<script>history.replaceState({}, '', location.href);</script>";
    }
    ?>

    <form method="post" action="">
        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="text" name="gaji_pokok" required><br>

        <label for="uang_lembur">Uang Lembur:</label>
        <input type="text" name="uang_lembur" required><br>

        <label for="tunjangan">Tunjangan:</label>
        <input type="text" name="tunjangan" required><br>

        <label for="utang">Utang:</label>
        <input type="text" name="utang" required><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>
