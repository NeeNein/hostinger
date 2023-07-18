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

// Tampilkan daftar gambar
while ($row = mysqli_fetch_assoc($result)) {
    $namaFile = $row['nama_file'];
    $lokasi = $row['lokasi'];
    echo "<img src='$lokasi' alt='$namaFile'><br>";
}
?>
