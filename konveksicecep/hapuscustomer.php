<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_customer = $_GET['id'];
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM customer WHERE id_customer='$id_customer'");
 
header("location:datacustomer.php");
 
?>