<!DOCTYPE html>
<html>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
   <!-- CSS Libs -->
    

<body class="flat-blue">

             <?php 
                include"koneksi.php";
                $hasil=mysql_query("SELECT *FROM gudang;");
             ?>

            <!-- Main Content -->
                    <div class="page-title">
                        <span class="title">Kredit Sepakat</span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel fresh-color panel-info">
                        <div class="panel-heading">

                                    <div class="panel-title">
                                    <div class="title">GUDANG</div>
                                    </div>
                                </div>
                                <div class="panel-body">

                                     <!-- Modal -->
                                        <div class="modal fade modal-success" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">TAMBAH BARANG</h4>
                                                    </div>
                                                    <form class="form-horizontal" action="gudang/simpan_gudang.php" method="post">
                                                    <div class="modal-body">
                                                        <style type="text/css">
                                                            #warna{
                                                                background-color: #1ABC9C;
                                                                height: 30px;
                                                                color: #ffffff;
                                                                font-weight: bold;
                                                            }
                                                            table{
                                                                background-color: #F5FC87;
                                                            }
                                                        </style>
                                                        <table border="0">
                                                        <tr>
                                                            <td height="10px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="10px"></td>
                                                            <td><b>KODE BARANG</b></td>
                                                            <td>:</td>
                                                            <td><input type="text" class="form-control" id="contract-name" name="kd_barang" placeholder="Masukan Kode Barang"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="10px"></td>
                                                            <td><b>NAMA BARANG</b></td>
                                                            <td>:</td>
                                                            <td width="200px"><input type="text" class="form-control" id="contract-name" name="nama_barang" placeholder="Masukan Nama Barang"></td>
                                                            <td width="50px"></td>
                                                            <td><b>TYPE </b></td>
                                                            <td>:</td>
                                                            <td width="150px"><input type="text" class="form-control" id="contract-name" name="type" placeholder="Masukan Type"></td>
                                                            <td width="10px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10"></td>
                                                        </tr>
                                                        <tr>
                                                        <td id="warna" colspan="9" align="center">BARANG MASUK</td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10"></td>
                                                        </tr>
                                                        <tr>
                                                        <td width="10px"></td>
                                                        <td><b>TANGGAL</b></td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" id="contract-name" placeholder="Masukan Tanggal Masuk" name="m_tanggal"></td>
                                                        <td width="50px"></td>
                                                        <td><b>UNIT </b></td>
                                                        <td>:</td>
                                                        <td width="150px"><input type="text" class="form-control" id="contract-name" name="m_unit" placeholder="Masukan Unit"></td>
                                                        <td width="10px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10"></td>
                                                        </tr>
                                                        <tr>
                                                        <td width="10px"></td>
                                                        <td><b>HARGA</b></td>
                                                        <td>: Rp.</td>
                                                        <td><input type="text" class="form-control" id="contract-name" placeholder="Masukan harga" name="m_harga" align="right"></td>
                                                        <td width="10px"></td>
                                                        </tr>

                                                        <tr>
                                                            <td height="10"></td>
                                                        </tr>
                                                        <tr>
                                                            <td id="warna" colspan="9" align="center">BARANG KELUAR</td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10"></td>
                                                        </tr>
                                                        <tr>
                                                        <td width="10px"></td>
                                                        <td><b>TANGGAL</b></td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" id="contract-name" placeholder="Masukan Tanggal Keluar" name="k_tanggal"></td>
                                                        <td width="50px"></td>
                                                        <td><b>UNIT </b></td>
                                                        <td>:</td>
                                                        <td width="150px"><input type="text" class="form-control" id="contract-name" name="k_unit" placeholder="Masukan Unit"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10"></td>
                                                        </tr>
                                                        <tr>
                                                        <td width="10px"></td>
                                                        <td><b>HARGA</b></td>
                                                        <td>: Rp.</td>
                                                        <td><input type="text" class="form-control" id="contract-name" placeholder="Masukan harga" name="k_harga" align="right"></td>
                                                        </tr>

                                                        <tr>
                                                            <td height="10"></td>
                                                        </tr>
                                                        <tr>
                                                            <td id="warna" colspan="9" align="center">BARANG SISA</td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10"></td>
                                                        </tr>

                                                        <tr>
                                                        <td width="10px"></td>
                                                        <td><b>HARGA</b></td>
                                                        <td>: Rp.</td>
                                                        <td><input type="text" class="form-control" id="contract-name" placeholder="Masukan harga" name="s_harga" align="right"></td>
                                                        </tr>

                                                        <tr>
                                                            <td height="20px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td><b>NO. FAKTUR</b></td>
                                                            <td>:</td>
                                                            <td><input type="text" class="form-control" id="contract-name" placeholder="Masukan No Faktur" name="no_faktur" align="right"></td>
                                                        </tr>

                                                        <tr>
                                                            <td height="10px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td><b>KETERANGAN</b></td>
                                                            <td>:</td>
                                                            <td><input type="text" class="form-control" id="contract-name" placeholder="Masukan Keterangan" name="keterangan" align="right"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10px"></td>
                                                        </tr>
                                                        </table>


                                                        
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
                                    <table class="table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <style type="text/css">
                                        th{
                                            background-color: #22a7f0;
                                            text-align: center;
                                        }
                                        </style>
                                            <tr>
                                                <th rowspan="2">KODE <br> BARANG</th>
                                                <th rowspan="2">NAMA BARANG</th>
                                                <th rowspan="2">TYPE</th>
                                                <th colspan="3">MASUK</th>
                                                <th colspan="3">KELUAR</th>
                                                <th colspan="2">SISA</th>
                                                <th rowspan="2">NO FAKTUR</th>
                                                <th rowspan="2">KETERANGAN</th>
                                                <th rowspan="2">Aksi</th>
                                            </tr>
                                            <tr>
                                                <th>TANGGAL</th>
                                                <th>UNIT</th>
                                                <th>HARGA</th>
                                                <th>TANGGAL</th>
                                                <th>UNIT</th>
                                                <th>HARGA</th>
                                                <th>UNIT</th>
                                                <th>HARGA</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <?php 
                                        if($hasil != null){
                                            while($kolom=mysql_fetch_array($hasil)){
                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $kolom['kd_barang']?></td>
                                                <td><?php echo $kolom['nama_barang']?></td>
                                                <td><?php echo $kolom['type']?></td>
                                                <td align="center"><?php echo $kolom['m_tanggal']?></td>
                                                <td align="center"><?php echo $kolom['m_unit']?></td>
                                                <td align="right"><?php echo "Rp ".number_format($kolom['m_harga'],2,',','.')?></td>
                                                <td align="center"><?php echo $kolom['k_tanggal']?></td>
                                                <td align="center"><?php echo $kolom['k_unit']?></td>
                                                <td align="right"><?php echo "Rp ".number_format($kolom['k_harga'],2,',','.')?></td>
                                                <td align="center"><?php echo $kolom['s_unit']?></td>
                                                <td align="right"><?php echo "Rp ".number_format($kolom['s_harga'],2,',','.')?></td>
                                                <td align="center"><?php echo $kolom['no_faktur']?></td>
                                                <td><?php echo $kolom['keterangan']?></td>
                                                <td align="center">

                                                    <a href="index.php?page=edit_gudang&id=<?php echo $kolom['kd_barang']; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></a>
                                                    <a href="gudang/hapus_gudang.php?page=hapus_gudang&id=<?php echo $kolom['kd_barang'];?>"onclick="return confirm('apakah yakin menghapus data ?')" ><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
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
