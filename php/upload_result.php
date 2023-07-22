<!-- upload_result.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Upload Result</title>
</head>
<body>
    <h1>Upload Result</h1>
    <?php
    if (isset($_GET['filename']) && isset($_GET['title']) && isset($_GET['author'])) {
        $filename = $_GET['filename'];
        $title = $_GET['title'];
        $author = $_GET['author'];
        $price = $_GET['price'];
        $category = $_GET['category'];
        $description = $_GET['description'];

        echo "<p>File Name: $filename</p>";
        echo "<p>Title: $title</p>";
        echo "<p>Author: $author</p>";
        echo "<p>Price: $price</p>";
        echo "<p>Category: $category</p>";
        echo "<p>Description: $description</p>";
    } else {
        echo "<p>No data available.</p>";
    }
    ?>
    <p><a href="buathalaman.php">Back to Home</a></p>
</body>
</html>
