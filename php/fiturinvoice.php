<?php
// Mengambil nilai dari $_POST
$metode_pengiriman = $_POST['metode_pengiriman'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$phone = $_POST['phone'];
$totalharga = $_POST['total_harga'];

// Validasi data (sesuaikan dengan kebutuhan Anda)
if (empty($nama) || empty($alamat) || empty($phone)) {
    // Jika ada data yang kosong, lakukan tindakan yang sesuai, seperti menampilkan pesan kesalahan atau mengarahkan kembali ke halaman sebelumnya
    echo "Harap lengkapi semua data.";
    exit;
}

// Simpan data ke database (sesuaikan dengan kebutuhan Anda)
// Di sini, Anda perlu menghubungkan ke database dan menulis kueri INSERT untuk menyimpan data ke tabel yang sesuai

include 'koneksi.php';

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Menyiapkan kueri INSERT
$sql = "INSERT INTO invoice (nama, alamat, phone, metode_pengiriman, metode_pembayaran, total_harga) VALUES ('$nama', '$alamat', '$phone', '$metode_pengiriman', '$metode_pembayaran', '$totalharga')";

// Menjalankan kueri INSERT
if ($koneksi->query($sql) === TRUE) {
    // Mendapatkan ID terakhir yang dimasukkan
    $last_id = $koneksi->insert_id;

    // Mengarahkan ke halaman invoiceakhir.php dengan menyertakan ID sebagai parameter GET
    echo "<script>window.location.href = 'invoiceakhir.php?id=$last_id';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Menutup koneksi ke database
$koneksi->close();
?>
