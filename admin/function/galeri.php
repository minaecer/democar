<?php 
ob_start();
session_start();
include 'baglan.php';


if (!empty($_FILES)&& isset($_POST['urungaleri'])) {


	$uploads_dir = '../../images/urun';

	@$tmp_name = $_FILES['file']["tmp_name"];

	@$name = $_FILES['file']["name"];

	$benzersizsayi1=rand(10000,34000);


	$benzersizad=$_POST['urun_id']."-".$benzersizsayi1."-";

	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$kaydet=$db->prepare("INSERT INTO urungaleri SET

		urungaleri_resimyol=:resimyol,
		urun_id=:id");
	

	$insert=$kaydet->execute(array(

		'resimyol' => $refimgyol,
		'id' => $_POST['urun_id']
	));


}




if (!empty($_FILES)&& isset($_POST['uruntanitimgaleri'])) {


	$uploads_dir = '../../images/urun';

	@$tmp_name = $_FILES['file']["tmp_name"];

	@$name = $_FILES['file']["name"];

	$benzersizsayi1=rand(10000,34000);


	$benzersizad=$_POST['uruntanitim_id']."-".$benzersizsayi1."-";

	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$kaydet=$db->prepare("INSERT INTO uruntanitimgaleri SET

		uruntanitimgaleri_resimyol=:resimyol,
		uruntanitim_id=:id");
	

	$insert=$kaydet->execute(array(

		'resimyol' => $refimgyol,
		'id' => $_POST['uruntanitim_id']
	));


}




?>