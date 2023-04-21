<?php 



include 'inc/header.php';












	if (!empty($_FILES)&& isset($_POST['encoksatangaleri'])) {
		$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['file']["tmp_name"];
		@$name = $_FILES['file']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi2;
		$refimgyol=substr($uploads_dir, 6)."/".$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$name");
	
		$kaydet=$db->prepare("INSERT INTO encoksatangaleri SET
	
			encokgal_resimyol=:resimyol,
			id=:id");
		
	
		$insert=$kaydet->execute(array(
	
			'resimyol' => $refimgyol,
			'id' => $_POST['id']
		));
	
	
	}
	
?>
