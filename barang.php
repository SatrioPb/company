<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/boxicons.min.css" />
    <link rel="stylesheet" href="css/barang.css" />
    <title>Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body id="home">
    <!-- Nvbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand logo-text" id="logodit" href="index.php">DITYA PLAFON PVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rekom">Plafon</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- banner -->

    <div id="carouselExampleCaptions" class="carousel slide" style="padding-top: 55px">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/plaf.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Beatles</h5>
                    <p>The Beatles adalah kelompok pemusik Inggris beraliran rock, dibentuk di Liverpool pada tahun 1960, sering kali dianggap sebagai pemusik tersukses secara komersial dan paling banyak mendapat pujian dalam musik populer.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/plaf.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Beatles</h5>
                    <p>The Beatles adalah kelompok pemusik Inggris beraliran rock, dibentuk di Liverpool pada tahun 1960, sering kali dianggap sebagai pemusik tersukses secara komersial dan paling banyak mendapat pujian dalam musik populer.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/plaf.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Beatles</h5>
                    <p>The Beatles adalah kelompok pemusik Inggris beraliran rock, dibentuk di Liverpool pada tahun 1960, sering kali dianggap sebagai pemusik tersukses secara komersial dan paling banyak mendapat pujian dalam musik populer.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Player  -->

    <div class="container">
        <h1 class="rekom" id="rekom" style="color: #898fa1;">PLAVON PILIHAN</h1>
        <hr style="height: 4px; border: none; background-color: black" />
        <tr>

            <div class="old flex-wrap">
                <?php

                ?>
                <?php
                $query = ("SELECT * FROM barang");
                $result = mysqli_query($koneksi, $query);
                ?>
                <?php while ($data = mysqli_fetch_assoc($result)) {
                ?>


                    <div class="card" style="width: 22em; margin-bottom: 50px; ">
                        <img src="foto/<?php echo $data['foto']; ?>" width="351" height="300">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['nm_barang']; ?></h5>
                            <p class="card-text"><?php echo $data['deskripsi']; ?></p>
                            <p class="card-text">Stock : <?php echo $data['jumlah']; ?></p>
                            <a href="beli.php?kd_barang='<?= $data['kd_barang']; ?>'" class="btn btn-primary">Rp <?php echo $data['harga']; ?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </tr>
    </div>
    <section id="cta" class="py-5" style="text-align: center;">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="center">
                    <h3 class="text-white">Ayo Perindah Rumah Anda</h3>
                </div>
            </div>
    </section>

    <!-- footer -->
    <footer style="width: 70%; margin: auto;">
        <div class=" footer-top" style="padding-top: 80px;
            padding-bottom: 30px;">
            <div class="container">
                <div class="row gy-5" style="display: flex; justify-content: center;">
                    <div class="col-md-4">
                        <h4 class="logo-text">Ditya Plafon Pvc</h4>
                        <p>Anda dapat menghubungi kami di <br> sosial media yang berada di bawah ini</p>
                        <div class="social-icons" style=" color: #898fa1;">
                            <a href="https://www.facebook.com/geprek.blimbing"><i class="bx bxl-facebook"></i></a>
                            <a href="#"><i class="bx bxl-twitter"></i></a>
                            <a href="#"><i class="bx bxl-instagram"></i></a>
                            <a href="#"><i class="bx bxl-github"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5 class="title-sm">Navigation</h5>
                        <div class="footer-links" style=" color: #898fa1;">
                            <a href="#home">home</a>
                            <a href="#services">kenapa</a>
                            <a href="#portofolio">galery</a>
                            <a href="#contact">kontak</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h5 class="title-sm">Contact</h5>
                        <div class="footer-links" style=" color: #898fa1;">
                            <p class="mb">Jl. Raya Jaken, Ngulakan, Sumberejo, Jaken, Kabupaten Pati, Jawa Tengah 59184, Indonesia</p>
                            <p class="mb">0812-3961-5946</p>
                            <p class="mb">Dityaplafon@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
</body>

</html>