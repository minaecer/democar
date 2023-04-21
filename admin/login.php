<?php
require_once 'function/baglan.php';
ob_start();
session_start();

$ayarsor=$db->prepare("SELECT * FROM ayar WHERE ayar_id=:id");
$ayarsor->execute(array(
  'id'=>0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title><?php echo $ayarcek['ayar_title']; ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo $ayarcek["ayar_logo"]; ?>">

  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="<?php echo $ayarcek["ayar_logo"]; ?>" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <!-- font -->
  <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

  <!-- Plugins -->
  <link rel="stylesheet" type="text/css" href="../css/plugins-css.css" />

  <!-- Typography -->
  <link rel="stylesheet" type="text/css" href="../css/typography.css" />

  <!-- Shortcodes -->
  <link rel="stylesheet" type="text/css" href="../css/shortcodes/shortcodes.css" />

  <!-- Style -->


  <!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="../css/responsive.css" />


  <link rel="stylesheet" type="text/css" href="../css/skins/skin-<?php echo $ayarcek['ayar_tema']; ?>.css" />

  <script src="dist/sweetalert.min.js"></script>
</head>

<body>

 <div class="wrapper">

<!--=================================
 preloader -->

 <div id="pre-loader">
  <img src="../images/pre-loader/loader-23.gif" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================
 login-->

 <section class="login-box-main login-gradient-02 height-50vh page-section-ptb parallax" data-jarallax='{"speed": 0.6}' style="background-image: url('ada.jpg');" >
  <div class="login-box-main-middle">
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 ">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">

                                 <div class="text-primary p-4">
                                     <h5 class="text-primary"><?php echo $ayarcek['ayar_title']; ?></h5>
                                     <p> AdminPanel</p>
                                 </div>
                             </div>
                             <div class="col-5 align-self-end">
                                 <img src="../images/referans/bereket.png" alt="" class="img-fluid">
                             </div>

  </div>
</div>
     <div class="card-body pt-0" style="height: 16rem;">

    <div class="login-box pb-20 clearfix white-bg">
<div class="text-center" style="margin:5px">


<h4 class="text-primary">Hoşgeldiniz</h4>
</div>

      <form action="" method="POST">
       <div class="section-field mb-20">
         <label class="mb-10" for="name">Kullanıcı Adı* </label>
         <input id="name" class="web form-control" type="text" required="" placeholder="Kullanıcı Adı" name="kullanici_ad">
       </div>
       <div class="section-field mb-20">
         <label class="mb-10" for="Password">Şifre* </label>
         <input id="Password" class="Password form-control" type="password" required="" placeholder="Şifre" name="kullanici_password">
       </div>
  <div class="mt-3 d-grid">
       <button type="submit" name="loggin" class="btn btn-primary">Giriş <i class="fa fa-check"></i></button>

   </div>
     </form>

 </div>
<?php 
if (isset($_POST['loggin'])) {


	$kullanici_ad=$_POST['kullanici_ad'];
	$kullanici_password=md5($_POST['kullanici_password']);


	if ($kullanici_ad && $kullanici_password) {


		$kullanicisor=$db->prepare("SELECT * from kullanici where kullanici_ad=:ad and kullanici_password=:password");
		$kullanicisor->execute(array(
			'ad' => $kullanici_ad,
			'password' => $kullanici_password
		));

		$say=$kullanicisor->rowCount();

		if ($say>0) {

			$_SESSION['kullanici_ad'] = $kullanici_ad;


			header('Location:index.php?');


		} else {

			header('Location:login.php?durum=no');


		}
	}



}


?>
</div>
<div class="mt-5 text-center">

    <div>

        <p>© <script>document.write(new Date().getFullYear())</script> </p>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!--=================================
 login-->


</div>



<!--=================================
 jquery -->

 <!-- jquery -->
 <script src="../js/jquery-3.3.1.min.js"></script>

 <!-- plugins-jquery -->
 <script src="../js/plugins-jquery.js"></script>

 <!-- plugin_path -->
 <script>var plugin_path = '../js/';</script>



 <!-- custom -->
 <script src="../js/custom.js"></script>

</body>
</html>
