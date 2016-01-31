<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
	$kd_bahan = $_GET['id'];
} else {
	die ("Error, Tidak ada kode terpilih");
}
// tampilkan data
$query =  "SELECT *FROM `bahan_baku` WHERE `kd_bahan_baku` = '$kd_bahan';";

$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);
$kd_bahan = $hasil['kd_bahan_baku'];
$nama_bahan = $hasil['nama'];
$satuan = $hasil['satuan'];
$jumlah = $hasil['jumlah'];
$tanggal_masuk = $hasil['tanggal_masuk'];
$tanggal_kadaluarsa = $hasil['tanggal_kadaluarsa'];


// proses edit
if(isset($_POST['edit'])){
$kd_bahan1 = $_POST['kd_bahan1'];
$nama_bahan1 = $_POST['nama_bahan1'];
$satuan1 = $_POST['satuan_bahan1'];
$jumlah1 = $_POST['jumlah_bahan1'];
$tanggal_masuk1 = $_POST['tanggal_masuk1'];
$tanggal_kadaluarsa1 = $_POST['tanggal_kadaluarsa1'];
// update data
$query = "UPDATE `bahan_baku` SET `kd_bahan_baku` = '$kd_bahan1' , `nama` = '$nama_bahan1' , `satuan` = '$satuan1' , `jumlah` = '$jumlah1' , `tanggal_masuk` = '$tanggal_masuk1' , `tanggal_kadaluarsa` = '$tanggal_kadaluarsa1' WHERE `kd_bahan_baku` = '$kd_bahan';";
$sql = mysql_query($query);
if ($sql) {
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=pengolahan_bahan'>";
} else {
	echo "Data gagal di edit";
	}
}	
 ?>
 <br>
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel fresh-color panel-info">
                        <div class="panel-heading">
                            Pengolahan Data Meja
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multypart/form-data" name="edit" id="edit">
              
                         <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label">Kode bahan : </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kode bahan" name="kd_bahan1" value="<?php echo $kd_bahan ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label">Nama bahan : </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Nama bahan" name="nama_bahan1"  value="<?php echo $nama_bahan ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label"> Satuan : </label>
                            <div class="col-lg-9">
                                <select class="form-control" name="satuan_bahan1"  value="<?php echo $satuan ?>">
                                    <option>gram</option>
                                    <option>kilogram</option>
                                    <option>buah</option>
                                    <option>pcs</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label">Jumlah : </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Jumlah bahan" name="jumlah_bahan1"  value="<?php echo $jumlah ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label">Tanggal Masuk : </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="contract-name" placeholder="tahun-bulan-hari" name="tanggal_masuk1"  value="<?php echo $tanggal_masuk ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label">Tanggal Kadaluarsa : </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="contract-name" placeholder="tahun-bulan-hari" name="tanggal_kadaluarsa1"  value="<?php echo $tanggal_kadaluarsa ?>">
                            </div>
                        </div>
            
                    
                    <div class="form-action no-margin-bottom" style="margin-left:40%">
                    <input class="btn btn-primary" type="submit" name="edit" id="edit" value="Edit">
                    <a href="index.php?page=pengolahan_meja" class="btn btn-primary">Keluar</a>
                    </div>
                </form>
            </div>
    </div>
</div>
