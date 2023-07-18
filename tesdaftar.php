<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $targetDir = "gambar/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Cek apakah file adalah gambar atau bukan
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File adalah gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }
    }

    // Cek apakah file sudah ada
    if (file_exists($targetFile)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // Batasi jenis file yang diizinkan, misalnya hanya gambar
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
        $uploadOk = 0;
    }

    // Cek apakah $uploadOk bernilai 0 karena terjadi kesalahan
    if ($uploadOk == 0) {
        echo "Maaf, file Anda tidak dapat diunggah.";
    } else {
        // Jika semuanya berjalan lancar, unggah file
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File " . basename($_FILES["fileToUpload"]["name"]) . " telah diunggah.";
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>
