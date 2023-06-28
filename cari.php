<?php
include "connect.php";
if (isset($_GET['nm_barang'])) {
    $cari = $_GET['nm_barang'];
    $data = mysqli_query($koneksi, "select * from barang where nm_barang like '%" . $cari . "%'");
} else {
    $data = mysqli_query($koneksi, "select * from barang");
}
