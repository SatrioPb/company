<?php
include "connect.php";
if (isset($_GET['kd_barang'])) {
    $kd_barang = $_GET['kd_barang'];
    echo "Received ID: " . $kd_barang;
} else {
    $errorMessage = mysqli_error($koneksi);

    // Display the error message
    echo "Error: " . $errorMessage;
}

$query = "SELECT * FROM barang WHERE kd_barang=$kd_barang";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($result)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <script src="asset/jquery/jquery-3.3.1.min.js"></script>
    <script src="asset/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="asset/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
    <script src="asset/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>
    <script src="asset/js/app.js"></script>
    <link rel="stylesheet" href="css/barang.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body style="background-color: #7c96ab" id="home">
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
                <h1 class="rekom" id="rekom">Pembelian Plafon</h1>
                <hr style="height: 4px; border: none; background-color: black" />
                <tr>
                    <div class="old">
                        <div class="card" style="width: 22em;">
                            <img src="img/plaf.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data['nm_barang']; ?></h5>
                                <p class="card-text"><?php echo $data['jumlah']; ?></p>
                                <a href="#" class="btn btn-primary"><?php echo $data['harga']; ?></a>
                            </div>
                        </div>

                    </div>
                </tr>
            </div>
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" id="ongkir" method="POST">
                            <div class="form-group">
                                <label class="control-label col-sm-3">Kota Asal:</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="kota_asal" name="kota_asal" required="">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Kota Tujuan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="kota_tujuan" name="kota_tujuan" required="">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Kurir</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="kurir" name="kurir" required="">
                                        <option value="jne">JNE</option>
                                        <option value="tiki">TIKI</option>
                                        <option value="pos">POS INDONESIA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Berat (Kg)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="berat" name="berat" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    <button type="submit" class="btn btn-default">Cek</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7" id="response_ongkir">
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