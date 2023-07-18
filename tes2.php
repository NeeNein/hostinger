<?php
$targetDir = "gambar/";
$files = scandir($targetDir);

echo "<ul>";
foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        echo "<li>$file <a href='delete.php?filename=$file'>Hapus</a></li>";
    }
}
echo "</ul>";
?>
