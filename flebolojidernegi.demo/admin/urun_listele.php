<?php

error_reporting(0);

@ob_start();
@session_start();
include("include/baglan.php");
include("include/fonksiyonlar.php");
oturumkontrolana();


if($_GET['islem']=="sil")
{
	$id = $_GET['id'];
	
	$resim_bul=mysql_fetch_array(mysql_query("select * from urun where id='$id'"));
	$resim_sil=unlink("../images/anaurun/".$resim_bul['resim']);
	
	$referanslar_sil_sorgu = mysql_query("delete from urun where id='$id'");
	
	$bilgi = '	 <div class="alert alert-success">
										Başarı ile Silinmiştir !
				  </div>' ;
	
}

?>


<!DOCTYPE html>
<!--  
Template Name: Conquer Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
Version: 1.4
Author: KeenThemes
Website: http://www.keenthemes.com
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838
-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="tr"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Topal Bilişim - Admin Paneli</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.css" rel="stylesheet" />
	<link href="assets/css/themes/default.css" rel="stylesheet" id="style_color" />
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<link href="#" rel="stylesheet" id="style_metro" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->	
	<link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" type="text/css"  />
	<link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL STYLES -->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<?php include("header.php") ;?>
	<!-- END HEADER -->
    
    
    
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		
        
        <!-- BEGIN SIDEBAR -->
		<?php include("menu.php") ;?>
		<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
        
        
        
		<!-- BEGIN PAGE -->
		<div id="body">
			
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						  	
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							<?=ucwords($_SESSION['yonetici_ad_soyad'])?> <small>Hoşgeldin | Site Yönetim Paneli</small>
						</h3>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
                
                
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">
					
                  <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN EXAMPLE TABLE widget-->
                  <div class="widget box light-grey">
                     <div class="widget-title">
                        <h4><i class="icon-tags"></i> Ürünler Listesi</h4>
                        
                     </div>
                     <div class="widget-body">
                        <div class="clearfix margin-bottom-10">
                           <div class="btn-group">
                              <div class="btn btn-success">
                              <a href="urun_ekle.php" style="color:#FFF;">Ürün Ekle</a> <i class="icon-plus"></i>
                              </div>
                           </div>
                           
                        </div>
                        
                        <?=$bilgi?>
                        
                        <table class="table table-striped table-bordered table-hover" id="sample_1" style="font-size:12px;">
                           <thead>
                              <tr>
				<th/>
				<th > Sıra <i class="icon-angle-down" style="float:right;"></th>
                                 <th > Ürün Adı <i class="icon-angle-down" style="float:right;"></th>
				 <th >Başlık<i class="icon-angle-down" style="float:right;"></th>
                                 <th class="hidden-480">Başlık Resmi <i class="icon-angle-down" style="float:right;"></th>
                                 <th class="hidden-480">İşlem</th>

                              </tr>
                           </thead>
                           <tbody>
                           
                           <?php
						   $say = 0 ;
						    $referans_cek=mysql_query("select * from urun order by sira asc");
							while($referans_dizi=mysql_fetch_array($referans_cek))
							{ $say ++
						   ?>
                           
                              <tr class="odd gradeX">
				<td><?=$say?></td>
                                 <td><?=$referans_dizi['sira']?></td>
				<td><?=$referans_dizi['adi']?></td>
				<td><?=$referans_dizi['baslik']?></td>
                                 <td><?php
								 if($referans_dizi['resim']=="no-image")
								 {
								 echo "Resim yok";
								 }
								 else
								 {
								 ?>
                                 <a target="_new" href="../images/anaurun/<?=$referans_dizi['resim']?>" target="_blank">Resmi Gör</a>
                                 <?php
								 }
								 ?></td>
                                 
                                 
                                 
                                 
                                 <td >
				<a href="?islem=sil&id=<?=$referans_dizi['id']?>" title="Sil" onclick="return confirm('Silmek istediğinize emin misiniz ?')">
                                 <i class="icon-remove sercan_sil_icon"></i>
                                 </a>
                                 
                                 <a href="urun_ekle.php?islem=duzenle&id=<?=$referans_dizi['id']?>" title="Düzenle">
                                 <i class="icon-pencil sercan_duzenle_icon"></i>
                                 </a>
                                 </td>
                              </tr>
                            <?php
							}
							?>
                              
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- END EXAMPLE TABLE widget-->
               </div>
            </div>
                    
				</div>
				<!-- END PAGE CONTENT-->
                
                
			</div>
			<!-- END PAGE CONTAINER-->	
            
            	
		</div>
		<!-- END PAGE -->
        
        
	</div>
	<!-- END CONTAINER -->
    
    
    
	<!-- BEGIN FOOTER -->
	<?php include("footer.php") ;?>
	<!-- END FOOTER -->
    
    
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->
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
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/table-managed.js"></script>     
   <script>
      jQuery(document).ready(function() {       
         App.init();
         TableManaged.init();
      });
   </script>
</body>
<!-- END BODY -->
</html>
