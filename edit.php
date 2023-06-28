<?php
include "connect.php";
if (isset($_GET['no'])) {
    $no = $_GET['no'];
} else {
    die("Error. ID not selected!");
}
$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE no='$no'");
$data = mysqli_fetch_array($query);

if (isset($_POST['Edit']) && $_POST['Edit'] == "Edit") {
    $kd_barang = $_POST['kd_barang'];
    $nm_barang = $_POST['nm_barang'];
    $deskripsi  = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $update = mysqli_query($koneksi, "UPDATE barang SET 
        kd_barang='$kd_barang', 
        nm_barang='$nm_barang', 
        deskripsi='$deskripsi', 
        jumlah='$jumlah',
        harga='$harga'
        WHERE no='$no'");
    
    if ($update) {
        echo '<script language="JavaScript">
            alert("Edit Barang Berhasil!");
            window.location.href = "hapus.php";
        </script>';
    } else {
        die("Error: " . mysqli_error($koneksi));
    }
}
