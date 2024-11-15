<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Card -->
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Daftar Akun</h4>
                    </div>
                    <div class="card-body">
                        <!-- Formulir Pendaftaran -->
                        <form action="config/aksi_register.php" method="POST">
                            <!-- Nama Lengkap -->
                            <div class="form-group">
                                <label for="namalengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan nama lengkap" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                            </div>

                            <!-- Username -->
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                            </div>

                            <!-- Kata Sandi -->
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
                            </div>

                            <!-- Konfirmasi Kata Sandi -->
                            <div class="form-group">
                                <label for="confirm_password">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Konfirmasi kata sandi" required>
                            </div>

                            <!-- Alamat -->
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required></textarea>
                            </div>

                            <!-- Tombol Kirim -->
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>Sudah punya akun? <a href="login.php">Masuk di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan dependensi -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
