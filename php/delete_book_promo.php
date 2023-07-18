<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];

    include 'koneksi.php'; // Menggunakan koneksi dari koneksi.php

    // Get file path from the "buku_promo" table based on the ID
    $sql_get_file = "SELECT image FROM buku_promo WHERE id = $id";
    $result_get_file = $koneksi->query($sql_get_file);
    if ($result_get_file->num_rows > 0) {
        $row_get_file = $result_get_file->fetch_assoc();
        $filePath = $row_get_file["image"];

        // Delete file from the directory
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    // Delete data from the "buku_promo" table based on the ID
    $sql_delete = "DELETE FROM buku_promo WHERE id = $id";
    if ($koneksi->query($sql_delete) === TRUE) {
        echo "Buku promo berhasil dihapus.";
        header("Location: admin.php"); // Arahkan kembali ke halaman utama (ganti dengan file halaman utama yang sesuai)
        exit(); // Hentikan eksekusi kode selanjutnya

    } else {
        echo "Terjadi kesalahan saat menghapus buku promo: " . $koneksi->error;
    }

    $koneksi->close();
}
?>
