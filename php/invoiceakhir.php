<?php
// Mengambil nilai ID dari parameter URL
$id = $_GET['id'];

// Mengambil data terbaru dari database (sesuaikan dengan kebutuhan Anda)
include 'koneksi.php';

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Menyiapkan kueri SELECT dengan mengurutkan berdasarkan ID secara menurun (terbaru) dan membatasi hasil hanya 1 baris
$sql = "SELECT * FROM invoice WHERE id = " . $id;

// Menjalankan kueri SELECT
$result = $koneksi->query($sql);

// Memeriksa apakah ada data yang ditemukan
if ($result->num_rows > 0) {
    // Menampilkan data
    ?>
    <html>
    <head>


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
    </head>
    <body>

    <!-- Navbar Atas -->
 <nav class="navbar navbar-expand-lg navbar-dark nv-atas-color">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="../promo/logo.jpg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
      Your Brand
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <!-- Hapus menu Home, About, dan Services -->
      </ul>
          
      <!-- Float Login -->
    <!-- Button trigger modal -->
    <!-- Buton Daftar 
    <a type="button" class="btn btn-secondary " href="./daftar.html">
      Daftar
    </a>
  -->

  <div class="d-flex align-items-center"> <!-- Tambahkan elemen div untuk mengelompokkan ikon dan tombol login -->
   <!-- Tambahkan ikon keranjang di sini, ganti kelas ikon dengan yang sesuai -->
    <button type="button" class="btn btn-login-color" data-bs-toggle="modal" data-bs-target="#exampleModal">
   
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
              <form action="./php/fiturlogin.php" method="POST">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="text-center">
                      <a>Belum punya akun? </a><a href="./daftar.html" class="text-primary fs-8">Daftar</a>
                  </div>
                
          </div>
              <div class="modal-footer text-center mx-auto">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
              </form>
    </div>
  </div>
</div>
    </div>
  </div>
</nav>

<!---------------- AKHIR NAVBAR ATAS ------------------>

  <!-- Navbar -->
  
    <!-- Navrbar -->


    <div class="last-container">
        <h1>Detail Invoice</h1>
        
        <div class="second-last-container">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="invoice-info">
                    <p><strong>Nama</strong> : <?php echo $row['nama']; ?></p>
                    <p><strong>Alamat</strong> : <?php echo $row['alamat']; ?></p>
                    <p><strong>Phone</strong> : <?php echo $row['phone']; ?></p>
                    <p><strong>Metode Pengiriman</strong> : <?php echo $row['metode_pengiriman']; ?></p>
                    <p><strong>Metode Pembayaran</strong> : <?php echo $row['metode_pembayaran']; ?></p>
                    <p><strong>Total Harga</strong> : <?php echo $row['total_harga']; ?></p>
                </div>
            <?php } ?>
        </div>
        </div>
    </body>
    </html>
    <?php
} else {
    ?>
    <html>
    <head>
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
    </head>
    <body>
        <p style="font-size:40px;" class="error-message">Tidak ada data yang ditemukan.</p>
    </body>
    </html>
    <?php
}

// Menutup koneksi ke database
$koneksi->close();
?>
