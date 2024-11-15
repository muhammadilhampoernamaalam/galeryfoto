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
            <!-- Tombol Logout -->
<form action="logout.php" method="POST" class="d-inline">
    <button type="submit" class="btn btn-danger">Logout</button>
</form>

    </div>
</body>
</html>
        </div>
    </nav>

    <!-- Galeri Gambar -->
    <div class="container my-5">
        <h2 class="text-center mb-4">My Gallery</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="mobil 3.jpg" class="card-img-top" alt="Gambar 1">
                    <div class="card-body">
                        <h5 class="card-title">Retro Car</h5>
                        <p class="card-text">Mobil klasik</p>
                        <button class="like-btn" onclick="likeImage(1)">
                            Like <span id="like-count-1" class="like-count">25</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="collapse" href="#comments-1">
                            <i class="bi bi-chat-left"></i> Komentar
                        </button>
                        <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                            data-bs-target="#hapus1">
                            Hapus
                        </button>

                        <!-- Formulir Komentar -->
                        <div class="collapse comment-section" id="comments-1">
                            <h6>Komentar:</h6>
                            <div id="comments-1-list"></div>
                            <div class="comment-box">
                                <input type="text" id="comment-input-1" class="form-control" placeholder="Tambah komentar...">
                                <button class="btn btn-primary mt-2" onclick="addComment(1)">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Hapus untuk Card 1 -->
            <div class="modal fade" id="hapus1" tabindex="-1" aria-labelledby="hapus1Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="hapus1Label">Hapus Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="hapus_foto.php" method="POST">
                                <input type="hidden" name="fotoid" value="1">
                                Apakah anda yakin akan menghapus data <strong>Retro Car</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="hapus" class="btn btn-danger">Hapus Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="mobil 1.jpg" class="card-img-top" alt="Gambar 2">
                    <div class="card-body">
                        <h5 class="card-title">Lamborghini</h5>
                        <p class="card-text">Mobil sport mewah</p>
                        <button class="like-btn" onclick="likeImage(2)">
                            Like <span id="like-count-2" class="like-count">40</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="collapse" href="#comments-2">
                            <i class="bi bi-chat-left"></i> Komentar
                        </button>
                        <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                            data-bs-target="#hapus2">
                            Hapus
                        </button>

                        <!-- Formulir Komentar -->
                        <div class="collapse comment-section" id="comments-2">
                            <h6>Komentar:</h6>
                            <div id="comments-2-list"></div>
                            <div class="comment-box">
                                <input type="text" id="comment-input-2" class="form-control" placeholder="Tambah komentar...">
                                <button class="btn btn-primary mt-2" onclick="addComment(2)">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal Hapus untuk Card 2 -->
            <div class="modal fade" id="hapus2" tabindex="-1" aria-labelledby="hapus2Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="hapus2Label">Hapus Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="hapus_foto.php" method="POST">
                                <input type="hidden" name="fotoid" value="2">
                                Apakah anda yakin akan menghapus data <strong>Lamborghini</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="hapus" class="btn btn-danger">Hapus Data</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="hapus" class="btn btn-danger">insert</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="mobil (2).jpg" class="card-img-top" alt="Gambar 3">
                    <div class="card-body">
                        <h5 class="card-title">Ford Mustang</h5>
                        <p class="card-text">Mobil klasik Amerika</p>
                        <button class="like-btn" onclick="likeImage(3)">
                            Like <span id="like-count-3" class="like-count">53</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="collapse" href="#comments-3">
                            <i class="bi bi-chat-left"></i> Komentar
                        </button>
                        <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                            data-bs-target="#hapus3">
                            Hapus
                        </button>

                        <!-- Formulir Komentar -->
                        <div class="collapse comment-section" id="comments-3">
                            <h6>Komentar:</h6>
                            <div id="comments-3-list"></div>
                            <div class="comment-box">
                                <input type="text" id="comment-input-3" class="form-control" placeholder="Tambah komentar...">
                                <button class="btn btn-primary mt-2" onclick="addComment(3)">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Hapus untuk Card 3 -->
            <div class="modal fade" id="hapus3" tabindex="-1" aria-labelledby="hapus3Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="hapus3Label">Hapus Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="hapus_foto.php" method="POST">
                                <input type="hidden" name="fotoid" value="3">
                                Apakah anda yakin akan menghapus data <strong>Ford Mustang</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="hapus" class="btn btn-danger">Hapus Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100">
                    <img src="motor 1.jpg" class="card-img-top" alt="Gambar 4">
                    <div class="card-body">
                        <h5 class="card-title">H2</h5>
                        <p class="card-text">motor sport mewah</p>
                        <button class="like-btn" onclick="likeImage(2)">
                            Like <span id="like-count-2" class="like-count">40</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="collapse" href="#comments-2">
                            <i class="bi bi-chat-left"></i> Komentar
                        </button>
                        <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                            data-bs-target="#hapus2">
                            Hapus
                        </button>

                        <!-- Formulir Komentar -->
                        <div class="collapse comment-section" id="comments-2">
                            <h6>Komentar:</h6>
                            <div id="comments-2-list"></div>
                            <div class="comment-box">
                                <input type="text" id="comment-input-2" class="form-control" placeholder="Tambah komentar...">
                                <button class="btn btn-primary mt-2" onclick="addComment(2)">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal Hapus untuk Card 4 -->
            <div class="modal fade" id="hapus2" tabindex="-1" aria-labelledby="hapus2Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="hapus2Label">Hapus Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="hapus_foto.php" method="POST">
                                <input type="hidden" name="fotoid" value="2">
                                Apakah anda yakin akan menghapus data <strong>Lamborghini</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="hapus" class="btn btn-danger">Hapus Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Card 5 -->
            <div class="col">
                <div class="card h-100">
                    <img src="mobil (2).jpg" class="card-img-top" alt="Gambar 2">
                    <div class="card-body">
                        <h5 class="card-title">cb 100</h5>
                        <p class="card-text">motor dilan</p>
                        <button class="like-btn" onclick="likeImage(2)">
                            Like <span id="like-count-2" class="like-count">40</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="collapse" href="#comments-2">
                            <i class="bi bi-chat-left"></i> Komentar
                        </button>
                        <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                            data-bs-target="#hapus2">
                            Hapus
                        </button>

                        <!-- Formulir Komentar -->
                        <div class="collapse comment-section" id="comments-2">
                            <h6>Komentar:</h6>
                            <div id="comments-2-list"></div>
                            <div class="comment-box">
                                <input type="text" id="comment-input-2" class="form-control" placeholder="Tambah komentar...">
                                <button class="btn btn-primary mt-2" onclick="addComment(2)">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal Hapus untuk Card 5 -->
            <div class="modal fade" id="hapus2" tabindex="-1" aria-labelledby="hapus2Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="hapus2Label">Hapus Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="hapus_foto.php" method="POST">
                                <input type="hidden" name="fotoid" value="2">
                                Apakah anda yakin akan menghapus data <strong>Lamborghini</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="hapus" class="btn btn-danger">Hapus Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card h-100">
                    <img src="motor 3).jpg" class="card-img-top" alt="Gambar 2">
                    <div class="card-body">
                        <h5 class="card-title">F1</h5>
                        <p class="card-text">Motor 2 tak</p>
                        <button class="like-btn" onclick="likeImage(2)">
                            Like <span id="like-count-2" class="like-count">40</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="collapse" href="#comments-2">
                            <i class="bi bi-chat-left"></i> Komentar
                        </button>
                        <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                            data-bs-target="#hapus2">
                            Hapus
                        </button>

                        <!-- Formulir Komentar -->
                        <div class="collapse comment-section" id="comments-2">
                            <h6>Komentar:</h6>
                            <div id="comments-2-list"></div>
                            <div class="comment-box">
                                <input type="text" id="comment-input-2" class="form-control" placeholder="Tambah komentar...">
                                <button class="btn btn-primary mt-2" onclick="addComment(2)">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal Hapus untuk Card 6 -->
            <div class="modal fade" id="hapus2" tabindex="-1" aria-labelledby="hapus2Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="hapus2Label">Hapus Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="hapus_foto.php" method="POST">
                                <input type="hidden" name="fotoid" value="2">
                                Apakah anda yakin akan menghapus data <strong>Lamborghini</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="hapus" class="btn btn-danger">Hapus Data</button>
                            </form>
                        </div>
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
