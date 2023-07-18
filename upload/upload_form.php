<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./uploadform.css"/>
    <title>Document</title>
</head>
<body>
<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'nusantara';
?>

<div class="container">
        <div class="form-wrapper">
            <h1>Form Upload Gambar</h1>
<form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar">
        </div>
        <div class="form-group">
            <label for="teks1">Teks 1</label>
            <input type="text" name="judul" placeholder = "Judul Buku">
        </div>
        <div class="form-group">
            <label for="teks2">Teks 2</label>
            <input type="text" name = "penerbit" placeholder = "Penerbit">
        </div>
        <div class="form-group">
            <label for="teks3">Teks 3</label>
            <input type="text" name = "harga" placeholder = "Harga">
        </div>
        <input type="submit" value="Upload">
    </form>
    </div>
</div>
</body>
</html>
