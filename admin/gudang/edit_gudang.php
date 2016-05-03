<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
	$kd_barang = $_GET['id'];
} else {
	die ("Error, Tidak ada id terpilih");
}
// tampilkan data
$query =  "SELECT *FROM `gudang` WHERE `kd_barang`='$kd_barang';";

$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);
$nama_barang = $hasil['nama_barang'];
$type = $hasil['type'];
$m_tanggal = $hasil['m_tanggal'];
$m_unit = $hasil['m_unit'];
$m_harga = $hasil['m_harga'];
$k_tanggal = $hasil['k_tanggal'];
$k_unit = $hasil['k_unit'];
$k_harga = $hasil['k_harga'];
$s_unit = $hasil['s_unit'];
$s_harga = $hasil['s_harga'];
$no_faktur = $hasil['no_faktur'];
$keterangan = $hasil['keterangan'];

// proses edit
if(isset($_POST['edit'])){
$kd_barang1 = $_POST['kd_barang1'];
$nama_barang1 = $_POST['nama_barang1'];
$type1 = $_POST['type1'];
$m_tanggal1 = $_POST['m_tanggal1'];
$m_unit1 = $_POST['m_unit1'];
$m_harga1 = $_POST['m_harga1'];
$k_tanggal1 = $_POST['k_tanggal1'];
$k_unit1 = $_POST['k_unit1'];
$k_harga1 = $_POST['k_harga1'];
$s_unit1 = $_POST['s_unit1'];
$s_harga1 = $_POST['s_harga1'];
$no_faktur1 = $_POST['no_faktur1'];
$keterangan1 = $_POST['keterangan1'];

// update data
$query = "UPDATE `kredit`.`gudang` SET `kd_barang` = '$kd_barang1' , 
                 `nama_barang` = '$nama_barang1' , 
                 `type` = '$type1' , 
                 `m_tanggal` = '$m_tanggal1' , 
                 `m_unit` = '$m_unit1' , 
                 `m_harga` = '$m_harga1' , 
                 `k_tanggal` = '$k_tanggal1' , 
                 `k_unit` = '$k_unit1' , 
                 `k_harga` = '$k_harga1' , 
                 `s_unit` = '$s_unit1' , 
                 `s_harga` = '$s_harga1' , 
                 `no_faktur` = '$no_faktur1' , 
                 `keterangan` = '$keterangan1' 
                 WHERE `kd_barang` = '$kd_barang';";
$sql = mysql_query($query);
if ($sql) {
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=gudang'>";
} else {
	echo "Data gagal di edit";
	}
}	
 ?>
 <br>
  <div class="row">
    <div class="col-lg-12">
        <div class="pricing-table yellow">
            <div class="pt-header">
            <div class="plan-pricing">
            <div class="pricing">GUDANG</div>
            </div>
            </div>
            <style type="text/css">
            th{
                text-align: center;
            }
            </style>
            <!-- /.panel-heading -->
            <form class="form-horizontal" action="" method="post" enctype="multypart/form-data" name="edit" id="edit">
            <div class="pt-body">
            <table border="1" width="100%" align="center">
                <thead>
                    <tr>
                        <th rowspan="2">KODE <br> BARANG</th>
                        <th rowspan="2">NAMA BARANG</th>
                        <th rowspan="2">TYPE</th>
                        <th colspan="3">MASUK</th>
                        <th colspan="3">KELUAR</th>
                        <th colspan="2">SISA</th>
                        <th rowspan="2">NO FAKTUR</th>
                        <th rowspan="2">KETERANGAN</th>
                    </tr>
                    <tr>
                        <th>TANGGAL</th>
                        <th>UNIT</th>
                        <th>HARGA</th>
                        <th>TANGGAL</th>
                        <th>UNIT</th>
                        <th>HARGA</th>
                        <th>UNIT</th>
                        <th>HARGA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="kd_barang1" value="<?php echo "$kd_barang"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="nama_barang1" value="<?php echo "$nama_barang"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="type1" value="<?php echo "$type"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="m_tanggal1" value="<?php echo "$m_tanggal"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="m_unit1" value="<?php echo "$m_unit"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="m_harga1" value="<?php echo "$m_harga"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="k_tanggal1" value="<?php echo "$k_tanggal"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="k_unit1" value="<?php echo "$k_unit"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="k_harga1" value="<?php echo "$k_harga"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="s_unit1" value="<?php echo "$s_unit"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="s_harga1" value="<?php echo "$s_harga"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="no_faktur1" value="<?php echo "$no_faktur"; ?>"></td>
                        <td><input type="text" class="form-control" id="contract-name" placeholder="Kode" name="keterangan1" value="<?php echo "$keterangan"; ?>"></td>
                    </tr>
                </tbody>
            </table> 
            
            </div>
            <div class="pt-footer">
                <div class="form-action no-margin-bottom">
                <input class="btn btn-primary" type="submit" name="edit" id="edit" value="Edit">
                <a href="index.php?page=gudang" class="btn btn-primary">Keluar</a>
                </div>
            </div>
            </form>
    </div>
</div>
