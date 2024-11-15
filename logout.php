<?php
// Mulai sesi
session_start();

// Hancurkan sesi
session_unset();  // Menghapus semua data sesi
session_destroy();  // Menghancurkan sesi

// Arahkan pengguna ke halaman login
header("Location: login.php");
exit();
?>
