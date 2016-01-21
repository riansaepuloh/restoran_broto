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
                $hasil=mysql_query("SELECT * FROM `menu`;");
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
                                    <div class="title">Menu</div>
                                    </div>
                                </div>
                                <div class="panel-body">

                                     <!-- Modal -->
                                        <div class="modal fade modal-success" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                        <?php
                                        $query=mysql_query("select max(kd_menu) as kd_menu from menu");
                                        $hasil_id=mysql_fetch_array($query);
                                        $id_baru=substr($hasil_id['kd_menu'],1,4);
                                        $tambah=$id_baru+1;
                                        if($tambah<10) {
                                          $id="M00".$tambah;
                                        } else {
                                          $id="M0".$tambah;
                                        }
                                        ?>

                                        <!-- tambah bagian kerja -->
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Tambah Menu</h4>
                                                    </div>
                                                    <form class="form-horizontal" action="simpan_menu.php" method="post" enctype="multipart/form-data" name="FormUpload" id="FormUpload">
                                                    <div class="modal-body">
                                                         <div class="form-group">
                                                            <label for="contact-name" class="col-lg-3 control-label">Kode Menu : </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kode Menu" name="kd_menu" value="<?php echo $id ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for = "contact-msg" class="col-lg-3 control-label">Nama Menu : </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Nama Menu" name="nama_menu">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="contact-name" class="col-lg-3 control-label">Jenis : </label>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" name="jenis">
                                                                    <option>makanan</option>
                                                                    <option>minuman</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for = "contact-msg" class="col-lg-3 control-label">Deskripsi : </label>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="contact-name" class="col-lg-3 control-label">Gambar : </label>
                                                            <div class="col-lg-9">
                                                                <input type="file" name="foto" id="foto">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for = "contact-msg" class="col-lg-3 control-label">Stok : </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Stok" name="stok">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for = "contact-msg" class="col-lg-3 control-label">Harga (Rp.) : </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Harga" name="harga">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for = "contact-msg" class="col-lg-3 control-label">Diskon (%): </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Diskon" name="diskon">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="button" id="button" class="btn btn-success" onClick="window.close();"><span class="icon fa fa-user-plus"></span> Tambah</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                        <div class="clearfix margin-bottom-10">
                              <div class="btn-group">                               
                              <button a href="#daftar" data-toggle="modal" class="btn btn-success"><span class="icon fa fa-user-plus"></span>
                              Tambah Menu
                              <!-- <a href="index.php?page=tambah_menu"><span class="icon fa fa-user-plus"></span>Tambah Menu</a> -->
                              </div>
                              
                        </div>
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Kode Menu</th>
                                                <th>Nama Menu</th>
                                                <th>Jenis</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar</th>
                                                <th>Stok</th>
                                                <th>Harga</th>
                                                <th>Diskon</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        if($hasil != null){
                                            while($kolom=mysql_fetch_array($hasil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $kolom['kd_menu']?></td>
                                                <td><?php echo $kolom['nama_menu']?></td>
                                                <td><?php echo $kolom['jenis']?></td>
                                                <td><?php echo $kolom['deskripsi']?></td>
                                                <td>
                                                    <?php 
                                                    $foto = $kolom['gambar'];
                                                if (empty($foto)) 
                                                    echo "<strong><img src='../img/no_Image.jpg' width='50' height='50'> <br></strong>";
                                                    else
                                                echo"<img src='../img/menu/$foto' width=75 heigth=25/ >"
                                                ?>
                                                </td>
                                                <td><?php echo $kolom['stok']?></td>
                                                <td><?php echo $kolom['harga']?></td>
                                                <td><?php echo $kolom['diskon']?> %</td>
                                                <td>
                                                    <a href="index.php?page=edit_menu&id=<?php echo $kolom['kd_menu']; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button></a>
                                                    <a href="hapus_menu.php?page=hapus_menu&id=<?php echo $kolom['kd_menu'];?>"onclick="return confirm('apakah yakin menghapus data ?')" ><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
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
