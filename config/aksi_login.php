<?php
session_start();
include 'koneksi.php';  // Memasukkan file koneksi untuk menggunakan koneksi database

// Mengecek apakah form login telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];  // Username yang dimasukkan oleh pengguna
    $password = $_POST['password'];  // Password yang dimasukkan oleh pengguna

    // Menggunakan prepared statements untuk mencegah SQL Injection
    $sql = $koneksi->prepare("SELECT * FROM user WHERE username = ?");
    $sql->bind_param("s", $username);  // Mengikat parameter username untuk mencegah SQL Injection
    $sql->execute();
    $result = $sql->get_result();

    // Mengecek apakah username ditemukan
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();  // Ambil data user dari database

        // Debugging: var_dump data user yang ditemukan di database
        var_dump($user);  // Menampilkan data user yang diambil dari database

        // Verifikasi password menggunakan md5() untuk membandingkan dengan hash MD5 di database
        if (md5($password) == $user['password']) {
            // Jika password cocok, buat session untuk login
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login'; 
            
            // Login berhasil, redirect ke halaman utama
            echo "<script>
                alert('Login berhasil!');
                location.href='../home.php';  // Halaman yang akan dituju setelah login berhasil
            </script>";
        } else {
            // Jika password salah
            echo "<script>
                alert('Username atau password salah!');
                location.href='../login.php';  // Kembali ke halaman login
            </script>";
        }
    } else {
        // Jika username tidak ditemukan
        echo "<script>
            alert('Username atau password salah!');
            location.href='../login.php';  // Kembali ke halaman login
        </script>";
    }
} else {
    // Jika form login tidak disubmit
    echo "<script>
        alert('Form login belum disubmit!');
        location.href='../login.php';  // Redirect ke halaman login jika tidak ada data yang dikirim
    </script>";
}
?>
