<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Data</title>
</head>

<body>
    <h1>Uploaded Data</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Category</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Menghubungkan ke database dengan include file koneksi.php
            include './php/koneksi.php';

            // Query SQL untuk mengambil data dari tabel yang sesuai
            $tableName = '';
            if ($_POST['tableChoice'] === 'buku_best_seller') {
                $tableName = 'books';
            } elseif ($_POST['tableChoice'] === 'book_promo') {
                $tableName = 'buku_promo';
            }

            $sql = "SELECT * FROM $tableName";
            $result = $koneksi->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['author'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['kategori'] . "</td>";
                    echo "<td>" . $row['deskripsi'] . "</td>";
                    echo "<td><img src='" . $row['image'] . "' height='100'></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No data available</td></tr>";
            }

            // Tutup koneksi ke database
            $koneksi->close();
            ?>
        </tbody>
    </table>
    <br>
    <a href="buathalaman.php">Back to Upload Page</a>
</body>

</html>
