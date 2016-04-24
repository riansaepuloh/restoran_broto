<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
	$username = $_GET['id'];
} else {
	die ("Error, Tidak ada id terpilih");
}
// tampilkan data
$query =  "SELECT *FROM `users` WHERE `username`='$username';";

$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);
$nama = $hasil['nama'];
$alamat = $hasil['alamat'];
$jenis_kelamin = $hasil['jenis_kelamin'];
$jabatan = $hasil['jabatan'];
$no_hp = $hasil['no_hp'];
$username = $hasil['username'];
$password = $hasil['password'];
$hak_akses = $hasil['hak_akses'];

// proses edit
if(isset($_POST['edit'])){
$nama1 = $_POST['nama1'];
$alamat1 = $_POST['alamat1'];
$jenis_kelamin1 = $_POST['jenis_kelamin1'];
$jabatan1 = $_POST['jabatan1'];
$no_hp1 = $_POST['no_hp1'];
$username1 = $_POST['username1'];
$password1 = $_POST['password1'];
$hak_akses1 = $_POST['hak_akses1'];
// update data
$query = "UPDATE `kredit`.`users` SET `nama` = '$nama1' , `alamat` = '$alamat1' , `jenis_kelamin` = '$jenis_kelamin1' , `jabatan` = '$jabatan1' , `username` = '$username1' , `password` = '$password1' , `no_hp` = '$no_hp1', `hak_akses` = '$hak_akses1' WHERE `username` = '$username' AND `password` = '$password';";
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
                    <div class="panel fresh-color panel-info">
                        <div class="panel-heading">
                            Karyawan
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multypart/form-data" name="edit" id="edit">
              
                  
                    <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label"> Nama : </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="contract-name" name="nama1" placeholder="Masukan Nama Petugas" value="<?php echo $nama; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for = "contact-msg" class="col-lg-3 control-label">Alamat : </label>
                            <div class="col-lg-9">
                            <textarea class="form-control" id="contract-name" name="alamat1" placeholder="Masukan Alamat Petugas"><?php echo $alamat; ?>
                            </textarea>
                            </div>
                        </div>

                        

                       <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Jenis Kelamin : </label>
                        <div class="col-lg-9">
                          <div class="radio3 radio-check radio-inline">
                            <input type="radio" id="radio4" name="jenis_kelamin1" value="Laki-Laki" checked="">
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
                        </div>

                        <div class="form-group">
                            <label for = "contact-msg" class="col-lg-3 control-label">Jabatan : </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Jabatan" name="jabatan1" value="<?php echo $jabatan; ?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label"> Username : </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Username" name="username1" value="<?php echo $username; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label"> Password : </label>
                            <div class="col-lg-9">
                                <input type="password" class="form-control" id="contract-name" placeholder="Masukan Password" name="password1" value="<?php echo $password; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label"> No. HP : </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan No HP" name="no_hp1" value="<?php echo $no_hp; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label"> Hak Akses : </label>
                            <div class="col-lg-9">
                                <select name="hak_akses1" autofocus="<?php echo $hak_akses; ?>">
                                    <option value="administrator">ADMINISTRATOR</option>
                                    <option value="user">USER</option>
                                </select>
                            </div>
                        </div>  
                    <div class="form-action no-margin-bottom" style="margin-left:40%">
                    <input class="btn btn-primary" type="submit" name="edit" id="edit" value="Edit">
                    <a href="index.php?page=karyawan" class="btn btn-primary">Keluar</a>
                    </div>
                </form>
                        </div>
    </div>
</div>
