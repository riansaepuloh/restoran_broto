<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db	  = "restoran_broto";

	$koneksi=mysql_connect($host,$user,$pass) or die ("Tidak terkoneksi");
	$pilih_db=mysql_select_db($db) or die ("Database tidak tersedia");
 ?>

 