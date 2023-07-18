<?php
$servername = 'localhost';
$username = 'u347911358_neenein';
$password = '123Master!@#';
$dbname = "u347911358_nusantara";

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Mengatur karakter encoding
mysqli_set_charset($koneksi, "utf8");

// Kode di atas akan membuat variabel $koneksi yang merupakan objek koneksi database.
// Jika koneksi gagal, kode akan menghentikan eksekusi dan menampilkan pesan error.
// Jika koneksi berhasil, Anda dapat menggunakan variabel $koneksi untuk menjalankan kueri SQL.

// Contoh penggunaan:
// $sql = "SELECT * FROM tabel";
// $result = $koneksi->query($sql);
// while ($row = $result->fetch_assoc()) {
//     echo $row["kolom"];
// }

// Jangan lupa untuk menutup koneksi setelah selesai menggunakan database.
// $koneksi->close();
?>
