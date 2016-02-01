<?php
include "../admin/koneksi.php";
$password=$_POST['password'];
$kd_meja=$_POST['kd_meja'];
$login=sprintf("SELECT * FROM meja WHERE kd_meja='$kd_meja' AND password='$password'", mysql_real_escape_string($kd_meja), mysql_real_escape_string($password));
$cek_lagi=mysql_query($login);
$ketemu=mysql_num_rows($cek_lagi);
$r=mysql_fetch_array($cek_lagi);
// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();

  $_SESSION['kd_meja'] = $r['kd_meja'];
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
else{
?>
	<script type="text/javascript">
		alert("Password dan Username tidak Valid...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>
