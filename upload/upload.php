<?php
include 'koneksi.php';

// Unggah gambar jika ada
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $gambar = $_FILES['gambar'];
    
    // Peroleh informasi gambar
    $namaFile = $gambar['name'];
    $lokasiSementara = $gambar['tmp_name'];
    $ukuran = $gambar['size'];
    
    // Pindahkan gambar ke folder yang diinginkan
    $lokasiTujuan = 'gambar/' . $namaFile;
    move_uploaded_file($lokasiSementara, $lokasiTujuan);
    
    // Simpan informasi gambar ke database
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];
    $query = "INSERT INTO gambar (nama_file, lokasi) VALUES ('$namaFile', '$lokasiTujuan')";
    mysqli_query($koneksi, $query);
    
    // Tampilkan pesan sukses
    echo "Gambar berhasil diunggah.";
}
?>
