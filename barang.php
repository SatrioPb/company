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
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="css/boxicons.min.css" />
    <link rel="stylesheet" href="css/barang.css" />
    <title>Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body id="home">
    <!-- Nvbar -->
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fab fa-github fa-2x mx-3 ps-1"></i>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand logo-text" href="#">DITYA PLAFON PVC</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Populer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rekomendasi</a>
                    </li>

                </ul>
                <ul class="navbar-nav d-flex flex-row ms-auto me-3">
                    <li class="nav-item me-3 me-lg-0 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-plus"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item me-3 me-lg-0 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22" alt="" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
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
        <h1 class="rekom" id="rekom">Plafon Populer</h1>
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
                            <p class="card-text"><?php echo $data['jumlah']; ?></p>
                            <a href="beli.php?kd_barang='<?= $data['kd_barang']; ?>'" class="btn btn-primary"><?php echo $data['harga']; ?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </tr>



        <h1 class="rekom" id="pop">Plafon Rekomendasi</h1>
        <hr style="height: 4px; border: none; background-color: black" />

        <div class="old">
            <div class="card" style="width: 22em;">
                <img src="img/plaf.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Plafon High Class</h5>
                    <p class="card-text">plafon berbahan terbaik untuk rumah kesayangan anda</p>
                    <a href="#" class="btn btn-primary">Rp 3000000</a>
                </div>
            </div>

            <div class="card" style="width: 22em;">
                <img src="img/plaf.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Plafon High Class</h5>
                    <p class="card-text">plafon berbahan terbaik untuk rumah kesayangan anda</p>
                    <a href="#" class="btn btn-primary">Rp 3000000</a>
                </div>
            </div>

            <div class="card" style="width: 22em;">
                <img src="img/plaf.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Plafon High Class</h5>
                    <p class="card-text">plafon berbahan terbaik untuk rumah kesayangan anda</p>
                    <a href="#" class="btn btn-primary">Rp 3000000</a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <p>Satrio Puser Bumi | 2023</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>