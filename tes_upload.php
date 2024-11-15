<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ujikom_galeripotoku"; // Pastikan nama database sesuai

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Proses form saat dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judulfoto = $_POST['judulfoto'];
    $deskripsifoto = $_POST['deskripsifoto'];
    $albumid = $_POST['albumid'];
    $userid = $_POST['userid'];
    
    // Mengupload file gambar
    $target_dir = "gambar/"; // Folder tempat menyimpan gambar
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Cek apakah file gambar adalah gambar sesungguhnya
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Cek apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Cek ukuran file (misalnya maksimal 5MB)
    if ($_FILES["gambar"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Hanya izinkan format gambar tertentu (misalnya JPG, JPEG, PNG, GIF)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Jika $uploadOk adalah 0, berarti ada error pada upload file
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Jika semua oke, pindahkan file ke folder tujuan
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " has been uploaded.";

            // Simpan data ke database
            $tanggalunggah = date('Y-m-d H:i:s'); // Mengambil waktu saat ini
            $sql = "INSERT INTO foto (judulfoto, deskripsifoto, tanggalunggah, gambar, albumid, userid) 
                    VALUES ('$judulfoto', '$deskripsifoto', '$tanggalunggah', '$target_file', $albumid, $userid)";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>


<!-- Form untuk menambahkan foto -->
<form action="tes_upload.php" method="post" enctype="multipart/form-data">
    <label for="judulfoto">Judul Foto:</label><br>
    <input type="text" id="judulfoto" name="judulfoto" required><br><br>
    
    <label for="deskripsifoto">Deskripsi Foto:</label><br>
    <textarea id="deskripsifoto" name="deskripsifoto" required></textarea><br><br>
    
    <label for="gambar">Pilih Gambar:</label><br>
    <input type="file" id="gambar" name="gambar" accept="image/*" required><br><br>
    
    <label for="albumid">Album ID:</label><br>
    <input type="number" id="albumid" name="albumid" required><br><br>
    
    <label for="userid">User ID:</label><br>
    <input type="number" id="userid" name="userid" required><br><br>
    
    <input type="submit" name="submit" value="Upload Foto">
</form>
