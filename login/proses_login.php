<?php
include "../admin/koneksi.php";
$pass=$_POST['password'];
$user=$_POST['username'];
$akses=$_POST['hak_akses'];
$login=sprintf("SELECT * FROM karyawan WHERE username='$user' AND password='$pass'");
$cek_lagi=mysql_query($login);
$ketemu=mysql_num_rows($cek_lagi);
$r=mysql_fetch_array($cek_lagi);
// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['user'] = $r['username'];
  $_SESSION['pass'] = $r['password'];
  $_SESSION['akses'] = $r ['hak_akses'];


 if ($_SESSION['akses']==1) {
  header('location:../admin/index.php');
 }
}
else{
?>
	<script type="text/javascript">
	alert("Password dan Username tidak Valid");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>