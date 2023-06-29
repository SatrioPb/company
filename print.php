<?php
include "connect.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="dashboard.php">
                <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>foto</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>deskripsi</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <?php

                            ?>
                            <?php
                            $query = ("SELECT * FROM barang");
                            $result = mysqli_query($koneksi, $query);
                            ?>
                            <?php while ($data = mysqli_fetch_assoc($result)) {
                            ?>

                        <tr>
                            <td><img src="foto/<?php echo $data['foto']; ?>" width="150" height="120"></td>
                            <td><?php echo $data['kd_barang']; ?></td>
                            <td><?php echo $data['nm_barang']; ?></td>
                            <td><?php echo $data['deskripsi']; ?></td>
                            <td><?php echo $data['jumlah']; ?></td>
                            <td> Rp <?php echo $data['harga']; ?></td>
                        </tr>


                    <?php } ?>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    window.print();
</script>

</html>