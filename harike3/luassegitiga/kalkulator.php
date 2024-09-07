<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $alas = isset($_POST['alas']) ? floatval($_POST['alas']) : 0;
    $tinggi = isset($_POST['tinggi']) ? floatval($_POST['tinggi']) : 0;

    // Validasi input
    if ($alas <= 0 || $tinggi <= 0) {
        echo "Alas dan tinggi harus lebih besar dari nol.";
    } else {
        // Hitung luas segitiga
        $luas = 0.5 * $alas * $tinggi;

        // Tampilkan hasil
        echo "<h1>Hasil Perhitungan</h1>";
        echo "<p>Alas: $alas</p>";
        echo "<p>Tinggi: $tinggi</p>";
        echo "<p>Luas Segitiga: $luas</p>";
    }
} else {
    echo "Metode request tidak valid.";
}
?>


