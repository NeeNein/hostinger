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

    // Get the user ID from the result (assuming you have an 'id' column in the 'users' table)
    $user = $result->fetch_assoc();
    $user_id = $user['id'];

    // Redirect to index.php with the user ID as a parameter
    header("Location: index.php?id=" . $user_id);
} else {
    // Jika tidak ada data yang cocok, berarti login gagal
    echo "Email, username, atau password salah.";
    header("Refresh: 1; URL=login.php"); // Redirect to login.php after 2 seconds
}

$koneksi->close();
?>
