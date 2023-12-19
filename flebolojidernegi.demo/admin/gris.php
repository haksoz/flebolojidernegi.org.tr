<?php

error_reporting(0);

@ob_start();
@session_start();
include("include/baglan.php");
include("include/fonksiyonlar.php");

oturumkontrolana();

header('Cache-Control: no-cache, no-store, must-revalidate');
header('Expires: Sun, 01 Jul 1997 00:00:00 GMT');
?>


<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kapital Online - Admin Paneli</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.css" rel="stylesheet" />
	<link href="assets/css/themes/default.css" rel="stylesheet" id="style_color" />
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<link href="#" rel="stylesheet" id="style_metro" />
	
	<link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" type="text/css"  />
	<link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
	
</head>

<body class="fixed-top">
	
	<?php include("header.php") ;?>
	
	<div id="container" class="row-fluid">
		
      
		<?php include("menu.php") ;?>
		
		</div>
	
        
		<div id="body">
		
			<div class="container-fluid">
			
				<div class="row-fluid">
					<div class="span12">
						  	
					
						<h3 class="page-title">
							<?=ucwords($_SESSION['yonetici_ad_soyad'])?> <small>Hoşgeldin | Site Yönetim Paneli</small>
						</h3>
					
					</div>
				</div>
				
                
                
			
				<div id="page" class="dashboard">
					
                 
                     <div class="widget" style="width:40%; float:left;">
                        <div class="widget-title">
                           <h4><i class="icon-reorder"></i> Kısayollar</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
                        </div>
                        <div class="widget-body">
						 <div class="row-fluid">
                           
						
                              <a href="site_ayar.php" class="icon-btn span3">
                                 <i class="icon-cogs"></i>
                                 <div>Site Ayarları</div>
                              </a>
						</div>
						  <div class="row-fluid">
                           
                              
							   <a href="hakkinda.php" class="icon-btn span3">
                                 <i class="icon-bullhorn"></i>
                                 <div>Hakkında</div>
                              </a>
							  <a href="hesap_listele.php" class="icon-btn span3">
                                 <i class="icon-bullhorn"></i>$bag ->
                                 <div>Hesap Numaraları</div>
								 <?php
								 $bilgi= $bag -> query("SELECT * FROM odemeler where durum='1'");
								 $mevcut = mysqli_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-warning"><?=$mevcut?></span>
                              </a>
                           </div>
						
                           <div class="row-fluid">
                              <a href="yonetici_listesi.php" class="icon-btn span3">
                                 <i class="icon-user-md"></i>
                                 <div>Yöneticiler</div>
                                 <?php
								 $bilgi= $bag -> query("SELECT * FROM yonetici where sess='0'");
								 $mevcut = mysqli_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-warning"><?=$mevcut?></span>
                              </a>
							 
                            
							  
							    <a href="mgorus_listele.php" class="icon-btn span3">
                                 <i class="icon-group"></i>
                                 <div>Müşteri Görüşleri</div>
                                 <?php
								 $bilgi= $bag -> query("SELECT * FROM mgorus");
								 $mevcut = mysqli_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-success"><?=$mevcut?></span>
                              </a>
                            
							<a href="mgorus_listele.php" class="icon-btn span3">
                                 <i class="icon-edit"></i>
                                 <div>İletişim Mesajları</div>
                                 <?php
								 $bilgi= $bag -> query("SELECT * FROM iletisim");
								 $mevcut = mysqli_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-success"><?=$mevcut?></span>
                              </a>
                              
                           </div>
						   
						   
                           
                           <div class="row-fluid">
						   
                           <a href="akses_listele.php" class="icon-btn span3">
                                 <i class="icon-sitemap"></i>
                                 <div>Aksesuarlar</div>
                                 <?php
								 $bilgi= $bag -> query("SELECT * FROM aksesuar");
								 $mevcut = mysqli_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-info"><?=$mevcut?></span>
                              </a>
							  
                            <a href="urun_listele.php" class="icon-btn span3">
                                 <i class="icon-bookmark-empty"></i>
                                 <div>Ürünler</div>
                                 <?php
								 $bilgi= $bag -> query("SELECT * FROM urun");
								 $mevcut = mysqli_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-info"><?=$mevcut?></span>
                              </a>
                            
                           <a href="kulal_listesi.php" class="icon-btn span3">
                                 <i class="icon-tags"></i>
                                 <div>Kullanım Alanları</div>
                                 <?php
								 $bilgi= $bag -> query("SELECT * FROM urunler");
								 $mevcut = mysqli_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-info"><?=$mevcut?></span>
                              </a>
							  
                            <a href="foto_listele.php" class="icon-btn span3">
                                 <i class="icon-camera"></i>
                                 <div>Galeri</div>
                                 <?php
								 $bilgi= $bag -> query("SELECT * FROM fotograf_galeri");
								 $mevcut = mysqli_num_rows($bilgi);
								 ?>
                                 <span class="badge badge-info"><?=$mevcut?></span>
                              </a>
                              
                           </div>
						   
						   
						   
						   
                              
                           </div>
                        </div>
                     </div>
                   
                     <div class="widget" style="width:50%; margin-left:20px; float:left;">
                     
                     
                     	<div class="widget-title">
                           <h4><i class="icon-bar-chart"></i> Yeni Müşteri Yorumu</h4>
                           <span class="tools"><a style="color:#016FA7;margin-right:20px;"href="mgorus_listele.php"> Tümü</a>
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
                        </div>
                        
                        
                        <div class="widget-body" >
                        
                        <table class="table table-hover">
                              
                             
                              
                              <tr>
									<th><strong>Adı</strong></th>
                                    <th><strong>Soyadı</strong></th>
									<th><strong>Tarihi</strong></th>
                                 </tr>
                              <tr>
							   <?php
								 $sira= $bag -> query("SELECT * FROM mgorus  where durum='1' order by id desc limit 1");
								 while($sirayaz=mysqli_fetch_array($sira))
								 {
								 ?>
									<td><a href="mgorus_oku.php?islem=Yayınla&id=<?=$sirayaz['id']?>">
									<?=$sirayaz['isim']?></a></td>
									<td><?=$sirayaz['yetkili']?></td>
									<td><?=$sirayaz['tarih']?></td>
									<?php
								 }
								 ?>
						  </tr>
                             
                           </table>
                        
                        </div>
                     
                  
                     </div>
                     
                     
                     
                     
                     <div class="widget" style="width:50%; margin-left:20px; float:left;">
                     
                     
                     	<div class="widget-title">
                           <h4><i class="icon-bar-chart"></i> Yeni Mesaj</h4>
                           <span class="tools"><a style="color:#016FA7;margin-right:20px;"href="iletisim.php"> Tümü</a>
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
                        </div>
                        
                        
                        <div class="widget-body">
                        
                        <table class="table table-hover">
                              
                              <tbody>
                              
                              <tr>
                                    <td><strong>Ad Soyad</strong></td>
									<td><strong>Konu</strong></td>
									<td><strong>Tarihi</strong></td>
                                 </tr>
                                <tr>
							   <?php
								 $sira= $bag -> query("SELECT * FROM iletisim where durum='1' order by id desc limit 1");
								 while($sirayaz=mysqli_fetch_array($sira))
								 {
								 ?>
									<td><a href="oku.php?islem=oku&id=<?=$sirayaz['id']?>"><?=$sirayaz['ad']?></a></td>
									<td><?=$sirayaz['konu']?></td>
									<td><?=$sirayaz['tarih']?></td>
									<?php
								 }
								 ?>
						  </tr>
                             
                              </tbody>
                           </table>
                        
                        </div>
                     
                  
                     </div>
					 
					 <div class="widget" style="width:50%; margin-left:20px; float:left;">
                     
                     
                     	<div class="widget-title">
                           <h4><i class="icon-bar-chart"></i> Ziyaretçiler</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
                        </div>
                        
                        
                        <div class="widget-body" >
                        
                        <table class="table table-hover">
                              
                             
                              
                              <tr>
									<th><strong>Aktif</strong></th>
                                    <th><strong>Bugün</strong></th>
									<th><strong>Toplam</strong></th>
                                 </tr>
                              <tr>
							  <?php
								 $bilgi= $bag -> query("SELECT * FROM online");
								 $aktif = mysqli_num_rows($bilgi);
								 ?>
							  
									<td><?=$aktif?></td>
								<?php
								 $bilgii= $bag -> query("SELECT * FROM ziyaret where tarih='$tarihh'");
								 $bugun = mysqli_num_rows($bilgii);
								 ?>	
									<td><?=$bugun?></td>
									
									
								<?php
								 $bilgiii= $bag -> query("SELECT * FROM ziyaret ");
								 $toplam = mysqli_num_rows($bilgiii);
								 ?>	
									<td><?=$toplam?></td>
								
						  </tr>
                             
                           </table>
                        
                        </div>
                     
                  
                     </div>
                        
				</div>
				
                
                
			</div>
		
            	
		</div>
		
        
	</div>
	
    
    
    

	<?php include("footer.php") ;?>
	
    
  
	<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>	
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->	
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>		
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.js"></script>
	<script src="assets/plugins/respond.js"></script>	
	<![endif]-->	
	<script src="assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>	
	<!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js -->	
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.js" type="text/javascript"></script>	
	<script src="assets/plugins/jquery.cookie.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>	
	
	<script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>	
	<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>	
	<script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.peity.min.js" type="text/javascript"></script>	
	<script src="assets/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>	
	<script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>		
	<script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
	<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
	
	<script src="assets/scripts/app.js" type="text/javascript"></script>
	<script src="assets/scripts/index.js" type="text/javascript"></script>			
	
	<script>
		jQuery(document).ready(function() {		
			App.init(); // initlayout and core plugins
			Index.init();
			Index.initJQVMAP(); // init index page's custom scripts
			Index.initKnowElements(); // init circle stats(knob elements)
			Index.initPeityElements(); // init pierty elements
			Index.initCalendar(); // init index page's custom scripts
			Index.initCharts(); // init index page's custom scripts
			Index.initChat();
			Index.initDashboardDaterange();
			Index.initIntro();
		});
	</script>
	
</body>

</html>
