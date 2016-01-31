<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$kd_bahan_baku = $_GET['id'];
	$query = "SELECT * FROM `bahan_baku` WHERE `kd_bahan_baku` = '$kd_bahan_baku';";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
} else {
	die ("Error tidak ada kode yang dipilih");
}
	if (!empty($kd_bahan_baku) && $kd_bahan_baku != "") {
		$query = "DELETE FROM `bahan_baku` WHERE `kd_bahan_baku` = '$kd_bahan_baku';";
		$sql   = mysql_query($query);

		if($sql){
			header("location:../index.php?page=pengolahan_bahan");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>