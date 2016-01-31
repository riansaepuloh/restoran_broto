<?php 
include "../koneksi.php";

$kd_pertanyaan = isset($_POST['kd_pertanyaan']) ? $_POST['kd_pertanyaan']:"";
$pertanyaan = isset($_POST['pertanyaan']) ? $_POST['pertanyaan']:"";


if ($kd_pertanyaan =="" || $pertanyaan == "") {
	echo "Data Gagal Tersimpan/n";
	echo $kd_pertanyaan;
	echo $pertanyaan;
} else {
	$query = mysql_query("INSERT INTO `kuisioner` (`kd_pertanyaan`, `pertanyaan`, `total_point`) VALUES ('$kd_pertanyaan', '$pertanyaan', '0');");
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../index.php?page=pengolahan_pertanyaan';
 </script>

 <?php  
 }
 ?>