<?php
// Mengambil data yang dikirim melalui metode POST
$email = $_POST['email'];
$password = $_POST['password'];

// Menghubungkan ke server database (sesuaikan dengan konfigurasi server Anda)
$servername = 'localhost';
$username_db = 'root';
$password_db = '';
$database = "nusantara";

$conn = new mysqli($servername, $username_db, $password_db, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengamankan data yang akan disimpan ke database
$secured_username = $conn->real_escape_string($email);
$secured_password = $conn->real_escape_string($password);

// Memasukkan data ke database
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
