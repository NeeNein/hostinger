<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    include './php/koneksi.php'; // Menggunakan koneksi dari koneksi.php

    // Handle file upload
    $targetBaseDir = "Daftarbuku/";

    $tableChoice = $_POST["tableChoice"];
    $subDir = "";

    if ($tableChoice === "buku_best_seller") {
        $subDir = "BestSeller/";
    } else if ($tableChoice === "book_promo") {
        $subDir = "Promo/";
    }

    $targetDir = $targetBaseDir . $subDir;

    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the uploaded file is an image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check === false) {
        echo "File yang diunggah bukan gambar.";
        $uploadOk = 0;
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Maaf, file tersebut sudah ada.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) { // Adjust the file size limit as needed
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Allow only certain image file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png"
        && $imageFileType != "gif"
    ) {
        echo "Maaf, hanya file gambar JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Handle form data for books
    $title = $_POST["title"];
    $author = $_POST["author"];
    $price = $_POST["price"];
    $kategory = $_POST["category"];
    $description = $_POST["description"];

    // Check if all required form fields are filled
    if (empty($title) || empty($author) || empty($price) || empty($kategory) || empty($description)) {
        echo "Harap isi semua field dengan benar.";
        $uploadOk = 0;
    }

    // Check if file and form data are valid before proceeding
    if ($uploadOk == 0) {
        echo "Maaf, file Anda tidak dapat diunggah.";
    } else {
        // If everything is valid, upload the file
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            // Insert data into the chosen table based on the user's selection
            if ($tableChoice === "buku_best_seller") {
                $sql_book = "INSERT INTO books (title, author, price, image, kategori, deskripsi) 
             VALUES ('$title', '$author', '$price', '$targetFile', '$kategory', '$description')";
                if ($koneksi->query($sql_book) === TRUE) {
                    echo "File " . $title . " telah diunggah dan disimpan bersama data buku.";
                } else {
                    echo "Terjadi kesalahan saat menyimpan informasi file dan data buku: " . $koneksi->error;
                }
            } else if ($tableChoice === "book_promo") {
                $sql_book_promo = "INSERT INTO buku_promo (judul, author, price, image, kategori, deskripsi) 
             VALUES ('$title', '$author', '$price', '$targetFile', '$kategory', '$description')";

                if ($koneksi->query($sql_book_promo) === TRUE) {
                    echo "File " . $author . " telah diunggah dan disimpan bersama data buku promo.";
                } else {
                    echo "Terjadi kesalahan saat menyimpan informasi file dan data buku promo: " . $koneksi->error;
                }
            }

            $koneksi->close();
            
            // Redirect to "buathalaman.php" after successful upload and data storage
            echo "<script>window.location.href = './php/buathalaman.php';</script>";
            exit;
        }
    }
}
?>

