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

// Hapus gambar berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Ambil lokasi gambar dari database
    $query = "SELECT lokasi FROM gambar WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $lokasi = $row['lokasi'];
    
    // Hapus gambar dari folder
    unlink($lokasi);
    
    // Hapus informasi gambar dari database
    $query = "DELETE FROM gambar WHERE id = $id";
    mysqli_query($koneksi, $query);
    
    // Redirect ke halaman daftar gambar
    header('Location: list_gambar.php');
    exit;
}
?>
