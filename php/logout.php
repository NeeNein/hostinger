<?php
session_start();

// Hapus semua data session untuk menandakan bahwa pengguna telah logout
session_unset();
session_destroy();

// Redirect ke index.php setelah logout
header("Location: index.php");
exit();
?>
