<?php
// Ambil nilai URL gambar dari POST request
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$harga = $_POST['harga'];
$imageUrl = $_POST['imageUrl'];

// Koneksi ke database MySQL
include 'koneksi.php';

// Periksa apakah judul sudah ada di database
$checkQuery = "SELECT * FROM tes WHERE judul = '$judul'";
$result = $koneksi->query($checkQuery);

if ($result->num_rows > 0) {
    // Judul sudah ada di database, berikan pesan kesalahan
    echo "Judul sudah ada di database.";
} else {
    // Judul belum ada di database, siapkan pernyataan SQL untuk memasukkan data
    $insertQuery = "INSERT INTO tes (gambar, judul, pengarang, harga) VALUES ('$imageUrl', '$judul', '$pengarang', '$harga')";

    if ($koneksi->query($insertQuery) === TRUE) {
        echo "Gambar berhasil diunggah ke database.";
    } else {
        echo "Terjadi kesalahan: " . $koneksi->error;
    }
}

// Redirect ke halaman lain setelah penghapusan berhasil
echo "<script>window.location.href = '../php/keranjang.php';</script>";

// Tutup koneksi
$koneksi->close();
?>
