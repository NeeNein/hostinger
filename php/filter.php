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
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["title"] . "</li>";
            }
        } else {
            echo "Tidak ada buku dalam kategori ini.";
        }
        ?>
    </ul>
</body>
</html>

<?php
// Tutup koneksi database
$koneksi->close();
?>
