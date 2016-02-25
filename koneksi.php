<?php 
	$host = "localhost";
	$user = "rian";
	$pass = "15Maret1992";
	$db   = "restoran_azhari";

	$koneksi=mysql_connect($host,$user,$pass) or die ("Tidak terkoneksi");
	$pilih_db=mysql_select_db($db) or die ("Database tidak tersedia");
 ?>

 
