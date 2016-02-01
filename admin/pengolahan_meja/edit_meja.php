<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
	$kd_meja = $_GET['id'];
} else {
	die ("Error, Tidak ada kode terpilih");
}
// tampilkan data
$query =  "SELECT * FROM meja where kd_meja = '$kd_meja';";

$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);
$kd_meja = $hasil['kd_meja'];
$kapasitas = $hasil['kapasitas'];
$status_meja = $hasil['status_meja'];
$password = $hasil['password'];


// proses edit
if(isset($_POST['edit'])){
$kd_meja1 = $_POST['kd_meja1'];
$kapasitas1 = $_POST['kapasitas1'];
$status_meja1 = $_POST['status_meja1'];
$password1 = $_POST['password1'];

// update data
$query = "UPDATE `meja` SET `kd_meja` = '$kd_meja1' , `kapasitas` = '$kapasitas1' , `status_meja` = '$status_meja1' , `password` = '$password1' WHERE `kd_meja` = '$kd_meja';";
$sql = mysql_query($query);
if ($sql) {
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=pengolahan_meja'>";
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
                        <label for="contact-name" class="col-lg-3 control-label">Kode Meja : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kode Meja" name="kd_meja1" value="<?php echo $kd_meja ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Kapasitas : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kapasitas" name="kapasitas1" value="<?php echo $kapasitas ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label">Status Meja : </label>
                        <div class="col-lg-6">
                            <select class="form-control" name="status_meja1">
                               <option>kosong</option>
                               <option>terisi</option>
                            </select>
                        </div>
                    </div>  

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                        <div class="col-lg-6">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password1" value="<?php echo $password ?>">
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
