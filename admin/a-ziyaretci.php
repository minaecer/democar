<?php include 'inc/header.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->



      <?php

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


        ?>


        <!-- widgets -->
        <div class="row account-overview mb-4">
         <div class="col-12">
          <div class="card card-statistics h-100">
           <div class="card-body white-bg">
             <h5 class="mb-30"><a href="#">Ziyaretçi Sayıları </a></h5>
             <div class="row">
              <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                <div class="card card-statistics h-100 bg-success">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <h4 class="text-white">
                          <i class="fa fa-bar-chart highlight-icon" aria-hidden="true"></i>
                        </h4>
                      </div>
                      <div class="float-right">
                        <p class="card-text text-white">Online</p>
                        <h4 class="text-white"><?php echo  $onlinesay; ?> <small>Kişi</small></h4>
                      </div>
                    </div>
                    <p class="mt-3 text-white">Tekil Ziyaretçi </p>


                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                <div class="card card-statistics h-100 bg-danger">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <h4 class="text-white">
                          <i class="fa fa-bar-chart highlight-icon" aria-hidden="true"></i>
                        </h4>
                      </div>
                      <div class="float-right">
                        <p class="card-text text-white">Bugün</p>
                        <h4 class="text-white"><?php echo $bugun_tekil; ?> <small>Kişi</small></h4>
                      </div>
                    </div>
                    <p class="text-white mt-3">
                      <i class="fa fa-eye mr-1" aria-hidden="true"></i> Gösterim : <?php echo $bugun_cogul; ?>
                    </p>
                  </div>
                </div>
              </div>


              <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                <div class="card card-statistics h-100 bg-warning">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <h4 class="text-white">
                          <i class="fa fa-bar-chart highlight-icon" aria-hidden="true"></i>
                        </h4>
                      </div>
                      <div class="float-right">
                        <p class="card-text text-white">Dün</p>
                        <h4 class="text-white"><?php echo $dun_tekil; ?> <small>Kişi</small></h4>
                      </div>
                    </div>
                    <p class="text-white mt-3">
                      <i class="fa fa-eye mr-1" aria-hidden="true"></i> Gösterim : <?php echo $dun_cogul; ?>
                    </p>
                  </div>
                </div>
              </div>



              <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                <div class="card card-statistics h-100 bg-info">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <h4 class="text-white">
                          <i class="fa fa-bar-chart highlight-icon" aria-hidden="true"></i>
                        </h4>
                      </div>
                      <div class="float-right">
                        <p class="card-text text-white">Bu Ay</p>
                        <h4 class="text-white"><?php echo $buay_tekil; ?> <small>Kişi</small></h4>
                      </div>
                    </div>
                    <p class="text-white mt-3">
                      <i class="fa fa-eye mr-1" aria-hidden="true"></i> Gösterim : <?php echo $buay_cogul; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <h6 class="text-right">
              <span class="">Toplam Tekil : <label class="badge badge-lg bg-danger text-white"><?php echo  $toplam_tekil; ?></label></span>
              <span class="pl-30">Toplam Sayfa Gösterim : <label class="badge badge-lg bg-warning text-white"><?php echo  $toplam_cogul; ?></label></span>
            </h6>
          </div>
        </div>

      </div>
    </div>




            <div class="card">
<div class="card-header border-0">
<div class="d-flex justify-content-between">
<h3 class="card-title">Ziyaretçi</h3>
<a href="javascript:void(0);"><?php echo  $onlinesay; ?></a>
</div>
</div>
<div class="card-body">
<div class="d-flex">
<p class="d-flex flex-column">
<span class="text-bold text-lg"><?php echo  $toplam_tekil; ?></span>
<span>Toplam Ziyaretçi</span>
</p>

</div>

<div class="position-relative mb-4">
  <canvas id="visitors-chart" height="200"></canvas>
</div>
<div class="d-flex flex-row justify-content-end">
<span class="mr-2">
<i class="fas fa-square text-primary"> <?php echo $buay_tekil; ?></i> Bu Ay
</span>
<span>
<i class="fas fa-square text-gray"><?php echo $bugun_tekil; ?></i> Bugün
</span>
</div>
</div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
