<?php 
	$host = "mysql.idhostinger.com";
	$user = "u558357092_resto";
	$pass = "15Maret1992";
	$db   = "u558357092_resto";

	$koneksi=mysql_connect($host,$user,$pass) or die ("Tidak terkoneksi");
	$pilih_db=mysql_select_db($db) or die ("Database tidak tersedia");
 ?>

 
