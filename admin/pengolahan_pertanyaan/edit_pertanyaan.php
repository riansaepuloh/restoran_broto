<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
	$kd_pertanyaan = $_GET['id'];
} else {
	die ("Error, Tidak ada kode terpilih");
}
// tampilkan data
$query =  "SELECT * FROM kuisioner where kd_pertanyaan = '$kd_pertanyaan';";

$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);
$kd_pertanyaan = $hasil['kd_pertanyaan'];
$pertanyaan = $hasil['pertanyaan'];
$total_point = $hasil['total_point'];


// proses edit
if(isset($_POST['edit'])){

$kd_pertanyaan1 = $_POST['kd_pertanyaan1'];
$pertanyaan1 = $_POST['pertanyaan1'];
$total_point1 = $_POST['total_point1'];
// update data
$query = "UPDATE `kuisioner` SET `kd_pertanyaan` = '$kd_pertanyaan' , `pertanyaan` = '$pertanyaan1' , `total_point` = '$total_point1' WHERE `kd_pertanyaan` = '$kd_pertanyaan'; ";
$sql = mysql_query($query);
if ($sql) {
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=pengolahan_pertanyaan'>";
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
                            Pengolahan Data Pertanyaan
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multypart/form-data" name="edit" id="edit">
              
                  
                    <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label">Kode Pertanyaan : </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kode Meja" name="kd_pertanyaan1" value="<?php echo $kd_pertanyaan ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Pertanyaan : </label>
                        <div class="col-lg-9">
                            <textarea class="form-control" rows="3" name="pertanyaan1"><?php echo "$pertanyaan" ?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label">Total Point : </label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan point" name="total_point1" value="<?php echo $total_point ?>">
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
