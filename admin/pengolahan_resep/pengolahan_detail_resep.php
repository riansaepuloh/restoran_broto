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
                $hasil=mysql_query("SELECT `kd_resep`,`nama_menu` FROM `resep` JOIN `menu` USING(`kd_menu`);");
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
                                    <div class="title">Meja</div>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Kode Resep</th>
                                                <th>Nama Resep</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        if($hasil != null){
                                            while($kolom=mysql_fetch_array($hasil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $kolom['kd_resep']?></td>
                                                <td><?php echo $kolom['nama_menu']?></td>
                                                <td>
                                                    <a href="index.php?page=edit_resep&id=<?php echo $kolom['kd_meja']; ?>"><button type="button" class="btn btn-success">Lihat</button></a>
                                                    <a href="hapus_meja.php?page=hapus_meja&id=<?php echo $kolom['kd_meja'];?>"onclick="return confirm('apakah yakin menghapus data ?')" ><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
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
