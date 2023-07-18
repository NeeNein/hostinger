<?php
// Assuming you have already established a database connection

if (isset($_POST['submit'])) {
    $target_dir = "./Daftarbuku/BestSeller/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file gambar
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Cek ukuran file
    if ($_FILES["fileToUpload"]["size"] > 500000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Cek ekstensi file yang diizinkan
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Cek jika $uploadOk bernilai 0 karena terdapat error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // Jika semua kondisi terpenuhi, maka unggah file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $price = $_POST['price'];

            // Assuming you have already established a database connection
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = "nusantara";

            // Create a new PDO instance
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            // Prepare the SQL statement
            $stmt = $pdo->prepare("INSERT INTO books (title, author, price, image) VALUES (:title, :author, :price, :image)");

            // Bind the parameters
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':author', $author);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':image', $target_file);

            // Execute the prepared statement
            if ($stmt->execute()) {
                // Menampilkan pop-up menggunakan JavaScript
                echo '<script>alert("File Berhasil Di Upload.");</script>';
            } else {
                echo "Sorry, there was an error uploading your file to the database.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
// Redirect ke halaman lain setelah penghapusan berhasil
echo "<script>window.location.href = 'uploadbuku.php';</script>";
exit;
?>
