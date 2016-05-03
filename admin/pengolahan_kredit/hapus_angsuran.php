<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$kd_angsuran = $_GET['id'];
	$query = "SELECT *FROM `transaksi` WHERE `kd_angsuran`='$kd_angsuran';";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$nf = $data['nf'];
} else {
	die ("Error tidak ada id yang dipilih");
}
	if (!empty($kd_angsuran) && $kd_angsuran != "") {
		$query = "DELETE FROM `kredit`.`transaksi` WHERE `kd_angsuran` = '$kd_angsuran';";
		$sql   = mysql_query($query);

		if($sql){
			header("location:../index.php?page=edit_info_konsumen&id=$nf");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>