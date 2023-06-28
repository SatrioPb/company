<?php
$host = "localhost";
$user_db = "root";
$pass_db = "";
$db = "company";
$koneksi = mysqli_connect($host, $user_db, $pass_db) or die(mysqli_error($koneksi));
mysqli_select_db($koneksi, $db) or die(mysqli_error($koneksi));
