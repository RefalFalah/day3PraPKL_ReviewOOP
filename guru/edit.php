<?php
    include '../database.php';
    $guru = new Guru();
    foreach ($guru->edit($_GET['no']) as $data) {
        $no = $data['no'];
        $nip = $data['nip'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pendaftaran Siswa</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- My CSS -->
        <!-- <link rel="stylesheet" href="../../style/style.css"> -->

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

        <!-- Bootstrap icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <style>
            body {
                font-family: 'Quicksand', sans-serif;
            }
        </style>
    </head>
    <body>

        <!-- Start Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm p-3">
            <div class="container">
                <a class="navbar-brand" href="../../index.php">SMK Assalaam</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../../index.php">Guru</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link active" href="edit.php">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pendaftaran/index.php">Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pembayaran</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Edit Data -->
        <form action="proses.php" method="post" class="bawah">
            <input type="hidden" name="no" value="<?= $no; ?>">
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <div class="card w-50 mx-auto shadow p-3 mb-3 bg-body rounded">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-3">Edit Data Guru</h5>
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="nip" class="form-label">NIP</label>                            
                                        <input type="number" name="nip" id="nip" value= "<?= $data["nip"];?>" autocomplete="off" required oninvalid="this.setCustomValidity('Masukan NIP! ')" oninput="setCustomValidity('')" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>                            
                                        <input type="text" name="nama" id="nama" value= "<?= $data["nama"];?>" autocomplete="off" required oninvalid="this.setCustomValidity('Masukan Nama! ')" oninput="setCustomValidity('')" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>                            
                                        <input type="text" name="alamat" id="alamat" value= "<?= $data["alamat"];?>" autocomplete="off" required oninvalid="this.setCustomValidity('Masukan Alamat! ')" oninput="setCustomValidity('')" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-10">
                                            <button type="submit" class="btn btn-dark btn-sm" name="edit">Edit</button>
                                        </div>
                                        <div class="col-2">
                                            <a href="index.php" class="btn btn-danger btn-sm left">Batal</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Edit Data -->

        <!-- Start Footer -->
        <!-- <footer class="footer">
            <div class="footer-left">
                <div class="credit-cards">
                    <img src="../../assets/img/logo-smk.png" alt="" width="170px" height="100px">
                </div>
                <h3>SMK Assalaam Bandung</h3>
            </div>
            <div class="footer-center">
                <div>
                    <i class="bi bi-geo-alt-fill text-light"></i>
                    <p class="text-light"><span>Jl. Situtarate - terusan cibaduyut</span> Kab. Bandung - Jawa Barat</p>
                </div>
                <div>
                    <i class="bi bi-telephone-fill text-light"></i>
                    <p class="text-light">022 5420-220</p>
                </div>
                <div>
                    <i class="bi bi-envelope-fill text-light"></i>
                    <p class="text-light">info@smkassalaambandung.sch.id</p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-about text-light">
                    <span>About</span>
                    SMK Assalaam adalah bagian dari Yayasan Assalaam yang mempersiapkan siswa untuk siap kerja dengan keterampilan & profesional di bidang industri (sekolah berbasis industri) dan kewirausahaan.
                </p>
                <div class="footer-media mt-3">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <p class="text-center mt-5 text-light">Create with <i class="bi bi-heart-fill text-danger"></i> by Refal Falah F</p>
        </footer> -->
        <!-- End Footer -->
        
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
    </body>
</html>