<?php 
include "../koneksi.php";

$nf = isset($_POST['nf']) ? $_POST['nf']:"";
$saldo_piutang = isset($_POST['saldo_piutang']) ? $_POST['saldo_piutang']:"";
$angsuranbaru = isset($_POST['angsuranbaru']) ? $_POST['angsuranbaru']:"";
$tgl_transaksi = isset($_POST['tgl_transaksi']) ? $_POST['tgl_transaksi']:"";
$no_bukti_kas = isset($_POST['no_bukti_kas']) ? $_POST['no_bukti_kas']:"";
$no_bukti_kwitansi = isset($_POST['no_bukti_kwitansi']) ? $_POST['no_bukti_kwitansi']:"";
$in = isset($_POST['in']) ? $_POST['in']:"";
$out = isset($_POST['out']) ? $_POST['out']:"";
$nilai_angsuran = isset($_POST['nilai_angsuran']) ? $_POST['nilai_angsuran']:"";
$keterangan = isset($_POST['keterangan']) ? $_POST['keterangan']:"";

$saldo_piutang_baru = $saldo_piutang-$nilai_angsuran;
if ($nf=="" || $saldo_piutang == "" || $tgl_transaksi == "" || $nilai_angsuran == "") {
	echo "Data Gagal Tersimpan";
} else {
	$query = mysql_query("INSERT INTO `kredit`.`transaksi` (`nf`, `angsuranke`, `tgl_transaksi`, `no_bukti_kas`, `no_bukti_kwitansi`, `in`, `out`, `nilai_angsuran`, `saldo_piutang`, `keterangan`) VALUES ('$nf', '$angsuranbaru', '$tgl_transaksi', '$no_bukti_kas', '$no_bukti_kwitansi', '$in', '$out', '$nilai_angsuran', '$saldo_piutang_baru', '$keterangan'); ");
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 history.back();
  </script>
 <?php  
 }
 ?>