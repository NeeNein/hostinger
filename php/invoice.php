
<?php
if (isset($_GET['total'])) {
  $total = $_GET['total'];

  // Retrieve selected items from URL parameter if available
  $selectedItems = array();
  if (isset($_GET['items'])) {
    $selectedItems = json_decode($_GET['items'], true);
  }
?>

<!DOCTYPE html>
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

      <!--IONICON-->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />


      <script src="../js/script.js" defer></script>
      
      <script src="../js/script3.js" defer></script>

<style>
    
  </style>
  <title>Checkout</title>
</head>
<body>

<!-- Navbar Atas -->
<nav class="navbar navbar-expand-lg navbar-dark nv-atas-color">
  <div class="container">
    <a class="navbar-brand" href="../php/index.php">
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
      <form class="d-flex navbar-form" action="./search.php" method="POST">
        <div class="input-group">
          <input class="form-control form-control-lg" type="search" name="search_query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit" name="search_submit">Search</button>
        </div>
      </form>
      <!-- Float Login -->
      <div class="d-flex align-items-center"> <!-- Tambahkan elemen div untuk mengelompokkan ikon dan tombol login -->
        <a href="keranjang.php" class="text-decoration-none text-light">
          <i class="fas fa-shopping-cart me-2"></i>
        </a> <!-- Tambahkan ikon keranjang di sini, ganti kelas ikon dengan yang sesuai -->
        <button type="button" class="btn btn-login-color" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
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






    <!--
  <h1>Checkout</h1>

  <h2>Selected Items:</h2>
  <ul>
    <?php foreach ($selectedItems as $item): ?>
      <li>
        <strong><?php echo $item['judul']; ?></strong><br>
        <img src="<?php echo $item['gambar']; ?>"><br>
        Harga: <?php echo $item['harga']; ?><br>
        Jumlah: <?php echo $item['jumlah']; ?><br>
        Subtotal: <?php echo $item['subtotal']; ?>
      </li>
    <?php endforeach; ?>
  </ul>
    -->


    
<div class="main-container-invoice">
  <div class="checkout">
    <h3>Checkout</h3>
  </div>
  <div class="checkout">
    <h2>Alamat</h2>
  </div>

  <div class="alamat-invoice">
    <div class="shipping-container">
      <div class="shipping-options">
        <div class="select-wrapper">
          <div class="selected-option">Metode Pengiriman <i class="fa-solid fa-chevron-down"></i></div>
          <div class="options">
            <div class="option" disabled selected hidden>Metode Pengiriman</div>
            <div class="option" onclick="updateShippingMethod(this)">
              <p>JNE <br> Pengiriman 2 - 4 Hari</p>
              <p class="price">25000</p>
            </div>
            <hr>
            <div class="option" onclick="updateShippingMethod(this)">
              <p>Si Cepat <br> Pengiriman 2 - 4 Hari</p>
              <p class="price">22000</p>
            </div>
            <hr>
            <div class="option" onclick="updateShippingMethod(this)">
              <p>J&T <br> Pengiriman 2 - 4 Hari</p>
              <p class="price">19000</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="label-container">
      <label for="nama">Nama:</label>
      <span id="namaLabel"></span>
    </div>
    <div class="label-container">
      <label for="phone">No HP:</label>
      <span id="phoneLabel"></span>
    </div>
    <div class="label-container">
      <label for="alamat">Alamat:</label>
      <span id="alamatLabel"></span>
    </div>
  </div>

  <div class="alamat-invoice">
    <div class="button-container">
      <button class="open-modal-button" onclick="openModal()">Masukkan Alamat</button>
    </div>
  </div>

  <div id="myModal" class="modal-alamat">
    <div class="modal-content-alamat">
      <span class="close" onclick="closeModal()">&times;</span>
      <form>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" oninput="updateLabel('nama')" /><br><br>

        <label for="email">No Hp:</label>
        <input type="email" id="phone" name="phone" oninput="updateLabel('phone')" /><br><br>

        <label for="pesan">Alamat:</label>
        <input type="text" id="alamat" name="alamat" oninput="updateLabel('alamat')"></textarea><br><br>

        <button type="button" onclick="closeModal()">Tutup</button>
      </form>
    </div>
  </div>
</div>
<!-- End of main-container-invoice -->

<!-- Closing div for alamat-invoice -->
</div>

<!-- Closing div for main-container-invoice -->
</div>



  <div class="isi">
    <p>Produk</p>
    <p>Harga</p>
    <p>Kuantitas</p>
    <p>Total Harga</p>
  </div>
  

  <div id="keranjang-container">
  <?php foreach ($selectedItems as $item): ?>
      <div class="container-judul">
        <h3 style="text-align: left;"><?php echo $item['judul']; ?></h3>
        <hr>
      </div>
      <div class="container-isi">
        <div class="sub-container-keranjang">
          <img src="<?php echo $item['gambar']; ?>">
        </div>
        <div class="sub-container-keranjang">
          <p class="harga">Harga = <?php echo $item['harga']; ?><br></p>
        </div>
        <div class="sub-container-keranjang3">
            <p class="jumlah">Jumlah : <?php echo $item['jumlah']; ?></p>
        </div>
        <div class="sub-container-keranjang">
            <p class="subtotal">Subtotal = <?php echo $item['subtotal']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="container-invoice"> 
<div class="pembayaran">
  <h2>Metode Pembayaran</h2>

  <input type="radio" id="bca" name="metode" value="bca" onchange="updatePaymentMethod(this)">
  <label for="bca"><img src="../gambar/bca.png" alt="">BCA</label>

  <input type="radio" id="bri" name="metode" value="bri" onchange="updatePaymentMethod(this)">
  <label for="bri"><img src="../gambar/bri.png" alt="">BRI</label>

  <input type="radio" id="dana" name="metode" value="dana" onchange="updatePaymentMethod(this)">
  <label for="dana"><img src="../gambar/dana.png" alt="">Dana</label>

  <input type="radio" id="gopay" name="metode" value="gopay" onchange="updatePaymentMethod(this)">
  <label for="gopay"><img src="../gambar/gopay.png" alt="">Go-Pay</label>
</div>


  </div>

  <div class="container-invoice">
          <div class="rincian">
          </div>
          <div class="rincian">
          </div>
          <div class="rincian">
          <h2>Total Harga: Rp. <?php echo number_format($total, 0, ".", "."); ?> <span id="totalHargaLabel"></span></h2>
          </div>
            <form action="fiturinvoice.php" method="post">
              <div class="rincian-button">
                  <input type="hidden" id="selectedShippingMethod" name="metode_pengiriman">
                  <input type="hidden" id="selectedPaymentMethod" name="metode_pembayaran">
                  <input type="hidden" id="namaInput" name="nama">
                  <input type="hidden" id="alamatInput" name="alamat">
                  <input type="hidden" id="phoneInput" name="phone">
                  <input type="hidden" id="totalHargaInput" name="total_harga">
                  <button type="submit" class="invoice">Checkout</button>
              </div>
            </form>

  </div>

  
    <script>
      // Mendapatkan elemen h2
      var h2Element = document.querySelector(".rincian h2");

      // Mendapatkan nilai dari h2
      var nilaiH2 = h2Element.innerText;

      // Menghapus "Total Harga: Rp." dari nilai h2
      var totalHarga = nilaiH2.replace("Total Harga: Rp. ", "");

      // Mendapatkan elemen totalHargaInput
      var totalHargaInputElement = document.getElementById("totalHargaInput");

      // Mengatur nilai totalHargaInput dengan nilai totalHarga
      totalHargaInputElement.value = totalHarga;

    </script>
 
<!-- metode pengiriman -->
<script>
  function updateShippingMethod(option) {
    var selectedText = option.textContent;
    var selectedShippingMethodInput = document.getElementById("selectedShippingMethod");
    selectedShippingMethodInput.value = selectedText;
  }
</script>

  <!-- RADIO -->
  <script>
  function updatePaymentMethod(radioButton) {
    var selectedMethod = radioButton.value;
    var selectedPaymentMethodInput = document.getElementById("selectedPaymentMethod");
    selectedPaymentMethodInput.value = selectedMethod;
  }
</script>

  <!-- Add your checkout form or payment gateway integration here -->

  <script>
    var modal = document.getElementById("myModal");

    function openModal() {
      modal.style.display = "block";
      var shippingContainer = document.querySelector(".shipping-container");
      shippingContainer.style.zIndex = "1";
    }

    function closeModal() {
      modal.style.display = "none";
      var shippingContainer = document.querySelector(".shipping-container");
      shippingContainer.style.zIndex = "2";
    }

    function updateLabel(field) {
      var value = document.getElementById(field).value;
      var label = document.getElementById(field + "Label");
      label.innerHTML = value;
        // Menambahkan kode untuk mengisi input value
      var input = document.getElementById(field + "Input");
      input.value = value;
    }

    function tombolClicked() {
      // Fungsi ini akan dijalankan saat tombol diklik
      alert("Tombol diklik!");
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>



<script>
  //FORMAT HARGA
  // Mendapatkan semua elemen dengan kelas "price"
  var priceElements = document.getElementsByClassName("price");

  // Melakukan formatting harga pada setiap elemen
  for (var i = 0; i < priceElements.length; i++) {
    var priceElement = priceElements[i];
    var priceText = priceElement.innerHTML;
    var priceNumber = priceText.replace(/\s/g, "");
    var priceFormatted = "Rp. " + priceNumber.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
    priceElement.innerHTML = priceFormatted;
  }
</script>


<script>
  //FUNGSI UNTUK PILIHAN PENGIRIMAN
    document.addEventListener("DOMContentLoaded", function() {
      const selectWrapper = document.querySelector(".select-wrapper");
      const selectedOption = selectWrapper.querySelector(".selected-option");
      const options = selectWrapper.querySelector(".options");

      selectedOption.addEventListener("click", function() {
        options.classList.toggle("show");
      });

      options.addEventListener("click", function(event) {
        if (event.target.classList.contains("option")) {
          const value = event.target.getAttribute("data-value");
          selectedOption.textContent = event.target.firstChild.textContent.trim();
          selectedOption.setAttribute("data-value", value);
          options.classList.remove("show");
          showShippingOptions(); // Panggil fungsi showShippingOptions() di sini jika diperlukan
        }
      });

      document.addEventListener("click", function(event) {
        if (!selectWrapper.contains(event.target)) {
          options.classList.remove("show");
        }
      });
    });

    function showShippingOptions() {
      // Fungsi showShippingOptions()
      // Tambahkan implementasi fungsi di sini
      // Dapat digunakan untuk memproses pilihan pengiriman
    }
</script>

<!-- Button Checkout -->
<script>
  

  function retrieveCheckoutData() {
    const nama = document.getElementById("namaLabel").textContent.trim();
    const email = document.getElementById("emailLabel").textContent.trim();
    const alamat = document.getElementById("alamatLabel").textContent.trim();
    const metodePengiriman = document.querySelector('.selected-option').textContent.trim();
    const metodePembayaran = document.querySelector('input[name="metode"]:checked').value;
    const totalHarga = <?php echo $total; ?>; // Replace with the actual total price variable

    // Store the retrieved data in local storage
    localStorage.setItem("nama", nama);
    localStorage.setItem("email", email);
    localStorage.setItem("alamat", alamat);
    localStorage.setItem("metodePengiriman", metodePengiriman);
    localStorage.setItem("metodePembayaran", metodePembayaran);
    localStorage.setItem("totalHarga", totalHarga);

    // Redirect to the other HTML file
    window.location.href = "../tes.php";
  }
</script>

</body>
</html>

<?php
} else {
  
}
