<?php
session_start();
include 'koneksi.php';

// Mengambil data yang dikirim melalui metode POST
$email = $_POST['email'];
$password = $_POST['password'];

// Mengamankan data yang akan digunakan dalam query SQL
$secured_email = $koneksi->real_escape_string($email);
$secured_password = $koneksi->real_escape_string($password);

// Mengecek kecocokan email dan password di database
$sql = "SELECT * FROM users WHERE email = '$secured_email'  AND password = '$secured_password'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    // Jika ada data yang cocok, berarti login berhasil

    // Get the user ID from the result (assuming you have an 'id' column in the 'users' table)
    $user = $result->fetch_assoc();
    $user_id = $user['id'];

    // Simpan user_id ke dalam session untuk menandakan bahwa pengguna sudah login
    $_SESSION['user_id'] = $user_id;

    // Redirect to index.php with the user ID as a parameter
    header("Location: index.php");
} else {
    // Jika tidak ada data yang cocok, berarti login gagal
    echo "Email atau password salah.";
    header("Refresh: 2; URL=login.php"); // Redirect to login.php after 2 seconds
}

$koneksi->close();
?>
