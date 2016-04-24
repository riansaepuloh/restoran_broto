<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$username = $_GET['id'];
	$query = "SELECT * FROM users where username= '$username'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
} else {
	die ("Error tidak ada id yang dipilih");
}
	if (!empty($user) && $user != "") {
		$query = "DELETE FROM users where username = '$username'";
		$sql   = mysql_query($query);

		if($sql){
			header("location:../index.php?page=karyawan");
		} else {
			echo "data gagal terhapus";
		}
	}
 ?>