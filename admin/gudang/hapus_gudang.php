<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$kd_barang = $_GET['id'];
	$query = "SELECT * FROM gudang where kd_barang= '$kd_barang'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
} else {
	die ("Error tidak ada id yang dipilih");
}
	if (!empty($kd_barang) && $kd_barang != "") {
		$query = "DELETE FROM gudang where kd_barang = '$kd_barang'";
		$sql   = mysql_query($query);

		if($sql){
			header("location:../index.php?page=gudang");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>