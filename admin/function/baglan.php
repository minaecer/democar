<?php
error_reporting(0);
try {

	$db=new PDO("mysql:host=localhost;dbname=proje;charset=utf8",'root','');
	$db->query("SET NAMES utf8");
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}




?>
