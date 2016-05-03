<?php 
include "../koneksi.php";

$nama = isset($_POST['nama']) ? $_POST['nama']:"";
$tgl_lahir = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir']:"";
$spa = isset($_POST['spa']) ? $_POST['spa']:"";
$jalan = isset($_POST['jalan']) ? $_POST['jalan']:"";
$dp = isset($_POST['dp']) ? $_POST['dp']:"";
$kelurahan = isset($_POST['kelurahan']) ? $_POST['kelurahan']:"";
$rt = isset($_POST['rt']) ? $_POST['rt']:"";
$rw = isset($_POST['rw']) ? $_POST['rw']:"";
$tlp = isset($_POST['tlp']) ? $_POST['tlp']:"";
$kota = isset($_POST['kota']) ? $_POST['kota']:"";
$kantor = isset($_POST['kantor']) ? $_POST['kantor']:"";
$alamatkantor = isset($_POST['alamatkantor']) ? $_POST['alamatkantor']:"";
$jabatan = isset($_POST['jabatan']) ? $_POST['jabatan']:"";
$telp_kantor = isset($_POST['telp_kantor']) ? $_POST['telp_kantor']:"";
$agama = isset($_POST['agama']) ? $_POST['agama']:"";
$wilayah = isset($_POST['wilayah']) ? $_POST['wilayah']:"";

$nf = isset($_POST['nf']) ? $_POST['nf']:"";
$id_konsumen = "ks".$nf;

if ($nama=="" || $tgl_lahir == "" || $jalan == "") {
	echo "Data Gagal Tersimpan karena nama tgl_lahir jalan";
} else {
	$query1 = mysql_query("INSERT INTO `kredit`.`konsumen` (`id_konsumen`, `nama`, `tgl_lahir`, `jalan`, `dp`, `kelurahan`, `rt`, `rw`, `kota`, `tlp`, `kantor`, `alamatkantor`, `jabatan`, `telp_kantor`, `agama`, `wilayah`, `spa`) VALUES ('$id_konsumen', '$nama', '$tgl_lahir', '$jalan', '$dp', '$kelurahan', '$rt', '$rw', '$kota', '$tlp', '$kantor', '$alamatkantor', '$jabatan', '$telp_kantor', '$agama', '$wilayah', '$spa');");
}

$tahun = isset($_POST['tahun']) ? $_POST['tahun']:"";
$jt = isset($_POST['jt']) ? $_POST['jt']:"";
$no_faktur = isset($_POST['no_faktur']) ? $_POST['no_faktur']:"";
$sumber = isset($_POST['sumber']) ? $_POST['sumber']:"";
$tgl_faktur = isset($_POST['tgl_faktur']) ? $_POST['tgl_faktur']:"";
$tpb = isset($_POST['tpb']) ? $_POST['tpb']:"";
$tglangsur1 = isset($_POST['tglangsur1']) ? $_POST['tglangsur1']:"";
$tglangsur2 = isset($_POST['tglangsur2']) ? $_POST['tglangsur2']:"";
$sales = isset($_POST['sales']) ? $_POST['sales']:"";
$supervisor = isset($_POST['supervisor']) ? $_POST['supervisor']:"";
$penjamin = isset($_POST['penjamin']) ? $_POST['penjamin']:"";
$surveyor = isset($_POST['surveyor']) ? $_POST['surveyor']:"";
$banyakangsuran1 = isset($_POST['banyakangsuran1']) ? $_POST['banyakangsuran1']:"";
$nominalangsuran1 = isset($_POST['nominalangsuran1']) ? $_POST['nominalangsuran1']:"";
$saldo1 = isset($_POST['saldo1']) ? $_POST['saldo1']:"";
$banyakangsuran2 = isset($_POST['banyakangsuran2']) ? $_POST['banyakangsuran2']:"";
$nominalangsuran2 = isset($_POST['nominalangsuran2']) ? $_POST['nominalangsuran2']:"";
$saldo2 = isset($_POST['saldo2']) ? $_POST['saldo2']:"";
$total = isset($_POST['total']) ? $_POST['total']:"";

if ($nf=="") {
	echo "Data Gagal Tersimpan nf tahun angsuran";
} else {
	$query2 = mysql_query("INSERT INTO `kredit`.`faktur` (`nf`, `no_faktur`, `tahun`, `jt`, `tgl_faktur`, `surveyor`, `sales`, `supervisor`, `penjamin`, `sumber`, `tpb`, `tglangsur1`, `tglangsur2`, `id_konsumen`, `banyakangsuran1`, `nominalangsuran1`, `saldo1`, `banyakangsuran2`, `nominalangsuran2`, `saldo2`, `total`) VALUES ('$nf', '$no_faktur', '$tahun', '$jt', '$tgl_faktur', '$surveyor', '$sales', '$supervisor', '$penjamin', '$sumber', '$tpb', '$tglangsur1', '$tglangsur2', '$id_konsumen', '$banyakangsuran1', '$nominalangsuran1', '$saldo1', '$banyakangsuran2', '$nominalangsuran2', '$saldo2', '$total');");
}

$namabarang1 = isset($_POST['namabarang1']) ? $_POST['namabarang1']:"";
$merkbarang1 = isset($_POST['merkbarang1']) ? $_POST['merkbarang1']:"";
$typebarang1 = isset($_POST['typebarang1']) ? $_POST['typebarang1']:"";
$unitbarang1 = isset($_POST['unitbarang1']) ? $_POST['unitbarang1']:"";
$noseribarang1 = isset($_POST['noseribarang1']) ? $_POST['noseribarang1']:"";

$namabarang2 = isset($_POST['namabarang2']) ? $_POST['namabarang2']:"";
$merkbarang2 = isset($_POST['merkbarang2']) ? $_POST['merkbarang2']:"";
$typebarang2 = isset($_POST['typebarang2']) ? $_POST['typebarang2']:"";
$unitbarang2 = isset($_POST['unitbarang2']) ? $_POST['unitbarang2']:"";
$noseribarang2 = isset($_POST['noseribarang2']) ? $_POST['noseribarang2']:"";

$namabarang3 = isset($_POST['namabarang3']) ? $_POST['namabarang3']:"";
$merkbarang3 = isset($_POST['merkbarang3']) ? $_POST['merkbarang3']:"";
$typebarang3 = isset($_POST['typebarang3']) ? $_POST['typebarang3']:"";
$unitbarang3 = isset($_POST['unitbarang3']) ? $_POST['unitbarang3']:"";
$noseribarang3 = isset($_POST['noseribarang3']) ? $_POST['noseribarang3']:"";

if ($namabarang1=="" || $merkbarang1 == "") {
	echo "Data Gagal Tersimpan nama barang sama merk";
} else {
	$query3 = mysql_query("INSERT INTO `kredit`.`barang` (`nf`, `namabarang1`, `merkbarang1`, `typebarang1`, `unitbarang1`, `noseribarang1`, `namabarang2`, `merkbarang2`, `typebarang2`, `unitbarang2`, `noseribarang2`, `namabarang3`, `merkbarang3`, `typebarang3`, `unitbarang3`, `noseribarang3`) 
		VALUES ('$nf', '$namabarang1', '$merkbarang1', '$typebarang1', '$unitbarang1', '$noseribarang1', '$namabarang2', '$merkbarang2', '$typebarang2', '$unitbarang2', '$noseribarang2', '$namabarang3', '$merkbarang3', '$typebarang3', '$unitbarang3', '$noseribarang3');");
 	?>
 <script language="JavaScript">
 alert('Data Berhasil Disimpan');
 document.location='../indexuser.php?page=pengolahan_kredit';
 </script>

 <?php  
 }
 ?>

