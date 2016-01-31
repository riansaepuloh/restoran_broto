<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$kd_pertanyaan = $_GET['id'];
	$query = "SELECT * FROM kuisioner where kd_pertanyaan = '$kd_pertanyaan'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
} else {
	die ("Error tidak ada kode yang dipilih");
}
	if (!empty($kd_pertanyaan) && $kd_pertanyaan != "") {
		$query = "DELETE FROM kuisioner where kd_pertanyaan = '$kd_pertanyaan'";
		$sql   = mysql_query($query);

		if($sql){
			header("location:../index.php?page=pengolahan_pertanyaan");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>