<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		 
		<div class="navbar-inner">
			<div class="container-fluid">
				 
				<a title="Gris" class="brand" href="gris.php">

				<!--
				<?php echo $copyb($copyb($copyd));?>
			-->
				</a>
				 
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>          
				 	
				<div class="top-nav">
					
					 				
					<ul class="nav pull-right" id="top_menu">
						
						
						<li class="divider-vertical hidden-phone hidden-tablet"></li>
						 
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-wrench"></i>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="site_ayar.php"><i class="icon-cogs"></i> Site Ayarları</a></li>
							</ul>
						</li>
						 
						<li class="divider-vertical hidden-phone hidden-tablet"></li>
						 
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
                            
								<li><a href="yonetici_ekle.php?islem=duzenle&id=<?=$_SESSION['yonetici_id']?>"><i class="icon-user"></i> <?=$_SESSION['yonetici_ad_soyad']?></a></li>
								<li class="divider"></li>
								<li><a href="include/cikis.php"><i class="icon-signout"></i> Oturumu Kapat</a></li>
							</ul>
						</li>
						 
					</ul>
					 
				</div>
			</div>
		</div>
		 
	</div>