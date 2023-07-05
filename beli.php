<?php
include "connect.php";
if (isset($_GET['no'])) {
    $no = $_GET['no'];
    echo "Received ID: " . $no;
} else {
    $errorMessage = mysqli_error($koneksi);

    // Display the error message
    echo "Error: " . $errorMessage;
}

$query = "SELECT * FROM barang WHERE no =$no ";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
            <a class="navbar-brand logo-text" href="#">DITYA PLAFON PVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rekom">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pop">Populer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- banner -->


    <!-- Player  -->


    <div class="container-fluid">

        <div class="row">
            <div class="container">
                <h1 class="rekom" id="rekom" style="color: #898fa1;">Detail Plafon</h1>
                <hr style="height: 4px; border: none; background-color: black" />
                <tr>
                    <div class="old" style="justify-content: center;">
                        <div class="card">
                            <img src="foto/<?php echo $data['foto']; ?>" width="351" height="300">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data['nm_barang']; ?></h5>
                                <p class="card-text"><?php echo $data['deskripsi']; ?></p>
                                <p class="card-text">Stock : <?php echo $data['jumlah']; ?></p>
                                <p>Rp <?php echo $data['harga']; ?></p>
                                <a href="ongkir.php?no=<?= $data['no']; ?>" class="btn btn-brand cek-ongkir" style="background-color: #162e6e; color: #fff; z-index: 1;">Cek Ongkir</a>

                            </div>
                        </div>

                    </div>
                </tr>
                <br>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section id="cta" class="py-5" style="text-align: center;">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="center">
                    <h3 class="text-white"></h3>
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
    </footer <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>