<?php

include '../php/koneksi.php';
// Mengambil data yang dikirim melalui metode POST
$email = $_POST['email'];
$password = $_POST['password'];

// Menghubungkan ke server database (sesuaikan dengan konfigurasi server Anda)



// Mengamankan data yang akan disimpan ke database
$secured_username = $koneksi->real_escape_string($email);
$secured_password = $koneksi->real_escape_string($password);

// Memasukkan data ke database
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

if ($koneksi->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
