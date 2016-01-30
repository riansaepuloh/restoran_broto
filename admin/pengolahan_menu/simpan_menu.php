<?php 
include "../koneksi.php";

$kd_menu = isset($_POST['kd_menu']) ? $_POST['kd_menu']:"";
$nama_menu = isset($_POST['nama_menu']) ? $_POST['nama_menu']:"";
$jenis = isset($_POST['jenis']) ? $_POST['jenis']:"";
$deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi']:"";
$stok = isset($_POST['stok']) ? $_POST['stok']:"";
$harga = isset($_POST['harga']) ? $_POST['harga']:"";
$diskon = isset($_POST['diskon']) ? $_POST['diskon']:"";
$foto = isset($_POST['foto']) ? $_POST['foto']:""; 
$fileName = $_FILES['foto']['name'];

$namafolder="../../img/menu/";

if ($kd_menu =="" || $nama_menu == "" || $jenis == "" || $deskripsi == "" || $harga == "" || $stok == "") {
	echo "Data Gagal Tersimpan";
} else {
			
  		// Simpan di Folder Gambar

		if (!empty($_FILES["foto"]["tmp_name"]))
			{
			    $jenis_gambar=$_FILES['foto']['type'];
			    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
			    {           
			        $gambar = $namafolder . basename($_FILES['foto']['name']);       
			        if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {
			        	$query = mysql_query("INSERT INTO `db_restoran`.`menu` (`kd_menu`, `nama_menu`, `jenis`, `deskripsi`, `gambar`, `stok`, `harga`,`diskon`) 
								VALUES 
								('$kd_menu', '$nama_menu', '$jenis', '$deskripsi', '$fileName', '$stok', '$harga','$diskon');");
			              echo "<meta http-equiv='refresh' content='0; url=../index.php?page=pengolahan_menu'>";
			              ?>
							 <script language="JavaScript">
							 alert('Data Berhasil Disimpan');
							 document.location='../index.php?page=pengolahan_menu';
							 </script>
							  <?php  
			        } else {
			           echo "Gambar gagal dikirim";
			        }
			   } else {
			        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
			   }
			} else {
			    echo "Anda belum memilih gambar";
			}
 }
 ?>