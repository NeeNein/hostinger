<?php
// Fungsi untuk memeriksa apakah file sudah ada di direktori
function isFileExist($filePath)
{
    return file_exists($filePath);
}

// Fungsi untuk memindahkan file ke direktori yang sesuai berdasarkan pilihan
function moveUploadedFile($tempFilePath, $targetDir, $fileName)
{
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $targetFilePath = $targetDir . '/' . $fileName;

    // Jika file sudah ada, tampilkan pesan dan tidak upload ke database
    if (isFileExist($targetFilePath)) {
        echo "File sudah ada.";
        return null;
    }

    move_uploaded_file($tempFilePath, $targetFilePath);
    return $targetFilePath;
}

if (isset($_POST['submit'])) {
    $tableChoice = $_POST['tableChoice'];

    if ($tableChoice === 'buku_best_seller' || $tableChoice === 'book_promo') {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];

        // Menghubungkan ke database dengan include file koneksi.php
        include 'koneksi.php';

        // Simpan informasi file jika ada
        if (!empty($_FILES['fileToUpload']['name'])) {
            $fileName = $_FILES['fileToUpload']['name'];
            $fileTmpPath = $_FILES['fileToUpload']['tmp_name'];

            // Pilih direktori tujuan berdasarkan pilihan
            $targetDir = '';
            if ($tableChoice === 'buku_best_seller') {
                $targetDir = '../Daftarbuku/BestSeller'; // Ubah direktori menjadi 'BestSeller' di halaman depan
                $tableName = 'books'; // Nama tabel untuk Book Best Seller
            } elseif ($tableChoice === 'book_promo') {
                $targetDir = '../Daftarbuku/Promo'; // Ubah direktori menjadi 'Promo'
                $tableName = 'buku_promo'; // Nama tabel untuk Book Promo
            }

            // Pindahkan file ke direktori yang sesuai
            $targetFilePath = moveUploadedFile($fileTmpPath, $targetDir, $fileName);

            // Jika $targetFilePath adalah null, berarti file sudah ada, sehingga tidak perlu melanjutkan ke database
            if ($targetFilePath === null) {
                return;
            }
        } else {
            $targetFilePath = null; // Jika tidak ada file yang diupload, tetapkan ke null
        }

        // Query SQL untuk menyimpan data ke tabel yang sesuai, termasuk informasi gambar
        $sql = "INSERT INTO $tableName (title, author, price, image, kategori, deskripsi) 
                VALUES ('$title', '$author', $price, '$targetFilePath', '$category', '$description')";

        if ($koneksi->query($sql) === TRUE) {
            // Get the file name without the directory path
            $filename = basename($targetFilePath);

            // Redirect to "upload_result.php" after successful upload and data storage
            header("Location: upload_result.php?filename=$filename&title=$title&author=$author&price=$price&category=$category&description=$description");
            exit; // Add exit to stop further execution of PHP script
        } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
        }

        // Tutup koneksi ke database
        $koneksi->close();
    }
}
?>
