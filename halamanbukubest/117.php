<!DOCTYPE html>
<html>
<head>
    <!-- Kode lainnya ... -->
</head>
<body>
    <!-- Navbar Atas -->
    <nav class="navbar navbar-expand-lg navbar-dark nv-atas-color">
        <!-- Kode Navbar Atas ... -->
    </nav>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg nv-color justify-content-end">
        <!-- Kode Navbar ... -->
    </nav>

    <!-- Item Detail -->
    <form action="../checkoutupload.php" method="POST">
        <div class="container-item-detail">
            <div class="sub-container-1">
                <a href=""><img id="imagePreview" src="" alt="Gambar" name="gambar"></a>
            </div>
            <div class="sub-container-2">
                <h1 id="judulPreview" name="judul">sadas</h1>
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
            </div>
        </div>
    </form>

    <div class="container-deksripsi">
        <h3>Deskripsi :</h3>
        <hr>
        <p style="overflow-wrap: break-word; word-wrap: break-word; word-break: break-all; max-width: 990px; display: inline-block;">123123</p>
        <!-- Akhir Modal -->

        <script>
            // Ambil elemen dengan id "harga"
            const hargaElement = document.getElementById("harga");

            // Ambil nilai harga dari teks di dalam elemen
            let harga = hargaElement.innerHTML;

            // Tambahkan Rp. di depan nilai harga
            harga = "Rp. " + harga;

            // Format angka dengan titik setiap 3 digit
            harga = formatNumberWithCommas(harga);

            // Masukkan kembali hasil format ke dalam elemen
            hargaElement.innerHTML = harga;

            // Fungsi untuk menambahkan tanda titik setiap 3 digit angka
            function formatNumberWithCommas(number) {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>