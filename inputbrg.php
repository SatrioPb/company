<?php
include "connect.php";
// Include itu fungsinya untuk mengimpor fungsi/perintah/kode yang sudah kita buat pada suatu file

// Ini variabel untuk mengambil/menarik data dari form-parcel.php
$kd_barang = $_POST['kd_barang'];
$nm_barang = $_POST['nm_barang'];
$deskripsi = $_POST['deskripsi'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

//upload gambar
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$nama = $_POST['nama'];
move_uploaded_file($file_tmp, 'foto/' . $foto);
$query = "INSERT INTO barang SET foto = '$foto'";

//cek file gambar




// Buat masukkin/mengirim data ke database
$sql = "INSERT INTO barang (kd_barang, nm_barang,deskripsi, jumlah, harga, foto) VALUES ('$kd_barang', '$nm_barang','$deskripsi', '$jumlah','$harga','$foto')";
//Coba perhatikan kode di atas baik-baik, ini statement untuk memasukkan data ke dalam tabel dari matkul basis data


if (mysqli_query($koneksi, $sql)) {
    header("Location: dashboard.php"); // perintah untuk kembali ke index.php kalau data berhasil tersimpan ke database
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi); // perintah untuk menampilkan pesan error kalau data gagal tersimpan
}

// Perintah untuk menutup/keluar dari database
mysqli_close($con);
