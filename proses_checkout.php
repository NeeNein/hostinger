<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./p_checkout.css"/>
    <title>Document</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari form
  $nama = $_POST["nama"];
  $nama2 = $_POST["nama2"];
  $email = $_POST["email"];
  $kode = $_POST["kode"];
  $alamat = $_POST["alamat"];
  $kota = $_POST["kota"];
  $provinsi = $_POST["provinsi"];
  $kec = $_POST["kec"];
  $mp = $_POST["mp"];

  // Proses data sesuai kebutuhan Anda
  // Misalnya, simpan data ke database atau kirim email konfirmasi  

} else {
  // Redirect jika tidak ada data POST yang dikirimkan
  header("Location: index.html");
  exit();
}

if ($mp == 'BCA') {
    // Jika opsi pertama dipilih, lakukan sesuatu
    $pembayaran = "BCA";
  } elseif ($mp == 'BRI') {
    // Jika opsi kedua dipilih, lakukan sesuatu
    $pembayaran = "BRI";
  } elseif ($mp == 'Dana') {
    // Jika opsi kedua dipilih, lakukan sesuatu
    $pembayaran = "Dana";
  }else {
    // Jika opsi lainnya dipilih, lakukan sesuatu
    $pembayaran = "Gopay";
  }
?>
 <div class="container">
    <h2>Terima kasih atas pembelian Anda!</h2>
    <hr>
    <br>
    <form>
    <div class="form-group">
  <label for="nama">Nama:</label>
  <div class="input-value"><?php echo $nama . " " . $nama2; ?></div>
</div>

<div class="form-group">
  <label for="email">Email:</label>
  <div class="input-value"><?php echo $email; ?></div>
</div>

<div class="form-group">
  <label for="kode">Kode Pos:</label>
  <div class="input-value"><?php echo $kode; ?></div>
</div>

<div class="form-group">
  <label for="kota">Kota:</label>
  <div class="input-value"><?php echo $kota; ?></div>
</div>

<div class="form-group">
  <label for="kec">Kecamatan:</label>
  <div class="input-value"><?php echo $kec; ?></div>
</div>

<div class="form-group">
  <label for="alamat">Alamat:</label>
  <div class="input-value"><?php echo $alamat; ?></div>
</div>

<div class="form-group">
  <label for="mp">Pembayaran:</label>
  <div class="input-value"><?php echo $pembayaran; ?></div>
</div>




</body>
</html>

