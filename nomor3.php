<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>
    <h1>Konversi Suhu</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $celsius = $_POST['celsius'];

        // Rumus Konversi suhu ke Fahrenheit
        $fahrenheit = $celsius * 9 / 5 + 32;

        // Rumus Konversi suhu ke Reamur
        $reamur = $celsius * 4 / 5;

        // Menentukan keterangan udara
        if ($celsius > 35) {
            $keterangan = "Udara sangat panas";
        } elseif ($celsius > 20) {
            $keterangan = "Udara sedang";
        } else {
            $keterangan = "Udara dingin";
        }

        // Menampilkan hasil
        echo "<p>Celsius: $celsius &deg;C</p>";
        echo "<p>Fahrenheit: $fahrenheit &deg;F</p>";
        echo "<p>Reamur: $reamur &deg;R</p>";
        echo "<p>Keterangan: $keterangan</p>";

        // Membersihkan output setelah menampilkan hasil
        echo "<script>history.replaceState({}, '', location.href);</script>";
    }
    ?>

    <form method="post" action="">
        <label for="celsius">Suhu Celsius:</label>
        <input type="text" name="celsius" required><br>

        <input type="submit" value="Konversi">
    </form>
</body>
</html>
