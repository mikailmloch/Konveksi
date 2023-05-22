<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO admin values('','$nama','$email','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:dataadmin.php");
 
?>