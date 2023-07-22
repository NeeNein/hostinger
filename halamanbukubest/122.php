<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
    <!-- Carousel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="./checkout.css" />
    <title></title>

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
    <!-- Navbar Atas -->
    <nav class="navbar navbar-expand-lg navbar-dark nv-atas-color">
        <!-- Your Navbar code goes here -->
    </nav>
    <!-- Navbar -->

    <!-- Item Detail -->
    <form action="../checkoutupload.php" method="POST">
        <div class="container-item-detail">
            <div class="sub-container-1">
                <a href="../Daftarbuku/BestSeller/20200702_173510 (1).png"><img id="imagePreview" src="../Daftarbuku/BestSeller/20200702_173510 (1).png" alt="Gambar" name="gambar"></a>
            </div>
            <div class="sub-container-2">
                <h1 id="judulPreview" name="judul">asda</h1>
                <hr>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <p id="pengarang" name="pengarang">Mhd. Rois Almaududy</p>
                <p id="harga" name="harga">500000</p>
                <p name="note">no hidden cost</p>
            </div>
            <div class="sub-container">
                <!-- Kode lainnya ... -->
                <input type="hidden" name="imageUrl" value="../Daftarbuku/BestSeller/20200702_173510 (1).png" id="imageUrlInput">
                <input type="hidden" name="judul" value="asda" id="judulInput">
                <input type="hidden" name="pengarang" value="Mhd. Rois Almaududy" id="pengarangInput">
                <input type="hidden" name="harga" value="500000" id="hargaInput">
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
    </form>

    <div class="container-deksripsi">
        <h3>Deskripsi :</h3>
        <hr>
        <p style="overflow-wrap: break-word; word-wrap: break-word; word-break: break-all; max-width: 990px; display: inline-block;">123123</p>
        <!-- Akhir Modal -->
    </div>

    <script>
        // Your existing scripts go here
    </script>

    <!-- Your existing scripts go here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>