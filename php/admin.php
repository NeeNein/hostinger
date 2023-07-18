<!DOCTYPE html>
<html>
<head>

<style>
        /* Custom CSS */
        body {
            padding-top: 20px;
        }

        h1, h2 {
            margin-bottom: 20px;
        }

     /* CSS style untuk navigasi (sidebar) */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 100;
            padding-top: 3.5rem;
            background-color: #f8f9fa;
            display: flex; /* Menjadikan konten sidebar menjadi flex container */
            flex-direction: column; /* Menjadikan konten sidebar menjadi flex column */
            align-items: center; /* Mengatur konten agar berada di tengah-tengah secara horizontal */
        }

        .sidebar ul.nav {
            padding: 0;
            list-style: none;
            margin: 0; /* Atur margin menjadi 0 untuk menghapus default margin dari ul */
        }

        .sidebar .nav-item {
            margin-bottom: 1rem;
        }

        .sidebar .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            color: #333;
            text-decoration: none;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease-in-out;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background-color: #007bff;
            color: #fff;
        }

        .sidebar .nav-link[data-bs-toggle="modal"] {
            cursor: pointer;
        }

        .sidebar .a {
          text-align: center;
        }

      /* Custom CSS for the Unggah File modal */
        .modal-content {
            font-family: Arial, sans-serif;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 10px;
        }

        #promoFields {
            margin-top: 20px;
        }

        .modal-footer {
            display: flex;
            justify-content: center; /* Mengatur tombol menjadi di tengah secara horizontal */
            gap: 10px;
        }

        .modal-footer .btn {
            padding: 8px 50px; /* Mengatur lebar tombol */
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem; /* Sesuaikan ukuran teks tombol jika diperlukan */
            font-weight: bold; /* Sesuaikan gaya teks tombol jika diperlukan */
            margin: auto;
        }

        .modal-content input[type="submit"] {
          width: 100%;
        }
        

        /* Styling the Hapus File button in the modal */
        .modal-body button[type="submit"] {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }

        .modal-body button[type="submit"]:hover {
            background-color: #c82333;
        }

        /* Styling the Unggah File button in the modal */
        .modal-body input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
        }


        /* Styling the Daftar File list */
        ul {
            list-style: none;
            padding-left: 0;
        }

        ul li {
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center; /* Vertically align the delete button */
        }

        ul li form {
            display: inline;
            margin: 0;
        }

        ul li form button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        ul li form button:hover {
            background-color: #c82333;
        }


        /* Style to prevent selection of the "Rp" text */
        .input-group-text {
            user-select: none;
            display: flex;
            align-items: center;
            height: 100%;
            
        }


      

    </style>

    <title>Halaman Admin</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Navbar Kiri -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#uploadModal">Unggah File</a>
                        </li>
                    </ul>
                </div>
            </nav>

          <!-- Konten Utama -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- Isi konten utama di sini -->
    <h1>Selamat datang di halaman admin</h1>
    <hr>
    

    <h2>Daftar Buku Best Seller</h2>
    <?php
    include 'koneksi.php';

    // Fetch books data
    $sql_books = "SELECT * FROM books ORDER BY id";
    $result_books = $koneksi->query($sql_books);

    if ($result_books->num_rows > 0) {
        echo "<table class='table'>";
        echo "<thead><tr><th>Judul Buku</th><th>Penulis</th><th>Gambar</th><th>Kategori</th><th>Deskripsi</th><th>Aksi</th></tr></thead>";
        echo "<tbody>";
        while ($row_books = $result_books->fetch_assoc()) {
            echo "<tr>
                      <td>" . $row_books["title"] . "</td>
                      <td>" . $row_books["author"] . "</td>
                      <td><img src='" . $row_books["image"] . "' alt='Gambar Buku' style='max-width: 100px;'></td>
                      <td>" . $row_books["kategori"] . "</td>
                      <td>" . $row_books["deskripsi"] . "</td>
                      <td>
                          <form action='delete_book_best_seller.php' method='post' style='display: inline;'>
                              <input type='hidden' name='id' value='" . $row_books["id"] . "'>
                              <button type='submit' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus buku ini?\")'>Hapus</button>
                          </form>
                      </td>
                  </tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Belum ada buku yang diunggah.";
    }

    $koneksi->close();
    ?>

    <h2>Daftar Buku Promo</h2>
    <?php
    include 'koneksi.php';

    // Fetch book_promo data
    $sql_book_promo = "SELECT * FROM buku_promo ORDER BY id";
    $result_book_promo = $koneksi->query($sql_book_promo);

    if ($result_book_promo->num_rows > 0) {
        echo "<table class='table'>";
        echo "<thead><tr><th>Judul Buku Promo</th><th>Penulis</th><th>Gambar</th><th>Kategori</th><th>Deskripsi</th><th>Aksi</th></tr></thead>";
        echo "<tbody>";
        while ($row_book_promo = $result_book_promo->fetch_assoc()) {
            echo "<tr>
                      <td>" . $row_book_promo["title"] . "</td>
                      <td>" . $row_book_promo["author"] . "</td>
                      <td><img src='" . $row_book_promo["image"] . "' alt='Gambar Buku Promo' style='max-width: 100px;'></td>
                      <td>" . $row_book_promo["kategori"] . "</td>
                      <td>" . $row_book_promo["deskripsi"] . "</td>
                      <td>
                          <form action='delete_book_promo.php' method='post' style='display: inline;'>
                              <input type='hidden' name='id' value='" . $row_book_promo["id"] . "'>
                              <button type='submit' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus buku promo ini?\")'>Hapus</button>
                          </form>
                      </td>
                  </tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Belum ada buku promo yang diunggah.";
    }

    $koneksi->close();
    ?>
</main>





<!-- Modal Unggah File -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Unggah File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="feature.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="tableChoice" class="col-sm-4 col-form-label">Pilih Tabel Tujuan:</label>
                        <div class="col-sm-8">
                            <select name="tableChoice" id="tableChoice" class="form-select">
                                <option value="buku_best_seller">Book Best Seller</option>
                                <option value="book_promo">Book Promo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="title" class="col-sm-4 col-form-label">Judul Buku:</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="author" class="col-sm-4 col-form-label">Penulis:</label>
                        <div class="col-sm-8">
                            <input type="text" name="author" id="author" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="price" class="col-sm-4 col-form-label">Harga:</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                            <span class="input-group-text">Rp</span>
                                <input type="number" name="price" id="price" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fileToUpload" class="col-sm-4 col-form-label">File:</label>
                        <div class="col-sm-8">
                            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="category" class="col-sm-4 col-form-label">Kategori:</label>
                        <div class="col-sm-8">
                            <select name="category" id="category" class="form-select" required>
                                <option value="" disabled selected>Pilih Kategori</option>
                                <option value="Komedi">Komedi</option>
                                <option value="Religi">Religi</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Adventure">Adventure</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-4 col-form-label">Deskripsi:</label>
                        <div class="col-sm-8">
                            <textarea name="description" id="description" rows="3" class="form-control" required></textarea>
                        </div>
                    </div>

                    <!-- Form fields specific to book_promo -->
                    

                    <input type="submit" value="Unggah" name="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>




    




    <!-- Untuk Upload Form -->

    <!-- Pilihan Database -->
   

    <!-- ... (previous HTML code) -->



    <!-- Tambahkan link ke Bootstrap JS (Popper.js & Bootstrap.js) dan jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
