<!DOCTYPE html>
<html>

<head>
    <title>Pengolahan Pertanyaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
   <!-- CSS Libs -->
    

<body class="flat-blue">

             <?php 
                include "koneksi.php";
                $hasil=mysql_query("SELECT * FROM keranjang ORDER BY kd_meja;");
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
                                    <div class="title">Pesanan</div>
                                    </div>
                                </div>
                                <div class="panel-body">

                                     <!-- Modal -->
                                        <div class="modal fade modal-success" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                        <?php
                                        $query=mysql_query("SELECT MAX(no_order) AS no_order FROM order");
                                        $hasil_id=mysql_fetch_array($query);
                                        $id_baru=substr($hasil_id['no_order'],2,6);
                                        $tambah=$id_baru+1;
                                        if($tambah<1000) {
                                          $id="O0000".$tambah;
                                        } else if($tambah<100) {
                                          $id="O000".$tambah;
                                        }else if($tambah<10){
                                          $id="O00".$tambah;
                                        } else {
                                            $id="O0".$tambah;
                                        }
                                        ?>

                                        <!-- tambah bagian kerja -->
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Tambah Pertanyaan</h4>
                                                    </div>
                                                    <form class="form-horizontal" action="pengolahan_pertanyaan/simpan_pertanyaan.php" method="post">
                                                    <div class="modal-body">
                                                         <div class="form-group">
                                                            <label for="contact-name" class="col-lg-3 control-label">Kode Pertanyaan : </label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kode Meja" name="kd_pertanyaan" value="<?php echo $id ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for = "contact-msg" class="col-lg-3 control-label">Pertanyaan : </label>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control" rows="3" name="pertanyaan"></textarea>
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


                       
                                     <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Kode Meja</th>
                                                <th>Nama Menu</th>
                                                <th>Harga</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        if($hasil != null){
                                            while($kolom=mysql_fetch_array($hasil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $kolom['kd_meja']?></td>
                                                <td><?php echo $kolom['nama']?></td>
                                                <td><?php echo $kolom['harga']?></td>
                                                <td><?php echo $kolom['qty']?></td>
                                                <td><?php echo $kolom['sub_total']?></td>
                                                
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
