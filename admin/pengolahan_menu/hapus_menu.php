<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$kd_menu = $_GET['id'];
	$query = "SELECT * FROM menu where kd_menu = '$kd_menu'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$gambar = $data['gambar'];
} else {
	die ("Error tidak ada kode yang dipilih");
}
	if (!empty($kd_menu) && $kd_menu != "") {
		$query = "DELETE FROM menu where kd_menu = '$kd_menu'";
		$sql   = mysql_query($query);
		error_reporting(0);
		unlink("../../img/menu/".$gambar);

		if($sql){
			header("location:../index.php?page=pengolahan_menu");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>