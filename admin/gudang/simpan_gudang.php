<?php 
include "../koneksi.php";

$kd_barang = isset($_POST['kd_barang']) ? $_POST['kd_barang']:"";
$nama_barang = isset($_POST['nama_barang']) ? $_POST['nama_barang']:"";
$type = isset($_POST['type']) ? $_POST['type']:"";
$m_tanggal = isset($_POST['m_tanggal']) ? $_POST['m_tanggal']:"";
$m_unit = isset($_POST['m_unit']) ? $_POST['m_unit']:"";
$m_harga = isset($_POST['m_harga']) ? $_POST['m_harga']:"";
$k_tanggal = isset($_POST['k_tanggal']) ? $_POST['k_tanggal']:"";
$k_unit = isset($_POST['k_unit']) ? $_POST['k_unit']:"";
$k_harga = isset($_POST['k_harga']) ? $_POST['k_harga']:"";
$s_harga = isset($_POST['s_harga']) ? $_POST['s_harga']:"";
$no_faktur = isset($_POST['no_faktur']) ? $_POST['no_faktur']:"";
$keterangan = isset($_POST['keterangan']) ? $_POST['keterangan']:"";

$s_unit = $m_unit - $k_unit;

if ($kd_barang=="" || $nama_barang == "" || $m_unit < $k_unit) {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysql_query("INSERT INTO `kredit`.`gudang` 
						(`kd_barang`, 
						 `nama_barang`, 
						 `type`, 
						 `m_tanggal`, 
						 `m_unit`, 
						 `m_harga`, 
						 `k_tanggal`, 
						 `k_unit`, 
						 `k_harga`, 
						 `s_unit`, 
						 `s_harga`, 
						 `no_faktur`, 
						 `keterangan`) 
						 VALUES 
						 ('$kd_barang', 
						 '$nama_barang', 
						 '$type', 
						 '$m_tanggal', 
						 '$m_unit', 
						 '$m_harga', 
						 '$k_tanggal', 
						 '$k_unit', 
						 '$k_harga',
						 '$s_unit',
						 '$s_harga', 
						 '$no_faktur', 
						 '$keterangan');");
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../index.php?page=gudang';
 </script>

 <?php  
 }
 ?>