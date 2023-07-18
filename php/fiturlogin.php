<?php
include 'koneksi.php';
// Mengambil data yang dikirim melalui metode POST
$email = $_POST['email'];
$password = $_POST['password'];



// Mengamankan data yang akan digunakan dalam query SQL
$secured_email = $koneksi->real_escape_string($email);
$secured_password = $koneksi->real_escape_string($password);

// Mengecek kecocokan email, username, dan password di database
$sql = "SELECT * FROM users WHERE email = '$secured_email'  AND password = '$secured_password'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    // Jika ada data yang cocok, berarti login berhasil
    echo "Login berhasil!";
    header("Location: index.php"); // redirect to index.html
} else {
    // Jika tidak ada data yang cocok, berarti login gagal
    echo "Email, username, atau password salah.";
}

$koneksi->close();
?>
