<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- MDB -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet">
    
    <!-- Carousel -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <title>Infinite card2 Slider JavaScript | CodingNepal</title>
      <!-- CSS -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/search.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome Link for Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      <script src="../js/script.js" defer></script>
      
      <script src="../js/script3.js" defer></script>
    <!-- Tawks.To -->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/64834eadcc26a871b0219789/1h2gemlu7';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
      </script>

<!-- Navbar Atas -->
<nav class="navbar navbar-expand-lg navbar-dark nv-atas-color">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="path/to/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      Your Brand
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <!-- Hapus menu Home, About, dan Services -->
      </ul>
          <form class="d-flex navbar-form" action="./php/search.php" method="POST">
               <div class="input-group">
                  <input class="form-control form-control-lg" type="search" name="search_query" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light" type="submit" name="search_submit">Search</button>
               </div>
          </form>
      <!-- Float Login -->
    <!-- Button trigger modal -->
    <!-- Buton Daftar 
    <a type="button" class="btn btn-secondary " href="./daftar.html">
      Daftar
    </a>
  -->

  <div class="d-flex align-items-center"> <!-- Tambahkan elemen div untuk mengelompokkan ikon dan tombol login -->
  <a href="keranjang.php" class="text-decoration-none text-light">
  <i class="fas fa-shopping-cart me-2"></i>
</a> <!-- Tambahkan ikon keranjang di sini, ganti kelas ikon dengan yang sesuai -->
    <button type="button" class="btn btn-login-color" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Login
    </button>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center mx-auto p-2 fs-2" style="width: 800px;" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="text-center">
                  <a>Belum punya akun? </a><a href="./daftar.html" class="text-primary fs-8">Daftar</a>
              </div>
            </form>
      </div>
      <div class="modal-footer text-center mx-auto">
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</nav>

<!---------------- AKHIR NAVBAR ATAS ------------------>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg nv-color justify-content-end">
      <div class="container  ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto ">
            <li class="nav-item dropdown mx-2">
              <a class="nav-link active dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Novel</a></li>
                <li><a class="dropdown-item" href="#">Komedi</a></li>
                <li><a class="dropdown-item" href="#">Religi</a></li>
              </ul>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#">Pre Order</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#">Whistlist</a>
            </li>
            <li class="nav-item dropdown mx-2">
              <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About
              </a>
            </li>
          </ul>
          <!-- Float Login -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center mx-auto p-2 fs-2" style="width: 800px;" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="text-center">
                  <a>Belum punya akun? </a><a href="./daftar.html" class="text-primary fs-8">Daftar</a>
              </div>
            </form>
      </div>
      <div class="modal-footer text-center mx-auto">
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div> 
        </div>
      </div>
    </nav>
    <!-- Navrbar -->

<!-------------------------- Hasil Pencarian ------------------------->


<div class="main-result-container">
  <h3>Hasil Pencarian</h3>

    <div class="search-form">
    </div>

    <div class="second-result-container">
    <?php
// Koneksi ke database
include 'koneksi.php';

// Periksa apakah ada permintaan pencarian yang dikirimkan
if (isset($_POST['search_submit'])) {
    $searchQuery = $_POST['search_query'];

    // Query ke database untuk mencari data dari dua tabel
    $query = "SELECT id, title, author, price, image FROM books WHERE title LIKE '%$searchQuery%' OR author LIKE '%$searchQuery%'
                UNION
                SELECT id, judul, author, price, image FROM buku_promo WHERE judul LIKE '%$searchQuery%' OR author LIKE '%$searchQuery%'";
    $result = mysqli_query($koneksi, $query);

    // Tampilkan hasil pencarian
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="result-item">';
            echo '<br>';
            $imagePath = '../' . $row['image']; // Menambahkan "../" sebelum path gambar
            echo '<a href="../halamanbukupromo/detail_buku_' . basename($imagePath, '.php') . '_' . $row['id'] . '.php"><img src="' . $imagePath . '" alt="Book Image"></a>';

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