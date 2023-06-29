<?php
include "connect.php";

// Check if the 'no' parameter is set in the URL
if (isset($_GET['no'])) {
    $no = $_GET['no'];
} else {
    die("Error. ID not selected!");
}

// Retrieve the product data from the database based on the provided 'no' parameter
$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE no='$no'");
$data = mysqli_fetch_array($query);

// Check if the 'Edit' button was clicked and the form was submitted
if (isset($_POST['Edit']) && $_POST['Edit'] == "Edit") {
    // Retrieve the updated product details from the submitted form
    $kd_barang = $_POST['kd_barang'];
    $nm_barang = $_POST['nm_barang'];
    $deskripsi = $_POST['deskripsi'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    
    // Retrieve the new photo file information from the submitted form
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    // Move the uploaded photo file to the 'foto' directory
    move_uploaded_file($file_tmp, 'foto/' . $foto);

    // Update the product details in the database, including the new photo
    $update = mysqli_query($koneksi, "UPDATE barang SET 
        kd_barang='$kd_barang', 
        nm_barang='$nm_barang', 
        deskripsi='$deskripsi', 
        jumlah='$jumlah',
        harga='$harga',
        foto='$foto'
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

// You mentioned "mengedit foto" at the end, but I'm not sure what specific information you need. If you have any further questions or clarifications, please let me know.
