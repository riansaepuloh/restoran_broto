<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$kd_meja = $_GET['id'];
	$query = "SELECT * FROM meja where kd_meja = '$kd_meja'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
} else {
	die ("Error tidak ada kode yang dipilih");
}
	if (!empty($kd_meja) && $kd_meja != "") {
		$query = "DELETE FROM meja where kd_meja = '$kd_meja'";
		$sql   = mysql_query($query);

		if($sql){
			header("location:../index.php?page=pengolahan_meja");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>