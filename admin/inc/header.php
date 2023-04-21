<?php

require_once 'function/baglan.php';
require_once 'function/code.php';


date_default_timezone_set('Europe/Istanbul');
$ayarsor=$db->prepare("SELECT * FROM ayar WHERE ayar_id=:id");
$ayarsor->execute(array(
  'id'=>0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_ad=:ad");
$kullanicisor->execute(array(
  'ad' => $_SESSION['kullanici_ad']
));

$say=$kullanicisor->rowCount();

if ($say==0) {

 header("Location:login.php");
 exit;
}

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);



$ayarxsor=$db->prepare("select ayar_tema,ayar_favicon from ayar where ayar_id=:id");
$ayarxsor->execute(array('id'=>0));
$ayarxcek=$ayarxsor->fetch(PDO::FETCH_ASSOC);



  $bugun=date("d"); // bugünün tarihi
   $ay=date("m"); // bu ay
   $yil=date("Y"); // bu yıl


   $onlineSuresi=time()-2*60; //

   $onlineSor=$db->prepare("SELECT * FROM hit WHERE simdi>=:simdi");//
   $onlineSor->execute(array(
    'simdi'=>$onlineSuresi
  ));
   $onlinecek=$onlineSor->fetch(PDO::FETCH_ASSOC);
   $onlinesay=$onlineSor->rowCount();


  // çoğul hitler

   $bugunx=$db->query("SELECT SUM(sayac) FROM hit WHERE gun='$bugun' AND ay='$ay' AND yil='$yil' ORDER BY id desc")->fetch();
  $bugun_cogul=$bugunx['SUM(sayac)']; // bugün çoğul


  $dunx=$db->query("SELECT SUM(sayac) FROM hit WHERE gun='".($bugun-1)."' AND ay='$ay' AND yil='$yil' ORDER BY id desc")->fetch();
  $dun_cogul=$dunx['SUM(sayac)']; // dün Çoğul

  $ayx=$db->query("SELECT SUM(sayac) FROM hit WHERE ay='$ay' AND yil='$yil' ORDER BY id desc")->fetch();
  $buay_cogul=$ayx['SUM(sayac)']; // bu ay çoğul

  $toplamx=$db->query("SELECT SUM(sayac) FROM hit ORDER BY id desc")->fetch();
  $toplam_cogul=$toplamx['SUM(sayac)']; // toplam çoğulumuz

  // tekil hitler
  $bugun_tekil=$db->query("SELECT * FROM hit WHERE gun='$bugun' AND ay='$ay' AND yil='$yil'")->rowCount(); // bugün tekil
  $dun_tekil=$db->query("SELECT * FROM hit WHERE gun='".($bugun-1)."' AND ay='$ay' AND yil='$yil'")->rowCount(); // dün tekil
  $buay_tekil=$db->query("SELECT * FROM hit WHERE ay='$ay' AND yil='$yil'")->rowCount(); // dün tekil
  $toplam_tekil=$db->query("SELECT * FROM hit")->rowCount(); // dün tekil

  if(isset($_GET["dil"])){
      $dil = $_GET["dil"];
  } else {
      $dil = "tr";
  }

  if(file_exists("$dil.php")) {
      require_once("dil/$dil.php");
  } else {
      require_once("dil/$dil.php");
  }
  ?>

<!doctype html>


<html lang="tr">

    <head>

        <meta charset="utf-8" />
        <title><?php echo $ayarcek['ayar_title']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $ayarcek['ayar_logo']; ?>">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $ayarcek['ayar_logo']; ?>" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>
    </head>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo $ayarcek["ayar_logo"]; ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo $ayarcek["ayar_logo"]; ?>" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo $ayarcek["ayar_logo"]; ?>" alt="" height="22">

                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo $ayarcek["ayar_logo"]; ?>" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->


  </div>
                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/turkey.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="?dil=tr" class="dropdown-item notify-item language" data-lang="tr">
                                    <img src="assets/images/flags/turkey.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Türkçe</span>
                                </a>
                               <!-- <a href="?dil=ar" class="dropdown-item notify-item language" data-lang="sa">
                                    <img src="assets/images/flags/ar.png" alt="user-image" class="me-1" height="12"> <span class="align-middle">عربي</span>
                                </a>
                           
                                <!-- 
                                <a href="?dil=en" class="dropdown-item notify-item language" data-lang="en">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
<!--
                                <!-- item-->
                          

                                <!-- item-->


                                <!-- item-->

                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-customize"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="px-lg-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="a-hizmet-listele.php">
                                                <img src="assets/images/brands/belge.png" alt="Github">
                                                <span>Hizmetlerimiz</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="a-slider-listele.php">
                                                <img src="assets/images/brands/buyut.png" alt="bitbucket">
                                                <span><?php echo $menu["slideryo"]; ?></span>
                                            </a>
                                        </div>
                                      
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="a-foto-listele.php">
                                                <img src="assets/images/brands/foto3.jpg" alt="dropbox">
                                                <span>Blog</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="a-menu-listele.php">
                                                <img src="assets/images/brands/chek.png" alt="mail_chimp">
                                                <span><?php echo $menu["menuyo"]; ?></span>
                                            </a>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo $kullanicicek['kullanici_resim'];  ?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo $kullanicicek['kullanici_adsoyad']; ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="a-kullanici.php"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile"><?php echo $menu["pro"]; ?></span></a>


                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout"><?php echo $menu["cik"]; ?></span></a>
                            </div>
                        </div>



                    </div>
                </div>
            </header>
                </div>
            <div class="vertical-menu">

                <div data-simplebar class="h-100">


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-file-manager"><?php echo $menu["icerikyo"] ; ?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                   
                                    <li><a href="a-foto-listele.php" key="t-saas">Blog</a></li>
                                   
                                   
                                    <li><a href="a-hizmet-listele.php" key="t-saas">Hizmetlerimiz</a></li>
                                

                                </ul>
                            </li>

                

                            
                                    <li>
                                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                                          <i class="bx bx-layout"></i>
                                          <span key="t-layouts"> <?php echo $menu["slideryo"] ; ?></span>
                                      </a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="a-slider-ekle.php" key="t-horizontal"><?php echo   $menu["sliderek"] ; ?></a></li>
                                            <li><a href="a-slider-listele.php" key="t-topbar-light"><?php echo $menu["sliderlist"] ; ?></a></li>

                                        </ul>
                                    </li>
                                 
                                   
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                                            <i class="bx bx-home-circle"></i>
                                            <span key="t-file-manager"><?php echo $menu["siteyo"]  ; ?></span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="false">
                                       
                                            <li><a href="a-genel-ayar.php" key="t-default"><?php echo $menu["genelay"] ; ?></a></li>
                                            <li><a href="a-iletisim-ayar.php" key="t-saas"><?php echo $menu["ileay"] ; ?></a></li>
                                            <li><a href="a-mail-ayar.php" key="t-crypto"><?php echo   $menu["mailay"] ; ?></a></li>
                                          
                                     
                                            <li><a href="a-kullanici.php" key="t-saas"><?php echo $menu["yonay"] ; ?></a></li>
                                            <li><a href="a-sosyalmedya-ayar.php" key="t-crypto"><?php echo $menu["sosmed"]  ; ?></a></li>


                                        </ul>
                                    </li>
                                    <li>
                                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                                          <i class="bx bx-layout"></i>
                                          <span key="t-layouts"><?php echo $menu["menuyo"] ; ?></span>
                                      </a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="a-menu-ekle.php" key="t-horizontal"><?php echo $menu["menuek"]  ; ?></a></li>
                                            <li><a href="a-menu-listele.php" key="t-topbar-light"><?php echo $menu["menuler"] ; ?></a></li>

                                        </ul>
                                    </li>

                                
                               
       
                         


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>

            <div class="rightbar-overlay"></div>

            <!-- JAVASCRIPT -->
            <script src="assets/libs/jquery/jquery.min.js"></script>
            <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/libs/node-waves/waves.min.js"></script>

            <!-- apexcharts -->
            <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

            <!-- dashboard init -->
            <script src="assets/js/pages/dashboard.init.js"></script>

            <!-- App js -->
            <script src="assets/js/app.js"></script>
            <script src="plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--=================================
 header End-->
