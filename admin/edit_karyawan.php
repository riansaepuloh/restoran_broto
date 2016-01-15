<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
	$id_karyawan = $_GET['id'];
} else {
	die ("Error, Tidak ada id terpilih");
}
// tampilkan data
$query =  "SELECT `id_karyawan`,`nama_karyawan`,`alamat`,`jenis_kelamin`,`karyawan`.`kd_bagian`,`nama_bagian`, `username`,`password`       FROM `karyawan` JOIN `bagian_kerja` ON `karyawan`.`kd_bagian` = `bagian_kerja`.`kd_bagian` where id_karyawan = '$id_karyawan';";

$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);
$id_karyawan = $hasil['id_karyawan'];
$nama_karyawan = $hasil['nama_karyawan'];
$alamat = $hasil['alamat'];
$jenis_kelamin = $hasil['jenis_kelamin'];
$kd_bagian = $hasil['kd_bagian'];
$nama_bagian = $hasil['nama_bagian'];
$username = $hasil['username'];
$password = $hasil['password'];

// proses edit
if(isset($_POST['edit'])){
$id_karyawan1 = $_POST['id_karyawan1'];
$nama_karyawan1 = $_POST['nama_karyawan1'];
$alamat1 = $_POST['alamat1'];
$jenis_kelamin1 = $_POST['jenis_kelamin1'];
$kd_bagian1 = $_POST['kd_bagian1'];
$nama_bagian1 = $_POST['nama_bagian1'];
$username1 = $_POST['username1'];
$password1 = $_POST['password1'];

// update data
$query = "UPDATE `karyawan` SET `id_karyawan` = '$id_karyawan1' , `nama_karyawan` = '$nama_karyawan1' , `alamat` = '$alamat1' , `jenis_kelamin` = '$jenis_kelamin1' , `kd_bagian` = 'kd_bagian1' , `username` = 'username1' , `password` = 'password1' WHERE `id_karyawan` = 'id_karyawan1';";
$sql = mysql_query($query);
if ($sql) {
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=karyawan'>";
} else {
	echo "Data gagal di edit";
	}
}	
 ?>
 <br>
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Karyawan
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multypart/form-data" name="edit" id="edit">
              
                  
                    <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label"> Id Karyawan : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" name="id_karyawan1" value="<?php echo $id_karyawan ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Nama Karyawan : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Nama Karyawan" name="nama_karyawan1" value="<?php echo $nama_karyawan ?>">
                        </div>
                    </div>


                    <div class="form-group">
                    <label for = "contact-msg" class="col-lg-3 control-label">Alamat : </label>
                    <div class="col-lg-6">
                        <textarea class="form-control" rows="3" id="contract-name" name="alamat1"><?php echo $alamat ?></textarea>
                    </div>
                    </div>

                    <!-- jenis kelamin -->

                    <div class="form-group">
                    <label for = "contact-msg" class="col-lg-3 control-label">Jenis Kelamin : </label>
                      <div class="radio3 radio-check radio-inline">
                        <input type="radio" id="radio4" name="jenis_kelamin1" value="Laki-laki" checked="">
                        <label for="radio4">
                          Laki-laki
                        </label>
                      </div>
                      <div class="radio3 radio-check radio-success radio-inline">
                        <input type="radio" id="radio5" name="jenis_kelamin1" value="Perempuan">
                        <label for="radio5">
                          Perempuan
                        </label>
                      </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label"> Kode Bagian : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" name="$kd_bangian1" value="<?php echo $kd_bagian?>">
                        </div>
                    </div>
 -->
                    

                     <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label"> Kode Bagian : </label>
                        <div class="col-lg-6">
                            <select class="form-control" name="kd_bagian1" value="<?php echo $kd_bagian; ?>">
                                <?php 
                                $query1 = "SELECT `kd_bagian` FROM `bagian_kerja`;";
                                $sql1 = mysql_query($query1);
                                while ( $baris = mysql_fetch_array($sql1)) {
                                    echo '<option value="'.$baris['kd_bagian'].'">'.$baris['kd_bagian'].'</option>';
                                }
                                
                                 ?>
                            </select>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label"> Username : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Username" name="username1" value="<?php echo $username; ?>">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label"> Password : </label>
                        <div class="col-lg-6">
                            <input type="password" class="form-control" id="contract-name" name="username1" value="<?php echo $username; ?>">
                        </div>
                    </div>  
                    <div class="form-action no-margin-bottom" style="margin-left:40%">
                    <a href="index.php?page=karyawan" class="btn btn-primary">Keluar</a>
                    <input class="btn btn-primary" type="submit" name="edit" id="edit" value="Edit">
                    </div>
                </form>
                        </div>
    </div>
</div>
