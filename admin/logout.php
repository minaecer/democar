<?php 
session_start();
session_destroy();
ob_end_flush();  
header("Location:login.php?durum=exit");
?>