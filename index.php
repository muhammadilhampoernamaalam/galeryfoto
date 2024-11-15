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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">My Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                </div>
                <a href="poernama.php" class="btn btn-outline-primary m-1">Daftar</a>
                <a href="login.php" class="btn btn-outline-primary m-1">Login</a>
            </div>
        </div>
    </nav>

    <!-- Galeri Gambar -->
    <div class="container my-5">
        <h2 class="text-center mb-4">My Gallery</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100">
                    <!-- Pastikan gambar berada di folder yang benar atau gunakan path absolut -->
                    <img src="mobil%203.jpg" class="card-img-top" alt="Gambar 1">
                    <div class="card-body">
                        <h5 class="card-title">Retro Car</h5>
                        <p class="card-text">Mobil klasik</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100">
                    <!-- Pastikan gambar berada di folder yang benar atau gunakan path absolut -->
                    <img src="mobil%201.jpg" class="card-img-top" alt="Gambar 2">
                    <div class="card-body">
                        <h5 class="card-title">Lamborghini</h5>
                        <p class="card-text">Mobil sport mewah</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100">
                    <!-- Pastikan gambar berada di folder yang benar atau gunakan path absolut -->
                    <img src="mobil (2).jpg" class="card-img-top" alt="Gambar 3">
                    <div class="card-body">
                        <h5 class="card-title">Ford Mustang</h5>
                        <p class="card-text">Mobil klasik Amerika</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100">
                    <!-- Pastikan gambar berada di folder yang benar atau gunakan path absolut -->
                    <img src="motor 1.jpg" class="card-img-top" alt="Gambar 4">
                    <div class="card-body">
                        <h5 class="card-title">h2</h5>
                        <p class="card-text">Motor kece</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
                <div class="card h-100">
                    <!-- Pastikan gambar berada di folder yang benar atau gunakan path absolut -->
                    <img src="motor (2).jpg" class="card-img-top" alt="Gambar 5">
                    <div class="card-body">
                        <h5 class="card-title">cb100</h5>
                        <p class="card-text">Motor dilan</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card h-100">
                    <!-- Pastikan gambar berada di folder yang benar atau gunakan path absolut -->
                    <img src="motor 3).jpg" class="card-img-top" alt="Gambar 6">
                    <div class="card-body">
                        <h5 class="card-title">F1</h5>
                        <p class="card-text">Motor 2 tak</p>
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

        // Fungsi untuk menambahkan komentar
        function addComment(cardId) {
            var commentInput = document.getElementById("comment-input-" + cardId);
            var commentText = commentInput.value.trim();  // Ambil nilai komentar dan hilangkan spasi ekstra
            if (commentText !== "") {
                var commentSection = document.getElementById("comments-" + cardId + "-list");
                var newComment = document.createElement("div");
                newComment.classList.add("comment");
                newComment.textContent = commentText;
                commentSection.appendChild(newComment);  // Tambahkan komentar ke dalam div komentar
                commentInput.value = "";  // Kosongkan input komentar setelah dikirim
            }
        }
    </script>

</body>

</html>
