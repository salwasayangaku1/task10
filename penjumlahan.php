<?php
$hasil = 0; // Inisialisasi variabel hasil

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari inputan
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    
    // Hitung jumlah kedua angka
    $hasil = $angka1 + $angka2;
}
?>

<form action="" method="POST">
    <input type="number" name="angka1" placeholder="Angka 1" required>
    <input type="number" name="angka2" placeholder="Angka 2" required>
    <button type="submit">Jumlahkan</button>
</form>

<h2><?php print $hasil; ?></h2>
