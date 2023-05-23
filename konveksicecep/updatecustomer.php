<?php

global $koneksi;
include 'koneksi.php';

// menyimpan data kedalam variabel
$id_customer = $_POST['id_customer'];
$nama = $_POST['nama'];
$notelepon = $_POST['notelepon'];
$alamat = $_POST['alamat'];
$produkpesanan = $_POST['produkpesanan'];
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];

// query SQL untuk insert data
$query = "UPDATE customer SET id_customer = '$id_customer', nama = '$nama', notelepon = '$notelepon', 
`alamat` = '$alamat', `produkpesanan` = '$produkpesanan', `jumlah` = '$jumlah', `status` = '$status' WHERE id_customer = '$id_customer'";

mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:datacustomer.php");
?>
