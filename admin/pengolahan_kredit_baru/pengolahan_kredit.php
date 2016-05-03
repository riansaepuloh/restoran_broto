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
                $hasil=mysql_query("SELECT `nf`,`no_faktur`,`nama`,`jt`,`tgl_faktur` FROM `faktur` JOIN `konsumen` USING(`id_konsumen`);");
             ?>

            <!-- Main Content -->
                  
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel fresh-color panel-info">
                        <div class="panel-heading">

                                    <div class="panel-title">
                                    <div class="title">DAFTAR KONSUMEN</div>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    



                        <div class="clearfix margin-bottom-10">
                              <div class="btn-group">
                              <a href="indexuser.php?page=kredit_baru">                               
                              <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"> </span> KEREDIT BARU</button></a>
                              </div>
                              
                        </div>
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>NO FAKTUR</th>
                                                <th>NAMA</th>
                                                <th>JATUH TEMPO</th>
                                                <th>TANGGAL FAKTUR</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        if($hasil != null){
                                            while($kolom=mysql_fetch_array($hasil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $kolom['nf']?></td>
                                                <td><?php echo $kolom['nama']?></td>
                                                <td><?php echo $kolom['jt']?></td>
                                                <td><?php echo $kolom['tgl_faktur']?></td>
                                                <td align="center">
                                                    <a href="indexuser.php?page=detail_kredit&id=<?php echo $kolom['nf']; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> LIHAT DATA KONSIMEN / PENYETORAN </button></a>
                                                    
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
