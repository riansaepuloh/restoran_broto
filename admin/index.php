<?php 
    session_start();
    if(empty($_SESSION['akses']=="administrator")){
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else {
        include('koneksi.php');
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>SEPAKAT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/query.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/themes/flat-blue.css">
</head>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                                           
                        <ol class="breadcrumb navbar-breadcrumb">

                             <li > </li> 
                             <li class="active"><i class="fa fa-money icon"></i> SEPAKAT</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                        
                        
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo "$_SESSION[user]"; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="profile-img">
                                    <img src="../img/profile/picjumbo.com_HNCK4153_resize.jpg" class="profile-img">
                                </li>
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username"><?php echo "$_SESSION[user]"; ?></h4>
                                        <p></p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Profile</button>
                                            <a href="logout.php"> <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
         
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="index.php">
                                    <span class="icon fa fa-tachometer"></span><span class="title"> Dashboard</span>
                                </a>
                            </li>
                        
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-table">
                                    <span class="icon fa fa-users"></span><span class="title">ADMIN</span>
                                </a>

                                <!-- Dropdown level 1 -->
                                <div id="dropdown-table" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="index.php?page=karyawan"><span class="icon fa fa-list"></span> DATA KARYAWAN</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-form">
                                    <span class="icon fa fa-file-text-o"></span><span class="title"> TRANSAKSI</span>
                                </a>
                                
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-form" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="index.php?page=pengolahan_kredit"><span class="icon fa fa-list"></span> DAFTAR KONSUMEN</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="panel panel-default dropdown">
                                <a href="index.php?page=gudang">
                                    <span class="icon fa fa-file-text-o"></span><span class="title"> GUDANG</span>
                                </a>
                            </li>

                            <!-- Dropdown-->
                          
                            <!-- Dropdown-->
                          

                            <!-- Dropdown-->
                            
                               <!-- Dropdown-->
                        
                        </ul>
                    <!-- /.navbar-collapse -->
                </nav>
            
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <div class="row">
                        <?php 
                        $page = (isset($_GET['page']))? $_GET['page'] : "main";
                        switch ($page) {
                            case 'karyawan': include "karyawan/karyawan.php"; break;
                            case 'edit_karyawan': include "karyawan/edit_karyawan.php"; break;
                            case 'pengolahan_kredit': include "pengolahan_kredit/pengolahan_kredit.php"; break;
                            case 'edit_kredit': include "pengolahan_kredit/edit_kredit.php"; break;
                            case 'kredit_baru': include "pengolahan_kredit/kredit_baru.php"; break;
                            case 'detail_kredit': include "pengolahan_kredit/detail_kredit.php"; break;
                            case 'edit_info_konsumen': include "pengolahan_kredit/edit_info_konsumen.php"; break;
                            case 'print_faktur': include "pengolahan_kredit/print_faktur.php"; break;
                            case 'gudang': include "gudang/gudang.php"; break;
                            case 'edit_gudang': include "gudang/edit_gudang.php"; break;

                            case 'main':
                            default: include 'utama.php';
                        }
                        ?>  
                    </div>
                </div>
            </div>
        </div>
        </div>
        <footer class="app-footer">
            
        </footer>
        <div>
            <!-- Javascript Libs -->
            <script type="text/javascript" src="asset/js/jquery.min.js"></script>
            <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="asset/js/Chart.min.js"></script>
            <script type="text/javascript" src="asset/js/bootstrap-switch.min.js"></script>
            <script type="text/javascript" src="asset/js/jquery.matchHeight-min.js"></script>
            <script type="text/javascript" src="asset/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="asset/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="asset/js/select2.full.min.js"></script>
            <script type="text/javascript" src="asset/js/ace/ace.js"></script>
            <script type="text/javascript" src="asset/js/ace/mode-html.js"></script>
            <script type="text/javascript" src="asset/js/ace/theme-github.js"></script>
            <!-- Javascript -->
            <script type="text/javascript" src="js/app.js"></script>
            <script type="text/javascript" src="js/index.js"></script>
</body>

</html>
<?php
}
?>