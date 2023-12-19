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
	
	
	
	$referanslar_sil_sorgu = mysql_query("delete from mgorus where id='$id'");
	
	$bilgi = '	 <div class="alert alert-success">
										Başarı ile Silinmiştir !
				  </div>' ;
	
}
if($_GET['islem']=="Yayınla")
{
	$id = $_GET['id'];
	
	$bilgi = '	 <div class="alert alert-success">
										Başarı ile Yayınlanmıştır !
				  </div>' ;
	
}
if($_GET['islem']=="Yayındankaldır")
{
	$id = $_GET['id'];
	
	$bilgi = '	 <div class="alert alert-success">
										Başarı ile Yayından Kaldırılmıştır !
				  </div>' ;
	
}
?>


<!DOCTYPE html>
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
					
                  <div class="row-fluid">
               <div class="span12">
               
                  <div class="widget box light-grey">
                     <div class="widget-title">
                        <h4><i class="icon-tags"></i> Müşteri Görüş Listesi</h4>
                        
                     </div>
                     <div class="widget-body">
                        
                        
                        <?=$bilgi?>
                        
                        <table class="table table-striped table-bordered table-hover" id="sample_1" style="font-size:12px;">
                           <thead>
                              <tr>
							  <th></th>
                                 <th >İsim <i class="icon-angle-down" style="float:right;"></th>
								 <th >Soyisim<i class="icon-angle-down" style="float:right;"></th>
                                 <th class="hidden-480">Email <i class="icon-angle-down" style="float:right;"></th>
                                 <th class="hidden-480">Durumu <i class="icon-angle-down" style="float:right;"></th>
                                 <th class="hidden-480">İşlem</th>
                              </tr>
                           </thead>
                           <tbody>
                           
                           <?php
						   $say=0;
						    $referans_cek=mysql_query("select * from mgorus order by tarih desc");
							while($referans_dizi=mysql_fetch_array($referans_cek))
							{ $say ++
						   ?>
                           
                              <tr class="odd gradeX">
							  <td><?=$say?></td>
                                 <td><?=$referans_dizi['isim']?></td>
                                 
                                 <td><?=$referans_dizi['yetkili']?></td>
                                 <td><?=$referans_dizi['email']?></td>
                                 
                                 <td>
                                 
                                 <?php
								 if($referans_dizi['durum']=='2')
								 {
								 ?>
                                 <img src="assets/img/aktif.png" title="Yayında"><span style="opacity:0;">Yayında </span>
                                 <?php
								 }
								 else
								 {
								 ?>
                                 <img src="assets/img/pasif.png" title="Yayında Değil"><span style="opacity:0;">Yayında Değil</span>
                                 <?php
								 }
								 ?>
                                 </td>
                                 
                                 
                                 <td >
                                  <a href="?islem=sil&id=<?=$referans_dizi['id']?>" title="Sil" onclick="return confirm('Silmek istediğinize emin misiniz ?')">
                                 <i class="icon-remove sercan_sil_icon"></i>
                                 </a>
								 
                                 <a href="mgorus_oku.php?islem=Yayınla&id=<?=$referans_dizi['id']?>" title="İncele">
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
               
               </div>
            </div>
                    
				</div>
			
                
                
			</div>
		
            
            	
		</div>
	
        
	</div>

    
    
	
	<?php include("footer.php") ;?>
	
    
	
   <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>   
  
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
 
   <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
   
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/table-managed.js"></script>     
   <script>
      jQuery(document).ready(function() {       
         App.init();
         TableManaged.init();
      });
   </script>
</body>

</html>
