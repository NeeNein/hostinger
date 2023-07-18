<!DOCTYPE html>
<html>
<head>
    <title>Upload dan Tampilkan Gambar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="gambar">
        <input type="submit" value="Unggah Gambar">
    </form>

    <?php
    // Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'nusantara';

$koneksi = mysqli_connect($host, $username, $password, $database);
if (!$koneksi) {
    die('Koneksi ke database gagal: ' . mysqli_connect_error());
}

    // Ambil daftar gambar dari database
    $query = "SELECT * FROM gambar";
    $result = mysqli_query($koneksi, $query);

    // Tampilkan container untuk setiap gambar yang telah diunggah
    while ($row = mysqli_fetch_assoc($result)) {
        $lokasiGambar = $row['lokasi'];

        echo "<div class='container'>";
        echo "<img src='$lokasiGambar' alt='Gambar'>";
        echo "</div>";
    }
    ?>

</body>
</html>
