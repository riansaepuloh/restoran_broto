<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->

</head>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body">       
                                     

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                
                                <div class="card-body">
    
                                    <div class="row no-margin">


                                        <?php
                                            $iterasi = 0;
                                            include "../admin/koneksi.php";
                                            $q=mysql_query("SELECT * FROM menu order by kd_menu DESC limit 3");
                                            while($r=mysql_fetch_array($q)){                                            
                                            $nama=substr($r['nama_menu'],0,250);
                                            $deskripsi=substr($r['deskripsi'],0,50);
                                            $harga=$r['harga'];
                                            $gambar=$r['gambar'];
                                            $iterasi = $iterasi + 1;
                                            ?>
                                            
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="../img/menu/<?php echo $gambar ?>" class="img-responsive">
                                                <div class="caption">
                                                    <h3 id="thumbnail-label"><?php echo $nama ?><a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
                                                    <p><?php echo $deskripsi ?></p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                        }
                                         ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>