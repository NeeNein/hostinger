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

    // Lakukan query untuk mengambil informasi tentang buku sebelum di-update.
    $sql_fetch_old_image = "SELECT image FROM books WHERE id='$id'";
    $result_fetch_old_image = $koneksi->query($sql_fetch_old_image);
    $row_fetch_old_image = $result_fetch_old_image->fetch_assoc();
    $old_image_path = $row_fetch_old_image['image'];

    // Lakukan query untuk melakukan update data berdasarkan ID buku.
    if (!empty($_FILES['new_image']['name'])) {
        // If a new image is uploaded, process the image.
        $image = $_FILES['new_image']['name'];
        $target = "../Daftarbuku/BestSeller/" . basename($image);

        // Delete the old image file if it exists
        if (file_exists($old_image_path) && is_file($old_image_path)) {
            unlink($old_image_path);
        }

        // Move the uploaded image to the target directory.
        if (move_uploaded_file($_FILES['new_image']['tmp_name'], $target)) {
            // Image uploaded successfully. Update the database with the new image path.
            $sql = "UPDATE books SET title='$title', author='$author', kategori='$kategori', deskripsi='$deskripsi', image='$target' WHERE id='$id'";
        } else {
            // Failed to upload the image. You can handle this case based on your application's requirements.
            echo "Failed to upload the image.";
            exit;
        }
    } else {
        // If no new image is uploaded, update the database without changing the image.
        $sql = "UPDATE books SET title='$title', author='$author', kategori='$kategori', deskripsi='$deskripsi' WHERE id='$id'";
    }

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
