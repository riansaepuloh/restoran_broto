<?php 
include "../koneksi.php";

$kd_meja = isset($_POST['kd_meja']) ? $_POST['kd_meja']:"";
$kapasitas = isset($_POST['kapasitas']) ? $_POST['kapasitas']:"";
$status_meja = isset($_POST['status_meja']) ? $_POST['status_meja']:"";
$password = isset($_POST['password']) ? $_POST['password']:"";


if ($kd_meja=="" || $kapasitas == "" || $status_meja == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysql_query("INSERT INTO meja (kd_meja,kapasitas,status_meja,password) values ('$kd_meja','$kapasitas','$status_meja','$password')");
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../index.php?page=pengolahan_meja';
 </script>

 <?php  
 }
 ?>