<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com --><html lang="en" dir="ltr">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style></style>
    <meta charset="utf-8">
    

       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- MDB -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet">
    
    <!-- Carousel -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <title>BukuKita | Jual Dan Beli Buku</title>
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
      <img src="../promo/logo.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      BukuKita
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <!-- Hapus menu Home, About, dan Services -->
      </ul>
          <form class="d-flex navbar-form" action="./search.php" method="POST">
               <div class="input-group">
                  <input class="form-control form-control-lg" type="search" name="search_query" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light" type="submit" name="search_submit">Search</button>
               </div>
          </form>
      <!-- Float Login -->
    <!-- Button trigger modal -->
    <!-- Buton Daftar 
    <a type="button" class="btn btn-secondary " href="./daftar.php">
      Daftar
    </a>
  -->

  <div class="d-flex align-items-center"> <!-- Tambahkan elemen div untuk mengelompokkan ikon dan tombol login -->
  <a href="keranjang.php" class="text-decoration-none text-light">
  <i class="fas fa-shopping-cart me-2"></i>
</a> <!-- Tambahkan ikon keranjang di sini, ganti kelas ikon dengan yang sesuai -->
  <a href="../index.php">
    <button type="button" class="btn btn-login-color">
    Logout
    </button>
    </a>
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
                      <a>Belum punya akun? </a><a href="./daftar.php" class="text-primary fs-8">Daftar</a>
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
                  <a>Belum punya akun? </a><a href="./daftar.php" class="text-primary fs-8">Daftar</a>
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

 <!-- Body -->


        
          <!-- Carousel >
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item carousel-image active bg-img-1">
               
              </div>
              <div class="carousel-item carousel-image bg-img-2">
              
              </div>
              <div class="carousel-item carousel-image bg-img-3">
          
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
       Carousel-->
  
<!-- Carousel Item -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../promo/1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../promo/2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../promo/3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- Carousel Item -->

        <div class="container">
      <section id="about">
        <div class="container h-100">
           <div class="row h-100">
            <div class="col-md-6 mt-5">
                <!-- Content here -->
            </div>
           </div>
        </div>
      </section>
    </div>

    

    <!--------------------- Buku Promo --------------------->

<div class="container2">

<?php
            // Fetch the book data from the database
            include '../php/koneksi.php';

            // Create a new PDO instance
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            // Prepare the SQL statement
            $stmt = $pdo->prepare("SELECT * FROM buku_promo");

            // Execute the prepared statement
            $stmt->execute();

            // Fetch all rows from the result set
            $bukupromo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>


    <div class="wrapper">
      <h3>Buku Promo</h3>
      <i id="left" class="fa-solid fa-angle-left"></i>
      <ul class="carouselcard">
        
      <?php foreach ($bukupromo as $bookpromo): ?>
    <li class="card2">
        <div class="img">
            <a class="link" href="promo.php?id=<?php echo $bookpromo['id']?>"><img src="../<?php echo $bookpromo['image']; ?>" alt="Book Image"></a>
        </div>
        <h2 style="text-align: center;"><?php echo $bookpromo['title']; ?></h2>
        <p><?php echo $bookpromo['author']; ?></p>
        <span>Rp. <?php echo number_format($bookpromo['price'], 0, ',', '.'); ?></span>
    </li>
<?php endforeach; ?>



      </ul>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>

  </div>

    <!--------------------- Buku Promo --------------------->


     <!--------------------- Buku Best --------------------->


    
    


  <div class="container-best">

      <?php
                // Fetch the book data from the database
                include '../php/koneksi.php';

                // Create a new PDO instance
                $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                // Prepare the SQL statement
                $stmt = $pdo->prepare("SELECT * FROM books");

                // Execute the prepared statement
                $stmt->execute();

                // Fetch all rows from the result set
                $bukubest = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>

                  <div class="wrapper2">
                      <h3>Best Seller</h3>
                      <i id="left" class="fa-solid fa-angle-left"></i>
                      <ul class="carouselcard2">

                              <?php foreach ($bukubest as $bookbest): ?>
                                <li class="card2">
                                  <div class="img">
                                  <a class="link" href="bestseller.php?id=<?php echo $bookbest['id']?>"><img src="../<?php echo $bookbest['image']; ?>" alt="Book Image"></a>

                                  </div>
                                <h2><?php echo $bookbest['title']; ?></h2>
                                <p><?php echo $bookbest['author']; ?></p>
                                <span>Rp. <?php echo number_format($bookbest['price'], 0, ',', '.'); ?></span>
                              </li>
                            <?php endforeach; ?>
          </ul>
       <i id="right" class="fa-solid fa-angle-right"></i>
  </div>
</div>





  <footer class="footer">
    <div class="social-media">
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-facebook"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>
    <div class="copyright">
        <p>© 2023 Your Company. All rights reserved.</p>
    </div>
</footer>
  
  



  <script>
    $(document).ready(function(){
      $('.carousel').carousel();
    });
  </script>

<!-- Carousel Script -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- Carousel SCript -->


  <!-- Carousel Book Best Seller -->
  <script>
    
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
