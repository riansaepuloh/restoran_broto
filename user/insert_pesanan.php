<?php
session_start();
$kd_meja=$_SESSION['kd_meja'];
include "../admin/koneksi.php";
// ==================

    $qry=mysql_query("select max(no_order) as no_order from detail_order");
    $hasil_id=mysql_fetch_array($qry);
    $id_baru=substr($hasil_id['no_order'],2,4);
    $tambah=$id_baru+1;
    if($tambah<10) {
      $no_order="PS00".$tambah;
    } else {
      $no_order="PS0".$tambah;
    }
                                     
// ====================

if (isset($_GET['nama']) and $kd_meja != "") {
	
	$nama = $_GET['nama'];
	$query = "SELECT * FROM keranjang where kd_meja = '$kd_meja'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$kd_menu = $data['kd_menu'];
	$nama = $data['nama_menu'];
	$gambar = $data['gambar'];
	$harga = $data['harga'];
	$qty = 1;
	

} else {
	if ($kd_meja!="") {
		# code...
	}
	die ("Error tidak ada kode yang dipilih");
}
	if (!empty($kd_menu) && $kd_menu != "") {
		$query = "IINSERT INTO `detail_order` (`no_order`, `kd_menu`, `kd_meja`, `qty`, `diskon`, `total_harga`) VALUES ('PS001', 'M001', '002', '1', '0', '95000');";
		$sql   = mysql_query($query);
		echo "<meta http-equiv='refresh' content='0; url=single.php?nama=$nama'>";
		?>
		<script language="JavaScript">
		alert('Berhasil Menambah Menu Ke keranjang');
		</script>
		<?php 
	}
 ?>