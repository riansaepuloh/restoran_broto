<?php 
include "../koneksi.php";

$kd_bagian = isset($_POST['kd_bagian']) ? $_POST['kd_bagian']:"";
$nama_bagian = isset($_POST['nama_bagian']) ? $_POST['nama_bagian']:"";


if ($kd_bagian=="" || $nama_bagian == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysql_query("INSERT INTO bagian_kerja (kd_bagian,nama_bagian) values ('$kd_bagian','$nama_bagian')");
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../index.php?page=bagian_kerja';
 </script>

 <?php  
 }
 ?>