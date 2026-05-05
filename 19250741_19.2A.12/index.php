<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cinzel', serif;
            background: url(https://i.pinimg.com/originals/d0/50/6e/d0506e820f5a13d3951ce7d6b93dae10.gif) no-repeat center center fixed;
            background-size: cover;
            color: #f7f7f7;
        }

        .container-fluid {
            background: rgba(0, 0, 0, 0.6);
        }

        header {
            background: linear-gradient(135deg, #0f0f23 0%, #1e1e3f 50%, #2a2a5e 100%);
            background: url(https://i.pinimg.com/originals/97/65/72/97657295a2c10716b58191adf07d4345.gif) no-repeat center center;
            background-size: cover;
            border-bottom: 2px solid #efeeee;
            box-shadow: 0 0 20px rgba(11, 11, 11, 0.3);
        }
    </style>
</head>
<body>

    <div class="container-fluid min-vh-100 d-flex flex-column p-0">
        <header class="bg-dark text-white text-center py-5 position-relative">
            <div class="character-image"></div>
            <div class="container">
                <h1 class="display-4 mb-3">Web Programming Quiz</h1>
                <p class="lead mb-4">Masukan Data Diri Anda</p>
                <p class="mb-0">Made By : Muhammad Daffa Al Rizky</p>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="input-group rounded overflow-hidden shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="container my-5 flex-grow-1">
            <div class="row g-4">
                <section class="col-lg-9">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="h4 mb-4">Formulir Informasi</h2>
                            <form method="post" action="">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">NIM</label>
                                    <input type="number" class="form-control" name="nim" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kelas</label>
                                    <input type="text" class="form-control" name="kelas" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <button type="submit" name="kirim" class="btn btn-primary">Submit</button>
                            </form>
                            <?php if (isset($_POST['kirim'])): ?>
                                <div class="mt-4">
                                    <h5><strong>Hasil Submit : </strong></h5>
                                    <p></p>
                                    <p style="color: #0c5fb2;">Nama : <?php echo ($_POST['nama']) ? $_POST['nama'] : 'Nama tidak diisi'; ?></p>
                                    <p style="color: #0c5fb2;">NIM : <?php echo ($_POST['nim']) ? $_POST['nim'] : 'NIM tidak diisi'; ?></p>
                                    <p style="color: #0c5fb2;">Kelas : <?php echo ($_POST['kelas']) ? $_POST['kelas'] : 'Kelas tidak diisi'; ?></p>
                                    <p style="color: #0c5fb2;">Jenis Kelamin : <?php echo ($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : 'Jenis Kelamin tidak diisi'; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>
        </main>

</body>
</html> 