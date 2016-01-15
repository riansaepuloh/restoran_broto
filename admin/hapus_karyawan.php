<?php 
include "koneksi.php";
if (isset($_GET['id'])) {
	$id_karyawan = $_GET['id'];
	$query = "SELECT * FROM karyawan where id_karyawan= '$id_karyawan'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
} else {
	die ("Error tidak ada id yang dipilih");
}
	if (!empty($id_karyawan) && $id_karyawan != "") {
		$query = "DELETE FROM karyawan where id_karyawan = '$id_karyawan'";
		$sql   = mysql_query($query);

		if($sql){
			header("location:index.php?page=karyawan");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>