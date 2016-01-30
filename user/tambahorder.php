<?php 
include "../admin/koneksi.php";
if (isset($_GET['nama'])) {
	$nama = $_GET['nama'];
	$query = "SELECT * FROM menu where nama_menu = '$nama'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$kd_menu = $data['kd_menu'];
	$nama = $data['nama_menu'];
	$gambar = $data['gambar'];
	$harga = $data['harga'];
	$qty = 1;

} else {
	die ("Error tidak ada kode yang dipilih");
}
	if (!empty($kd_menu) && $kd_menu != "") {
		$query = "INSERT INTO `keranjang` (`kd_menu`,`gambar`, `nama`, `harga`, `qty`, `sub_total`) VALUES ('$kd_menu','$gambar', '$nama', '$harga', '1', '$harga');";
		$sql   = mysql_query($query);
		echo "<meta http-equiv='refresh' content='0; url=single.php?nama=$nama'>";
		?>
		<script language="JavaScript">
		alert('Berhasil Menambah Menu Ke keranjang');
		</script>
		<?php 
	}
 ?>