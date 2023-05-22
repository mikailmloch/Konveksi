<?php

global $koneksi;
include 'koneksi.php';

// menyimpan data kedalam variabel
$id_admin = $_POST ['id_admin'];
$nama = $_POST ['nama'];
$email = $_POST ['email'];
$password = $_POST ['password'];

// query SQL untuk insert data
$query = "UPDATE data_admin SET id_admin = '$id_admin', nama = '$nama', email = '$email', 
`password` = '$password' WHERE id_admin = '$id_admin'";

mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:admin.php");
?>