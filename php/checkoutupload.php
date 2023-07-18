<?php
// Ambil nilai URL gambar dari POST request
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$harga = $_POST['harga'];
$imageUrl = $_POST['imageUrl'];

include 'koneksi.php';

// Periksa apakah judul sudah ada di database
$checkQuery = "SELECT * FROM tes WHERE judul = '$judul'";
$result = $conn->query($checkQuery);

if ($result->num_rows > 0) {
    // Judul sudah ada di database, berikan pesan kesalahan
    echo "Judul sudah ada di database.";
} else {
    // Judul belum ada di database, siapkan pernyataan SQL untuk memasukkan data
    $insertQuery = "INSERT INTO tes (gambar, judul, pengarang, harga) VALUES ('$imageUrl', '$judul', '$pengarang', '$harga')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "Gambar berhasil diunggah ke database.";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
}

// Redirect ke halaman lain setelah penghapusan berhasil
echo "<script>window.location.href = 'keranjang.php';</script>";

// Tutup koneksi
$conn->close();
?>
