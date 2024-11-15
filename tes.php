<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username MySQL Anda
$password = ""; // Sesuaikan dengan password MySQL Anda
$dbname = "ujikom_galeripotoku"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menjalankan query untuk mengambil data foto
$sql = "SELECT fotoid, judulfoto, deskripsipoto, tanggalunggah, gambar, albumid, userid FROM foto";
$result = $conn->query($sql);

// Menutup koneksi setelah selesai
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <!-- Menyertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-4">
    <h1 class="text-center">Galeri Foto</h1>
    <a href="tes_upload.php" class="btn btn-primary">Tambah Foto</a>
    <div class="row">
        <?php
        // Memeriksa apakah ada data
        if ($result->num_rows > 0) {
            // Menampilkan data dalam format card
            while($row = $result->fetch_assoc()) {
                // Ambil data dari database
                $fotoid = $row['fotoid'];
                $judulfoto = $row['judulfoto'];
                $deskripsipoto = $row['deskripsipoto'];
                $tanggalunggah = $row['tanggalunggah'];
                $gambar = $row['gambar']; // Misalnya ini adalah path ke gambar
                ?>
                <!-- Card Bootstrap -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/<?php echo htmlspecialchars($gambar); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($judulfoto); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($judulfoto); ?></h5>
                            <p class="card-text"><?php echo nl2br(htmlspecialchars($deskripsipoto)); ?></p>
                            <p class="text-muted">Tanggal Unggah: <?php echo date("d-m-Y", strtotime($tanggalunggah)); ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>Tidak ada data foto yang ditemukan.</p>";
        }
        ?>
    </div>
</div>

<!-- Menyertakan Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
