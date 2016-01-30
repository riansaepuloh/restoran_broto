<?php 
include "../admin/koneksi.php";
if (isset($_GET['nama'])) {
	$nama_menu = $_GET['nama'];
	$query = "SELECT * FROM keranjang where nama = '$nama_menu'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$kd_menu = $data['kd_menu'];
} else {
	die ("Error tidak ada menu yang dipilih");
}
	if (!empty($kd_menu) && $kd_menu != "") {
		$query = "DELETE FROM keranjang where kd_menu = '$kd_menu'";
		$sql   = mysql_query($query);

		if($sql){
			header("location:checkout.php");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>