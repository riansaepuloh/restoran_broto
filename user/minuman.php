<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$kd_meja=$_SESSION['kd_meja'];

 ?>

<!DOCTYPE html>
<html>
<head>
<title>Restoran Broto Azhari</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
		<div class="col-sm-4 world">
					No Meja <?php echo $kd_meja ?>
				</div>
				<div class="col-sm-4 logo">
					<a href="index.php"><img src="../img/icon/broto_restoran.png" alt=""></a>	
				</div>
		
			<div class="col-sm-4 header-left">		
					
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Kosongkan Pesanan</a></p>

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
		 <div class="col-sm-8 h_menu4">
				<ul class="memenu skyblue">
					  <li class=" grid"><a  href="index.php">All Menu</a></li>	
				      <li><a  href="makanan.php">Makanan</a>
				      	
					</li>
				    <li class="grid"><a  href="minuman.php">Minuman</a>
			    </li>
				
			  </ul> 
			</div>
				<div class="col-sm-2 search">		
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
		</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
					  <script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<input type="submit" value="">
							<input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
						</div>
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>

<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Menu Resto Pak Broto</h1>
			<?php
				 			$iterasi = 0;
                            include "../admin/koneksi.php";
                            $q=mysql_query("SELECT * FROM menu WHERE jenis='minuman' order by kd_menu DESC");
                            while($r=mysql_fetch_array($q)){                                            
                            $nama=substr($r['nama_menu'],0,250);
                            $deskripsi=substr($r['deskripsi'],0,50);
                            $harga=$r['harga'];
                            $iterasi = $iterasi + 1;
                            ?>
                            <?php 

                           	if(($iterasi % 4)==0 ){
                             ?>
			<div class="content-top1">
				<div class="col-md-3 col-md2">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.php?nama=<?php echo $nama ?>">
							<img class="img-responsive" src=<?php echo "../img/menu/$r[gambar]"; ?> alt="" />
						</a>
						<h3><a href="single.php?nama=<?php echo $nama ?>" name ="nama"><?php echo $nama ?></a></h3>
						<h6><?php echo $deskripsi ?></h6>
						<div class="price">
								<h5 class="item_price" name="harga">Rp.<?php echo $harga ?></h5>
								<a href="tambahorder.php?nama=<?php echo $nama?>" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>				 
			
			<?php 
			} else {
			
			?>
			<div class="col-md-3 col-md2">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.php?nama=<?php echo $nama; ?>">
							<img class="img-responsive" src=<?php echo "../img/menu/$r[gambar]"; ?> alt="" />
						</a>
						<h3><a href="single.php?nama=<?php echo $nama ?>" name="nama"><?php echo $nama ?></a></h3>
						<h6><?php echo $deskripsi ?></h6>
						<div class="price">
								<h5 class="item_price">Rp.<?php echo $harga ?></h5>
								<a href="tambahorder.php?nama=<?php echo $nama?>" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			 	
			<?php
					
					}	 
                 }
                 ?>
		</div>
	</div>
</div>
<!--//content-->
<!--footer-->
<div class="footer">
	

</div>

<!--//footer-->
</body>
</html>