<?php 
include "../koneksi.php";

$id_karyawan = isset($_POST['id_karyawan']) ? $_POST['id_karyawan']:"";
$nama_karyawan = isset($_POST['nama_karyawan']) ? $_POST['nama_karyawan']:"";
$alamat = isset($_POST['alamat']) ? $_POST['alamat']:"";
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin']:"";
$kd_bagian = isset($_POST['kd_bagian']) ? $_POST['kd_bagian']:"";
$bagian_kerja = isset($_POST['bagian_kerja']) ? $_POST['bagian_kerja']:"";
$username = isset($_POST['username']) ? $_POST['username']:"";
$password = isset($_POST['password']) ? $_POST['password']:"";

if ($id_karyawan=="" || $nama_karyawan == "" || $password == "" || $username == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysql_query("INSERT INTO karyawan (id_karyawan,nama_karyawan,alamat,jenis_kelamin,kd_bagian,username,password) values ('$id_karyawan','$nama_karyawan','$alamat','$jenis_kelamin','$kd_bagian','$username','$password')");
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../index.php?page=karyawan';
 </script>

 <?php  
 }
 ?>