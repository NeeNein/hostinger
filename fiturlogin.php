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

// Mengamankan data yang akan digunakan dalam query SQL
$secured_email = $conn->real_escape_string($email);
$secured_password = $conn->real_escape_string($password);

// Mengecek kecocokan email, username, dan password di database
$sql = "SELECT * FROM users WHERE email = '$secured_email'  AND password = '$secured_password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Jika ada data yang cocok, berarti login berhasil
    echo "Login berhasil!";
    header("Location: ./php/index.php"); // redirect to index.html
} else {
    // Jika tidak ada data yang cocok, berarti login gagal
    echo "Email, username, atau password salah.";
}

$conn->close();
?>
