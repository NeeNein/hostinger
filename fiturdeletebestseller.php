<?php
// Mendapatkan nilai card_title yang dikirimkan melalui form
$cardTitle = $_POST['card_title'];

// Melakukan penghapusan card berdasarkan nilai ul class
$dom = new DOMDocument();
$dom->loadHTMLFile('index.php');

$xpath = new DOMXPath($dom);
$ul = $xpath->query("//ul[@class='carouselcard2']")->item(0);
$cards = $xpath->query(".//li[@class='card2']", $ul);

foreach ($cards as $card) {
    $h2 = $card->getElementsByTagName('h2')->item(0);
    if ($h2->nodeValue == $cardTitle) {
        // Menghapus card
        $ul->removeChild($card);

        // Menghapus file gambar di dalam direktori 'img' berdasarkan nilai src
        $img = $card->getElementsByTagName('img')->item(0);
        $src = $img->getAttribute('src');
        $imagePath = str_replace('./', '', $src);
        $imageFullPath = __DIR__ . '/' . $imagePath;
        if (file_exists($imageFullPath)) {
            unlink($imageFullPath);
        }

        // Menyimpan perubahan ke file HTML
        $dom->saveHTMLFile('index.php');

        // Menampilkan pesan pop-up
        echo "<script>alert('File berhasil dihapus.');</script>";
        break;
    }
}

// Redirect ke halaman lain setelah penghapusan berhasil
echo "<script>window.location.href = 'deletecard.php';</script>";
exit;
?>
