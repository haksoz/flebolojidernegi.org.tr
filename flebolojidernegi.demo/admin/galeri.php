<?php

error_reporting(0);

@ob_start();
@session_start();
include("include/baglan.php");
include("include/fonksiyonlar.php");

oturumkontrolana();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resim Ekleme</title>
</head>

<body>



<?php
$urun_id = $_GET['urun_id'] ;


				if($_POST['EKLE']=="EKLE")
				{
					$urun_id = $_GET['urun_id'] ;

					
					
					if (empty($_FILES["resim"]["name"])) 
					{ 
					echo ' 
					  <script language="javascript"> 
						  alert("Lütfen Bir Resim Seçiniz"); 
						  history.back();  
					  </script>'; 
				 	exit; 
				 	}
					
				  $kaynak = $_FILES["resim"]["tmp_name"];  
				  $dosya = $_FILES["resim"]["name"];
				  $uzanti = explode(".", $_FILES[resim][name]); 
				  $random = rand(0,9999);
				  $yeni_isim = $random."_".$dosya;
				  $hedef  = "../lib/images/urunler/".$yeni_isim; 
				  $gitti=move_uploaded_file($kaynak,$hedef);
										
					$sayfa_ekle_sorgu=mysql_query("insert into galeri (urun_id, resim) values ('$urun_id','$yeni_isim')");
					
						if($sayfa_ekle_sorgu)
						{
						echo "EKLENDİ";
						}
						else
						{
						echo "HATA OLUSTU";
						}
				  }
				  
				  
				  if($_GET['islem']=="sil")
				  {
				  $gid=$_GET['gid'];
				  $sayfa_sil_sorgu = mysql_query("delete from galeri where id='$gid'");
				  }
				  
				 
				?>



<form action="#" method="post" enctype="multipart/form-data">

<table>

<tr>
<td>Resim</td>
<td><input type="file" name="resim" /></td>
</tr>


<tr>
<td></td>
<td><input type="submit" value="EKLE" name="EKLE" /></td>
</tr>

<tr>
<td colspan="2">Resim</td>
</tr>


<tr>
<td colspan="2"><?php
$sayfa_cek=mysql_query("select * from galeri where urun_id='$urun_id' order by id asc");
					while($sayfa_dizi=mysql_fetch_array($sayfa_cek))
					{
					?>
                    
                    <div style="width:150px; height:130px; float:left; margin-left:5px; text-align:center; margin-bottom:20px;">
                    
<img src="../lib/images/urunler/<?=$sayfa_dizi['resim']?>" width="150" height="100" style="float:left;"/><br />
<a href="?islem=sil&gid=<?=$sayfa_dizi['id']?>&urun_id=<?=$urun_id?>">SİL</a>

</div>
<?php
}
?></td>
</tr>

</table>

</form>

</body>
</html>
