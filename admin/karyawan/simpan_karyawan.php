<?php 
include "../koneksi.php";

$nama = isset($_POST['nama']) ? $_POST['nama']:"";
$alamat = isset($_POST['alamat']) ? $_POST['alamat']:"";
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin']:"";
$jabatan = isset($_POST['jabatan']) ? $_POST['jabatan']:"";
$username = isset($_POST['username']) ? $_POST['username']:"";
$password = isset($_POST['password']) ? $_POST['password']:"";
$no_hp = isset($_POST['no_hp']) ? $_POST['no_hp']:"";
$hak_akses = isset($_POST['hak_akses']) ? $_POST['hak_akses']:"";

if ($nama=="" || $alamat == "" || $password == "" || $username == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysql_query("INSERT INTO `kredit`.`users` (`nama`, `alamat`, `jenis_kelamin`, `jabatan`, `username`, `password`, `hak_akses`, `no_hp`) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$jabatan', '$username', '$password', '$hak_akses', '$no_hp');");
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../index.php?page=karyawan';
 </script>

 <?php  
 }
 ?>