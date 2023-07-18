<!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="./style.css"/>
        <!-- Carousel -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <link rel="stylesheet" href="./checkout.css"/>
      <title>tes</title>
     
    </head>
    <head>
        <style>
            .card2 {
                list-style: none;
                width: 200px;
                padding: 10px;
                margin: 10px;
                border: 1px solid #ccc;
                float: left;
                text-align: center;
            }
            .img img {
                width: 150px;
                height: 200px;
                object-fit: cover;
            }
        </style>
    </head>
    <body>

    <body>
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
      <form class="d-flex navbar-form">
        <div class="input-group">
          <input class="form-control form-control-lg" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </div>
      </form>
      <!-- Float Login -->
    <!-- Button trigger modal -->
    <!-- Buton Daftar 
    <a type="button" class="btn btn-secondary " href="./daftar.html">
      Daftar
    </a>
  -->
    <button type="button" class="btn btn-login-color" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Login
    </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center mx-auto p-2 fs-2" style="width: 800px;"  id="exampleModalLabel">Login</h1>
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
        <h1 class="modal-title fs-5 text-center mx-auto p-2 fs-2" style="width: 800px;"  id="exampleModalLabel">Login</h1>
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

    <!-- Item Detail -->
  <body>

  <form action="../checkoutupload.php" method="POST">
    <div class="container-item-detail">
      <div class="sub-container-1">
            <a href="../Daftarbuku/Promo/1.jpg"><img id="imagePreview"  src="../Daftarbuku/Promo/1.jpg" alt="Gambar" name="gambar"></a>
      </div>
      <div class="sub-container-2">
          <h1 id="judulPreview" name = "judul">tes</h1>
          <hr>
          <div class="rating">
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
          </div>
          <p id="pengarang" name="pengarang">tes</p>
          <p id="harga" name="harga">123123</p>
          <p name="note">no hidden cost</p>
      </div>
      <div class="sub-container">
        
          <input type="hidden" name="imageUrl" value="" id="imageUrlInput">
          <input type="hidden" name="judul" value="" id="judulInput">
          <input type="hidden" name="pengarang" value="" id="pengarangInput">
          <input type="hidden" name="harga" value="" id="hargaInput">
          <button type="submit" value="Upload" class="btn btn-checkout" style="width: 100%;">
            Tambah Ke Keranjang
            </button>
          
          <script>
              const judulInput = document.getElementById("judulPreview").textContent;
              document.getElementById("judulInput").value = judulInput;

              const pengarangInput = document.getElementById("pengarang").textContent;
              document.getElementById("pengarangInput").value = pengarangInput;

              const hargaInput = document.getElementById("harga").textContent;
              document.getElementById("hargaInput").value = hargaInput;

              const imageUrl = document.getElementById("imagePreview").src;
              document.getElementById("imageUrlInput").value = imageUrl;
          </script>
        
    </div>
      </div>
      </div>
  </div>
  </form>

  <div class="container-deksripsi">
    <h3>Deskripsi :</h3>
    <hr>
    <p>Masalah hadir sebagai ujian bagi manusia untuk membawa perubahan nasib. Tidak ada manusia yang hidup tanpa memiliki masalah. Kita tidak dapat menghapus kata-kata yang terlanjur terucap ataupun menghapus tindakan yang terlanjur dilakukan. Karena itu, keduanya harus dipikirkan sebelum dilepaskan.
      Buku Rahasia Bersikap Tenang Dalam Kondisi Apapun mengupas tuntas 7 kunci bersikap tenang ketika berada pada segala situasi. Jika masalah adalah ujian naik level, kita seharusnya butuh banyak masalah untuk sampai di level tertinggi. Semoga buku Rahasia Bersikap Tenang Dalam Kondisi Apapun dapat membantu Anda untuk lebih mengenali diri Anda sendiri sebagai fondasi utama dalam usaha mengembangkan diri. Karena tekanan tidak selalu buruk. Ia bisa menjadi cambuk yang membuat kita bergerak lebih cepat ke arah tujuan.</p>
  </div>
  <!-- Akhir Modal -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  </html>