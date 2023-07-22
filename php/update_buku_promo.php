<?php
// update_best_seller.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Jika request adalah POST, artinya data form telah disubmit.

    // Pastikan koneksi ke database sudah dibuat dan disimpan dalam variabel $koneksi.
    include 'koneksi.php';

    // Ambil data dari form modal
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];

    // Lakukan validasi data sesuai kebutuhan (jika diperlukan).

    // Lakukan query untuk melakukan update data berdasarkan ID buku.
    $sql = "UPDATE buku_promo SET title='$title', author='$author', kategori='$kategori', deskripsi='$deskripsi' WHERE id='$id'";

    if ($koneksi->query($sql) === TRUE) {
        // Jika update berhasil, redirect ke halaman admin atau halaman daftar buku Best Seller.
        header("Location: admin.php"); // Redirect back to admin.php
        exit; // Terminate the script to ensure the redirect takes place
       
    } else {
        // Jika ada kesalahan dalam update, tampilkan pesan error (optional).
        echo "Error: " . $koneksi->error;
    }

    $koneksi->close();
}
?>
