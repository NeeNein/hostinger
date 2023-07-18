<?php
// Assuming you have already established a database connection

// Function to delete a book from the database
function deleteBook($bookId, $table)
{
    // Your deleteBook function code here
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "nusantara";

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Prepare the SQL statement to delete the book
    $stmt = $pdo->prepare("DELETE FROM $table WHERE id = :bookId");
    $stmt->bindParam(':bookId', $bookId);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->rowCount() > 0) {
        $response = array(
            'status' => 'success',
            'message' => 'Book deleted successfully.'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Failed to delete the book.'
        );
    }

    return $response;
}

// Fetch the book data from the database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "nusantara";

// Create a new PDO instance
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Prepare the SQL statement to fetch books
$stmtBooks = $pdo->prepare("SELECT * FROM books");
$stmtBooks->execute();
$books = $stmtBooks->fetchAll(PDO::FETCH_ASSOC);

// Prepare the SQL statement to fetch promo books
$stmtPromoBooks = $pdo->prepare("SELECT * FROM buku_promo");
$stmtPromoBooks->execute();
$promoBooks = $stmtPromoBooks->fetchAll(PDO::FETCH_ASSOC);

// Handle delete book action
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $bookId = $_GET['id'];
    $table = $_GET['table']; // Assuming you have a 'table' parameter in the URL specifying the table name
    $deleteResponse = deleteBook($bookId, $table);

    // Convert the response to JSON and pass it to the JavaScript code
    echo '<script>';
    echo 'var deleteResponse = ' . json_encode($deleteResponse) . ';';
    echo '</script>';
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Book Gallery</title>
    <style>
        .book-card {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            width: 200px;
            text-align: center;
        }
        .book-card img {
            width: 150px;
            height: 200px;
        }
    </style>
    <script>
        // JavaScript code to show the success or error message
        if (typeof deleteResponse !== 'undefined') {
            if (deleteResponse.status === 'success') {
                alert(deleteResponse.message);
            } else {
                console.error(deleteResponse.message);
            }
        }
    </script>
    <link rel="stylesheet" href="./tes.css">
    <link rel="stylesheet" href="./delete.css">
</head>
<body>
<nav class="nav">
    <ul>
      <li><a href="uploadbuku.php">Form Upload Buku Promo</a></li>
      <li><a href="uploadbuku.php">Form Upload Buku Best Seller</a></li>
      <li><a href="fiturdelet.php">Delete Product</a></li>
      <li><a href="#bestseller-section">Form Upload Buku Best Seller</a></li>
    </ul>
</nav>

<section class="delete" id="bestseller-section">
    <h1>Buku Best Seller</h1>
    <div class="book-container">
        <?php foreach ($promoBooks as $book): ?>
            <div class="book-card">
                <img src="<?php echo $book['image']; ?>" alt="Book Image">
                <h2><?php echo $book['judul']; ?></h2>
                <p><?php echo $book['author']; ?></p>
                <span><?php echo $book['price']; ?></span>
                <p>
                    <a href="?action=delete&id=<?php echo $book['id']; ?>&table=buku_promo">Delete</a>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<section class="delete" id="bestseller-section">
    <h1>Buku Best Seller</h1>
    <div class="book-container">
        <?php foreach ($books as $book): ?>
            <div class="book-card">
                <img src="<?php echo $book['image']; ?>" alt="Book Image">
                <h2><?php echo $book['title']; ?></h2>
                <p><?php echo $book['author']; ?></p>
                <span><?php echo $book['price']; ?></span>
                <p>
                    <a href="?action=delete&id=<?php echo $book['id']; ?>&table=books">Delete</a>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<script>
    // JavaScript code to show the success or error message
    var deleteResponse = <?php echo isset($deleteResponse) ? json_encode($deleteResponse) : 'null'; ?>;

    if (deleteResponse !== null) {
        if (deleteResponse.status === 'success') {
            alert(deleteResponse.message);
        } else {
            console.error(deleteResponse.message);
        }
    }
</script>

</body>
</html>
