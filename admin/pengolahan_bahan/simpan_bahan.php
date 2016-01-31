<?php 
include "../koneksi.php";

$kd_bahan = isset($_POST['kd_bahan']) ? $_POST['kd_bahan']:"";
$nama_bahan = isset($_POST['nama_bahan']) ? $_POST['nama_bahan']:"";
$satuan_bahan = isset($_POST['satuan_bahan']) ? $_POST['satuan_bahan']:"";
$jumlah_bahan = isset($_POST['jumlah_bahan']) ? $_POST['jumlah_bahan']:"";
$tanggal_masuk = isset($_POST['tanggal_masuk']) ? $_POST['tanggal_masuk']:"";
$tanggal_kadaluarsa = isset($_POST['tanggal_kadaluarsa']) ? $_POST['tanggal_kadaluarsa']:"";

if ($kd_bahan=="" || $nama_bahan == "" || $jumlah_bahan == "" || $tanggal_masuk == "" || $tanggal_kadaluarsa == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysql_query("INSERT INTO `bahan_baku` (`kd_bahan_baku`, `nama`, `satuan`, `jumlah`, `tanggal_masuk`, `tanggal_kadaluarsa`) 
							VALUES 
							('$kd_bahan', '$nama_bahan', '$satuan_bahan', '$jumlah_bahan', '$tanggal_masuk', '$tanggal_kadaluarsa');");
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../index.php?page=pengolahan_bahan';
 </script>

 <?php  
 }
 ?>