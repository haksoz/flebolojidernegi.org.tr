
<?php
$tarihh = date("Y-m-d");
$tarih = date("d.m.Y");
$saat = date("h:i");
$html = htmlentities;



function cleaner($input_str) {
    $return_str = str_replace( array('<','>',"'",'"',')','('), array('&lt;','&gt;','&apos;','&#x22;','&#x29;','&#x28;'), $input_str );
    $return_str = str_ireplace( '%3Cscript', '', $return_str );
    return $return_str;
}


function xss_clean($data)
{
// Fix &entity\n;
$data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
$data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
$data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
$data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

// Remove any attribute starting with "on" or xmlns
$data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

// Remove javascript: and vbscript: protocols
$data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

// Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

// Remove namespaced elements (we do not need them)
$data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

do
{
	// Remove really unwanted tags
	$old_data = $data;
	$data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
}
while ($old_data !== $data);

// we are done...
return $data;
}

	$kullanici = $_SESSION['yonetici_kullanici'];
	 $sifre = $_SESSION['yonetici_sifre'];
	 $oturumkontrol = $bag -> query("select * from yonetici where yonetici_kullanici ='$kullanici' and yonetici_sifre ='$sifre'"); 
	 $durum = mysqli_fetch_array($oturumkontrol);

function oturumkontrolana(){

	global $durum;
	 if($durum){ }else{ echo '<script language="javascript">window.location="index.php";</script>'; die(); }
 }
 
 
 $ayarlar = $bag -> query("select * from ayar where ayar_id ='1'"); 
	$ayar = mysqli_fetch_array($ayarlar);
$copyz = 'base64_encode';
$copyb = 'base64_decode';
$copya = $ayar['copyright'];
$copyc = $copyb($copya);
$copyd = $ayar['copy'];

$e13 ='str_rot13';
$d13 ='str_rot13(str_rot13';



function doSEOFriendlyURL($string) {

	//türkçe karekteri ingilizce karaktere çevirir
	$trtoen = array('ç'=>'c', 'Ç'=>'C', 'ğ'=>'g', 'G'=>'G', 'İ'=>'I', 'ı'=>'i', 'Ö'=>'O', 'ö'=>'o', 'ş'=>'s', 'Ş'=>'S', 'ü'=>'u', 'Ü'=>'U');
	foreach($trtoen as $tr => $en){
		$string = mb_eregi_replace($tr, $en, $string);
	}
	//echo "aaaaaaa ".$string;

    //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
    $string = mb_strtolower($string);
    //Strip any unwanted characters
    //$string = mb_ereg_replace("[^a-z0-9_\s-]", "", $string);	//orjinali
    $string = mb_ereg_replace("[^a-z0-9_\s]", "", $string);
    //Clean multiple dashes or whitespaces
    //$string = mb_ereg_replace("[\s-]+", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = mb_ereg_replace("[\s_]", "-", $string);

	// replace all non letters or digits with -
	//$string = mb_ereg_replace('/\W+/', '-', $string);
	// trim
	//$string = trim($string, '');	//mb_trim yok
	//echo "bbbbbbb ".$string;
    return $string;
}

function guvenlik($q) { 
$q = htmlspecialchars(stripslashes($q));
$q = str_replace("script", "blocked", $q);
$q = mysqli_escape_string($q);
$q = str_replace("`","",$q);
$q = str_replace("'","'",$q);
$q = str_replace("-","-",$q);
$q = str_replace("&","",$q);
$q = str_replace("%","",$q);
$q = str_replace("<","",$q);
$q = str_replace(">","",$q);
$q = trim($q);
return $q; 
}
?>
