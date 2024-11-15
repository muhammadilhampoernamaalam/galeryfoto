<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Muhammad Ilham</title>
    <!-- Link ke CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            text-align: center;
        }

        .like-btn {
            background-color: #ff6f61;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        .like-btn:hover {
            background-color: #e55a50;
        }

        .like-count {
            margin-left: 5px;
            font-size: 16px;
        }

        .comment-section {
            margin-top: 10px;
            text-align: left;
        }

        .comment-box {
            margin-top: 10px;
        }

        .comment {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <!-- Galeri Gambar (menggunakan Card) -->
    <div class="container my-5">
        <h2 class="text-center mb-4">My Gallery</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body bg-light">
                                <div class="text-center">
                                    <h5>Login aplikasi</h5>
                                </div>
                                <form action="config/aksi_login.php" method="POST">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                    <div class="d-grid mt-2">
                                        <button class="btn btn-primary" type="submit" name="kirim">MASUK</button>
                                    </div>
                                </form>

                            </div>
                            </form>
                            <hr>
                            <p>Belum punya akun? <a href="poernama.php">Login disini!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Script JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            // Fungsi untuk menangani like
            function likeImage(cardId) {
                var likeCountElement = document.getElementById("like-count-" + cardId);
                var currentLikeCount = parseInt(likeCountElement.innerText);
                currentLikeCount++;  // Tambah 1 like
                likeCountElement.innerText = currentLikeCount;  // Update elemen dengan jumlah like baru
            }
        </script>
</body>

</html>