<!DOCTYPE html>
<html>

<head>
    <title>Flat Admin V.2 - Free Bootstrap Admin Templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
   <!-- CSS Libs -->
    

<body class="flat-blue">

             <?php 
                include"koneksi.php";
                $hasil=mysql_query("SELECT `id_karyawan`,`nama_karyawan`,`alamat`,`jenis_kelamin`,`nama_bagian`, `username`,`password` FROM `karyawan` 
JOIN `bagian_kerja` ON `karyawan`.`kd_bagian` = `bagian_kerja`.`kd_bagian`;");
             ?>

            <!-- Main Content -->
                    <div class="page-title">
                        <span class="title">Restoran Pak Broto Azhari</span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel fresh-color panel-info">
                        <div class="panel-heading">

                                    <div class="panel-title">
                                    <div class="title">Karyawan</div>
                                    </div>
                                </div>
                                <div class="panel-body">

                                     <!-- Modal -->
                                        <div class="modal fade modal-success" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                        <?php
                                        $query=mysql_query("select max(id_karyawan) as id_karyawan from karyawan");
                                        $hasil_id=mysql_fetch_array($query);
                                        $id_baru=substr($hasil_id['id_karyawan'],1,4);
                                        $tambah=$id_baru+1;
                                        if($tambah<10) {
                                          $id="K00".$tambah;
                                        } else {
                                          $id="K0".$tambah;
                                        }
                                        ?>
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Tambah Karyawan</h4>
                                                    </div>
                                                    <form class="form-horizontal" action="simpan_karyawan.php" method="post">
                                                    <div class="modal-body">
                                                         <div class="form-group">
                                                            <label for="contact-name" class="col-lg-3 control-label"> Id Karyawan : </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" name="id_karyawan" value="<?php echo $id ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for = "contact-msg" class="col-lg-3 control-label">Nama Karyawan : </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Nama Karyawan" name="nama_karyawan">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for = "contact-msg" class="col-lg-3 control-label">Alamat : </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Alamat" name="alamat">
                                                            </div>
                                                        </div>

                                                       <div class="form-group">
                                                        <label for = "contact-msg" class="col-lg-3 control-label">Jenis Kelamin : </label>
                                                          <div class="radio3 radio-check radio-inline">
                                                            <input type="radio" id="radio4" name="jenis_kelamin" value="Laki-laki" checked="">
                                                            <label for="radio4">
                                                              Laki-laki
                                                            </label>
                                                          </div>
                                                          <div class="radio3 radio-check radio-success radio-inline">
                                                            <input type="radio" id="radio5" name="jenis_kelamin" value="Perempuan">
                                                            <label for="radio5">
                                                              Perempuan
                                                            </label>
                                                          </div>
                                                        </div>

                                                          <div class="form-group">
                                                            <label for="contact-name" class="col-lg-3 control-label"> Kode Bagian : </label>
                                                            <div class="col-lg-6">
                                                                <select class="form-control" name="kd_bagian">
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
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Username" name="username">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="contact-name" class="col-lg-3 control-label"> Password : </label>
                                                            <div class="col-lg-9">
                                                                <input type="password" class="form-control" id="contract-name" placeholder="Masukan Password" name="password">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                        <button type="submit" class="btn btn-success" ><span class="icon fa fa-user-plus"></span> Tambah</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                        <div class="clearfix margin-bottom-10">
                              <div class="btn-group">                               
                              <button a href="#daftar" data-toggle="modal" class="btn btn-success"><span class="icon fa fa-user-plus"></span>
                                 Tambah Data 
                                 </button>
                              </div>
                              
                        </div>
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jabatan</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        if($hasil != null){
                                            while($kolom=mysql_fetch_array($hasil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $kolom['id_karyawan']?></td>
                                                <td><?php echo $kolom['nama_karyawan']?></td>
                                                <td><?php echo $kolom['alamat']?></td>
                                                <td><?php echo $kolom['jenis_kelamin']?></td>
                                                <td><?php echo $kolom['nama_bagian']?></td>
                                                <td><?php echo $kolom['username']?></td>
                                                <td><?php echo $kolom['password']?></td>
                                                <td>

                                                    <a href="index.php?page=edit_karyawan&id=<?php echo $kolom['id_karyawan']; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></a>
                                                    <a href="hapus_karyawan.php?page=hapus_karyawan&id=<?php echo $kolom['id_karyawan'];?>"onclick="return confirm('apakah yakin menghapus data ?')" ><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
                                                </td>
                                            </tr>
                                            <?php 
                                            }
                                        }
                                        else {
                                            echo "data kosong";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            
</body>

</html>
