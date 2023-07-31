<!-- pencarian.php -->
<?php
include 'koneksi.php';

// Ambil parameter kategori dari URL
$kategori = $_GET['kategori'];

// Lakukan pencarian berdasarkan kategori
$sql = "SELECT title FROM books WHERE kategori = '$kategori'";
$result = $koneksi->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pencarian</title>
</head>
<body>
    <h1>Hasil Pencarian untuk Kategori: <?php echo $kategori; ?></h1>
    <ul>
        <!-- pencarian.php -->
<?php
// Koneksi ke database
include 'koneksi.php';

// Periksa apakah ada parameter kategori yang dikirimkan
if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];
    $displayedTitles = array(); // Array to store displayed titles

    // Query ke database untuk mencari data dari tabel "books" berdasarkan kategori
    $query_books = "SELECT id, title, author, price, image FROM books WHERE kategori = '$kategori'";
    $result_books = mysqli_query($koneksi, $query_books);

    // Tampilkan hasil pencarian
    if (mysqli_num_rows($result_books) > 0) {
        while ($row = mysqli_fetch_assoc($result_books)) {
            echo '<div class="result-item">';
            echo '<br>';
            $imagePath = '../' . $row['image']; // Menambahkan "../" sebelum path gambar
            echo '<a href="detail_buku.php?id=' . $row['id'] . '"><img src="' . $imagePath . '" alt="Book Image"></a>';
            echo '<h1 class="tolol"> ' . $row['title'] . '</h1>';
            echo '<h2>' . $row['author'] . '</h2>';
            echo '<p>Rp. ' . number_format($row['price'], 0, ',', '.') . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p class="no-result">Tidak ada hasil yang ditemukan.</p>';
    }
}
?>

