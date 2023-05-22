<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$notelepon = $_POST['notelepon'];
$alamat = $_POST['alamat'];
$produkpesanan = $_POST['produkpesanan'];
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO customer values('','$nama','$notelepon','$alamat',
'$produkpesanan','$jumlah','$status')");
 
// mengalihkan halaman kembali ke index.php
header("location:datacustomer.php");
 
?>