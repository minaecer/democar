<?php 
ob_start();
session_start();

include 'baglan.php';



function seo($s) {
	$s=str_replace(array("'", "\"","&","®"),array("-", "-","-","-"),$s);
	$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',' ',',','?','+');
	$eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','-','-','-','-','','-','-');
	$s = str_replace($tr,$eng,$s);
	
	$s = strtolower($s);
	$s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
	$s = preg_replace('/\s+/', '-', $s);
	$s = preg_replace('|-+|', '-', $s);
	$s = preg_replace('/#/', '', $s);
	$s = str_replace('.', '', $s);
	$s = trim($s, '-');
	return $s;
}

function tcevir($tarih){
	$tar = explode(" ",$tarih); 

	$tr = explode("-",$tar[0]);
	$tarih1 = $tr[2]."-".$tr[1]."-".$tr[0]; 

	$tarih2=substr($tar[1], 0,5);
	return $tarih1." ".$tarih2;
}


function seohab($s) {
	$s=str_replace(array("'", "\"","&","®"),array("-", "-","-","-"),$s);
	$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',' ',',','?','+');
	$eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','-','-','-','-','','-','-');
	$s = str_replace($tr,$eng,$s);
	$s = strtolower($s);
	$s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
	$s = preg_replace('/\s+/', '-', $s);
	$s = preg_replace('|-+|', '-', $s);
	$s = preg_replace('/#/', '', $s);
	$s = str_replace('.', '', $s);
	$s = trim($s, '-');
	return $s;
}



?>