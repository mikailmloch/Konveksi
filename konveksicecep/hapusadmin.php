<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_admin = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM admin WHERE id_admin='$id_admin'");
 
header("location:dataadmin.php");
 
?>