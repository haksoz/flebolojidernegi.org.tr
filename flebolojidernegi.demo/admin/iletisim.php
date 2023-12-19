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
		
	$mesaj_sil_sorgu = mysql_query("delete from iletisim where id='$id'");
	
	$bilgi = '	 <div class="alert alert-success">
										Başarı ile Silinmiştir !
				  </div>' ;
	
}
if($_GET['islem']=="okunmadi")
{
	$duzenlenecek_id = $_GET['id'];
	
	$sayfa_duzenle_sorgu=mysql_query("update iletisim set durum='1' where id='$duzenlenecek_id'");
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
	<title>Topal Bilişim | Admin Paneli </title>
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
                        <h4><i class="icon-bookmark-empty"></i> İletişim Formları</h4>
                        
                     </div>
                     <div class="widget-body">
                        <div class="clearfix margin-bottom-10">
                           
                           
                        </div>
                        
                        <?=$bilgi?>
                        
                        <table class="table table-striped table-bordered table-hover" id="sample_1" style="font-size:12px;">
                           <thead>
                              <tr>
							  <th ></th>
                                 <th ><center>Adı Soyadı<i class="icon-angle-down" style="float:right;"></th>
                                 <th><center> Konu <i class="icon-angle-down" style="float:right;"></th>
                                 <th class="hidden-480"><center>Gönderim Tarihi <i class="icon-angle-down" style="float:right;"></th>
                                 <th class="hidden-480"><center>Oku<i style="float:right;"></th>
                                 <th class="hidden-480"><center>Durumu <i class="icon-angle-down" style="float:right;"></th>
								 <th ><center>İşlem <i class="icon-angle-down" style="float:right;"></th>
								 </center></center></center></center></center>
                              </tr>
                           </thead>
                           <tbody>
                      
                           <?php 
							$say =0;
						    $kategori_cek=mysql_query("select * from iletisim order by tarih desc");
							while($kategori_dizi=mysql_fetch_array($kategori_cek))
							{ $say ++
						   ?>
                           
                              <tr class="odd gradeX">
							  <td><?=$say?></td>
                                 <td>
								 <?=$kategori_dizi['ad']?>
                                 </td>
                                 <td><?=$kategori_dizi['konu']?></td>
                                 <td><center><?=$kategori_dizi['tarih']?></center></td>
                                 <td ><center><a href="oku.php?id=<?=$kategori_dizi['id']?>"><i class="icon-eye-open"></i></a></center></td>
                                 <td>
                                 
                                 <?php
								 if($kategori_dizi['durum']=='1')
								 {
								 ?>
                                 <font color="red"><center>Okunmadı</center></font>
                                 <?php
								 }
								 else
								 {
								 ?>
                                 <font color="green"><center>Okundu</center></font>
                                 <?php
								 }
								 ?>
                                 </td>
								 
								 
                                 <td>
								  <?php
								 if($kategori_dizi['durum']=='1')
								 {
								 ?>
                                 <font color="blue"><center>Henüz Okunmadı <a href="oku.php?id=<?=$kategori_dizi['id']?>">(Oku)</a>
								 <a href="?islem=sil&id=<?=$kategori_dizi['id']?>" title="Sil" onclick="return confirm('Henüz Okunmamış Mesajı Silmek İstediğinize Emin Misiniz ?')">
                                 <i class="icon-remove sercan_sil_icon"></i></a></center></font>
                                 <?php
								 }
								 else
								 {
								 ?>
								 <center><a href="?islem=sil&id=<?=$kategori_dizi['id']?>" title="Sil" onclick="return confirm('Silmek istediğinize emin misiniz ?')">
                                 <i class="icon-remove sercan_sil_icon"></i></a>
								 
								 <a href="?islem=okunmadi&id=<?=$kategori_dizi['id']?>" title="Okunmadı olarak işaretle" onclick="return confirm('Okunmadı olarak işaretlemek istediğinize emin misiniz ?')">
                                 <i class="icon-pencil sercan_duzenle_icon"></i>
                                 </a>
                                </center>
                                 <?php
								 }
								 ?>
									
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
