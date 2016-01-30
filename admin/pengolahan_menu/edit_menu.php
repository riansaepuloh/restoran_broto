<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
	$kd_menu = $_GET['id'];
} else {
	die ("Error, Tidak ada kode terpilih");
}
// tampilkan data
$query =  "SELECT * FROM menu where kd_menu = '$kd_menu';";

$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);
$kd_menu = $hasil['kd_menu'];
$nama_menu = $hasil['nama_menu'];
$jenis = $hasil['jenis'];
$deskripsi = $hasil['deskripsi'];
$foto = $hasil['gambar'];
$stok = $hasil['stok'];
$harga = $hasil['harga'];
$diskon = $hasil['diskon'];

// proses edit
if(isset($_POST['edit'])){
$kd_menu1 = $_POST['kd_menu1'];
$nama_menu1 = $_POST['nama_menu1'];
$jenis1 = $_POST['jenis1'];
$deskripsi1 = $_POST['deskripsi1'];
$foto1 = $_POST['gambar1'];
$stok1 = $_POST['stok1'];
$harga1 = $_POST['harga1'];
$diskon1 = $_POST['diskon1'];

$fileName = $_FILES['foto']['name'];
$namafolder="../../img/menu/";


// update data
$query = "UPDATE `db_restoran`.`menu` SET 
            `kd_menu` = '$kd_menu1' , 
            `nama_menu` = '$nama_menu1' , 
            `jenis` = '$jenis1' , 
            `deskripsi` = '$deskripsi1' , 
            `gambar` = '$foto1' , 
            `stok` = '$stok1' , 
            `harga` = '$harga1' , 
            `diskon` = '$diskon1' 
            WHERE `kd_menu` = '$kd_menu'; ";
$sql = mysql_query($query);
// Simpan di Folder Gambar

        if (!empty($_FILES["foto"]["tmp_name"]))
            {
                $jenis_gambar=$_FILES['foto']['type'];
                if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
                {           
                    $gambar = $namafolder . basename($_FILES['foto1']['name']);       
                    if (move_uploaded_file($_FILES['foto1']['tmp_name'], $gambar)) {
                    } else {
                       echo "Gambar gagal dikirim";
                    }
               } else {
                    echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
               }
            } else {
                echo "Anda belum memilih gambar";
            }
if ($sql) {

	echo "<meta http-equiv='refresh' content='0; url=index.php?page=pengolahan_menu'>";
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
                        <label for="contact-name" class="col-lg-3 control-label">Kode Menu : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kode Menu" name="kd_menu1" value="<?php echo $kd_menu ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Nama Menu : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Menu" name="nama_menu1" value="<?php echo $nama_menu ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label">Jenis : </label>
                        <div class="col-lg-6">
                            <select class="form-control" name="jenis1" value="<?php echo $jenis ?>">
                               <option>makanan</option>
                               <option>minuman</option>
                            </select>
                        </div>
                    </div>  
                    
                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Deskripsi : </label>
                        <div class="col-lg-9">
                            <textarea class="form-control" rows="3" name="deskripsi1" > <?php echo "$deskripsi"; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label" >Gambar : </label>
                        <div class="col-lg-9">
                            <input type="file" name="foto1" id="foto1" value="<?php echo $foto ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Stok : </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Stok" name="stok1" value="<?php echo $stok ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label" >Harga (Rp.) : </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Harga" name="harga1" value="<?php echo $harga ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label" >Diskon (%): </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Diskon" name="diskon1" value="<?php echo $diskon ?>">
                        </div>
                    </div>


                    <div class="form-action no-margin-bottom" style="margin-left:40%">
                    <input class="btn btn-primary" type="submit" name="edit" id="edit" value="Edit">
                    <a href="index.php?page=pengolahan_menu" class="btn btn-primary">Keluar</a>
                    </div>
                </form>
            </div>
    </div>
</div>
