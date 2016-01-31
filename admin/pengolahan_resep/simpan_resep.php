<?php 
include "../koneksi.php";


$kd_resep = isset($_POST['kd_resep']) ? $_POST['kd_resep']:"";
$nama_resep = isset($_POST['nama_resep']) ? $_POST['nama_resep']:"";

$hasil=mysql_query("SELECT `kd_resep`,`kd_menu`,`nama_menu` FROM `resep` JOIN `menu` USING(`kd_menu`) WHERE `kd_resep`= '$kd_resep';");
$r=mysql_fetch_array($hasil);
$kd_menu = $r['kd_menu'];


if ($kd_resep=="" || $nama_resep == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysql_query("INSERT INTO `resep` (`kd_resep`, `kd_menu`) VALUES ('$kd_resep', ''); ");
 	?>

 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 alert('<?php echo $kd_menu ?>')
 document.location='../index.php?page=pengolahan_resep';
 </script>

 <?php  
 }
 ?>