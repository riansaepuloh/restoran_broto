<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$kd_bagian = $_GET['id'];
	$query = "SELECT * FROM bagian_kerja where kd_bagian= '$kd_bagian'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
} else {
	die ("Error tidak ada kode yang dipilih");
}
	if (!empty($kd_bagian) && $kd_bagian != "") {
		$query = "DELETE FROM bagian_kerja where kd_bagian = '$kd_bagian'";
		$sql   = mysql_query($query);

		if($sql){
			header("location:../index.php?page=bagian_kerja");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>