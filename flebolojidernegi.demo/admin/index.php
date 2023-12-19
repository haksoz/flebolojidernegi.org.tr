
<?php
@ob_start();

ini_set('session.gc_maxlifetime', 60);

@session_start();


include("include/baglan.php");

if($_POST)
{

	 $sifre = $bag -> real_escape_string(md5($_POST['sifre']));
	 $kullanici = $bag -> real_escape_string($_POST['kullanici']);
	 
	 $giriskontrol = $bag -> query("select * from yonetici where yonetici_kullanici ='$kullanici' and yonetici_sifre ='$sifre'"); 
	 
	 $durum = mysqli_fetch_array($giriskontrol);
	 if($durum)
	 {
		
		 $tarih = date("d.m.Y");
		 $saat =  date("h:i");
		 $yonetici_id_sabit = $durum['yonetici_id'];
		 $son_giris = $bag -> query("update yonetici set yonetici_son_giris='$tarih - $saat' where yonetici_id='$yonetici_id_sabit'");
		 
		 
		 $_SESSION['yonetici_ad_soyad']    = $durum['yonetici_ad_soyad'];
		 $_SESSION['yonetici_kullanici']   = $durum['yonetici_kullanici'];
		 $_SESSION['yonetici_sifre']       = $durum['yonetici_sifre'];
		 $_SESSION['yonetici_id']          = $yonetici_id_sabit ;	
		 
		 $bilgi = '	 <div class="alert alert-success">
										<strong>BAŞARILI!</strong> Giriş yapılmıştır. yönlendiriliyorsunuz.
									</div>
		 
		 ' ;
		 header("Refresh: 1; url= gris.php");
		
		 
	 }
	 else
	 {
		 
		 $bilgi = '	 <div class="alert alert-error">
										<strong>HATA!</strong> Kullanıcı Adı veya Şifreniz Yanlış.
									</div>
		 
		 ' ;
	 }
}



?>



<!DOCTYPE html>
<!--[if IE 8]> <html lang="tr" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="tr" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="tr"> <!--<![endif]-->

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
  
  <link href="assets/css/pages/login.css" rel="stylesheet" type="text/css" />
  
</head>

<body>
 
  <div id="logo" class="center">
    
  </div>
  
  <div id="login">
  <img src="images/logo.png" alt="Kapital Online" class="center" /> 
   
    <form id="loginform" class="form-vertical no-padding no-margin" action="#" method="post">
      <p class="center">Kullanıcı Adınızı ve şifrenizi yazınız.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-user"></i></span><input id="input-username" name="kullanici" type="text" placeholder="Kullanıcı Adı" />
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-lock"></i></span><input id="input-password" name="sifre" type="password" placeholder="Şifre" />
          </div>
        </div>
      </div>
      <div class="control-group remember-me">
        <div class="controls">
          <label class="checkbox">
          <input type="checkbox" name="remember" value="1"/> Beni Hatırla
          </label>
          
        </div>
      </div>
      <input type="submit" id="login-btn" class="btn btn-block btn-inverse" value="GİRİŞ" name="giris" />
    </form>
   
    <form id="forgotform" class="form-vertical no-padding no-margin hide" action="#">
      <p class="center">Lütfen sistemde kayıtlı mail adresinizi yazınız.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><input id="input-email" type="text" placeholder="E-mail Adresiniz" />
          </div>
        </div>
        <div class="space10"></div>
      </div>
      <input type="button" id="forget-btn" class="btn btn-block btn-inverse" value="GÖNDER"  name="unuttum" />
    </form>
   
  </div>
 
  <div id="login-copyright">
  
  <?php
  if($_POST)
  {	echo  $bilgi;}
  ?>
  
    2020<br>  <a href="http://www.ko.com.tr">Kapital Online</a>
  </div>
  
  <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
  
  <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>    
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
  <script src="assets/plugins/excanvas.js"></script>
  <script src="assets/plugins/respond.js"></script> 
  <![endif]-->  
  <script src="assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>  
  <script src="assets/plugins/jquery.blockui.js" type="text/javascript"></script> 
  <script src="assets/plugins/jquery.cookie.js" type="text/javascript"></script>
  <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>  
  
  
  <script src="assets/scripts/app.js"></script>
  <script src="assets/scripts/login.js"></script> 
  
  <script>
    jQuery(document).ready(function() {     
     
      App.init();
      Login.init();
    });
  </script>
  
</body>

</html>