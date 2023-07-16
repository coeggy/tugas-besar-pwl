<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Determinan</title>
</head>
<body>
    <h1>Kalkulator Determinan</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Menghitung determinan
        $determinan = $b * $b - 4 * $a * $c;

        // Menentukan keterangan
        if ($determinan > 0) {
            $keterangan = "Kurva di Atas Garis";
        } elseif ($determinan == 0) {
            $keterangan = "Berada di Garis Kurva";
        } else {
            $keterangan = "Dibawah Garis Kurva";
        }

        // Menampilkan hasil
        echo "<p>Determinan: $determinan</p>";
        echo "<p>Keterangan: $keterangan</p>";

        // Membersihkan output setelah menampilkan hasil
        echo "<script>history.replaceState({}, '', location.href);</script>";
    }
    ?>

    <form method="post" action="">
        <label for="a">Nilai a:</label>
        <input type="text" name="a" required><br>

        <label for="b">Nilai b:</label>
        <input type="text" name="b" required><br>

        <label for="c">Nilai c:</label>
        <input type="text" name="c" required><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>
