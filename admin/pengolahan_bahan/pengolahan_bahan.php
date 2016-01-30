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
                include "koneksi.php";
                $hasil=mysql_query("SELECT * FROM `bahan_baku`;");
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
                                    <div class="title">Bahan Baku</div>
                                    </div>
                                </div>
                                <div class="panel-body">

                                     <!-- Modal -->
                                        <div class="modal fade modal-success" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                        <?php
                                        $query=mysql_query("select max(kd_bahan_baku) as kd_bahan_baku from bahan_baku");
                                        $hasil_id=mysql_fetch_array($query);
                                        $id_baru=substr($hasil_id['kd_bahan_baku'],1,4);
                                        $tambah=$id_baru+1;
                                        if($tambah<10) {
                                          $id="00".$tambah;
                                        } else {
                                          $id="0".$tambah;
                                        }
                                        ?>

                                        <!-- tambah bagian kerja -->
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Tambah Bahan</h4>
                                                    </div>
                                                    <form class="form-horizontal" action="pengolahan_bahan/simpan_bahan.php" method="post">
                                                    <div class="modal-body">
                                                         <div class="form-group">
                                                            <label for="contact-name" class="col-lg-3 control-label">Kode bahan : </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kode bahan" name="kd_bahan" value="<?php echo $id ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for = "contact-msg" class="col-lg-3 control-label">Kapasitas : </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kapasitas" name="kapasitas">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="contact-name" class="col-lg-3 control-label"> Status : </label>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" name="status_bahan">
                                                                    <option>kosong</option>
                                                                    <option>terisi</option>
                                                                </select>
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
                                 Tambah bahan
                                 </button>
                              </div>
                              
                        </div>
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Kode bahan</th>
                                                <th>Nama</th>
                                                <th>Satuan</th>
                                                <th>Jumlah</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Kadaluarsa</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        if($hasil != null){
                                            while($kolom=mysql_fetch_array($hasil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $kolom['kd_bahan_baku']?></td>
                                                <td><?php echo $kolom['nama']?></td>
                                                <td><?php echo $kolom['satuan']?></td>
                                                <td><?php echo $kolom['jumlah']?></td>
                                                <td><?php echo $kolom['tanggal_masuk']?></td>
                                                <td><?php echo $kolom['tanggal_kadaluarsa']?></td>
                                                <td>
                                                    <a href="index.php?page=edit_bahan&id=<?php echo $kolom['kd_bahan']; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button></a>
                                                    <a href="pengolahan_bahan/hapus_bahan.php?page=hapus_bahan&id=<?php echo $kolom['kd_bahan'];?>"onclick="return confirm('apakah yakin menghapus data ?')" ><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
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
