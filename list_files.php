<?php
include './php/koneksi.php'; // Menggunakan koneksi dari koneksi.php

// Fetch files data
$sql_files = "SELECT * FROM files ORDER BY upload_date DESC";
$result_files = $koneksi->query($sql_files);

// Fetch books data
$sql_books = "SELECT * FROM books ORDER BY id DESC";
$result_books = $koneksi->query($sql_books);

if ($result_files->num_rows > 0 || $result_books->num_rows > 0) {
    echo "<h2>Daftar Files:</h2>";
    echo "<ul>";
    while ($row_files = $result_files->fetch_assoc()) {
        echo "<li>" . $row_files["filename"] . " - " . $row_files["upload_date"] . " <a href='delete.php?id=" . $row_files["id"] . "'>Hapus</a></li>";
    }
    echo "</ul>";

    echo "<h2>Daftar Buku:</h2>";
    echo "<ul>";
    while ($row_books = $result_books->fetch_assoc()) {
        echo "<li>" . $row_books["title"] . " - " . $row_books["author"] . " - " . $row_books["publish_date"] . " <a href='delete_book.php?id=" . $row_books["id"] . "'>Hapus</a></li>";
    }
    echo "</ul>";
} else {
    echo "Belum ada file dan buku yang diunggah.";
}

$koneksi->close();
?>
