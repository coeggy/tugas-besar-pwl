<!DOCTYPE html>
<html>
<head>
    <title>Undian Hadiah Swalayan</title>
</head>
<body>
    <h1>Undian Hadiah Swalayan</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sampoQty = $_POST['sampo_qty'];
        $sabunQty = $_POST['sabun_qty'];
        $bedakQty = $_POST['bedak_qty'];

        // Harga per barang
        $sampoPrice = 65000;
        $sabunPrice = 22000;
        $bedakPrice = 10000;

        // Menghitung total harga
        $totalHarga = $sampoQty * $sampoPrice + $sabunQty * $sabunPrice + $bedakQty * $bedakPrice;

        // Menentukan hadiah
        if ($totalHarga >= 1000000) {
            $hadiah = "Selamat, anda mendapatkan undian Handphone";
        } elseif ($totalHarga >= 500000) {
            $hadiah = "Selamat, anda mendapatkan undian Dompet";
        } elseif ($totalHarga >= 100000) {
            $hadiah = "Selamat, anda mendapatkan undian Payung";
        } else {
            $hadiah = "Maaf, Tidak mendapatkan undian";
        }

        // Menampilkan hasil
        echo "<p>Harga Sampo: Rp $sampoPrice</p>";
        echo "<p>Harga Sabun: Rp $sabunPrice</p>";
        echo "<p>Harga Bedak: Rp $bedakPrice</p>";
        echo "<p>Total Harga: Rp $totalHarga</p>";
        echo "<p>$hadiah</p>";
        
        // Membersihkan output setelah menampilkan hasil
        echo "<script>history.replaceState({}, '', location.href);</script>";
    }
    ?>

    <form method="post" action="">
        <label for="sampo_qty">Jumlah Sampo:</label>
        <input type="text" name="sampo_qty" required><br>

        <label for="sabun_qty">Jumlah Sabun:</label>
        <input type="text" name="sabun_qty" required><br>

        <label for="bedak_qty">Jumlah Bedak:</label>
        <input type="text" name="bedak_qty" required><br>

        <input type="submit" value="Cek Hadiah">
    </form>
</body>
</html>
