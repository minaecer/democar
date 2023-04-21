<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->

    <?php


    $ayarsor=$db->prepare("SELECT * from ayar where ayar_id=:ayar_id");
    $ayarsor->execute(array(
      'ayar_id' => 0
    ));
    $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


    ?>



 <!--=================================
  wrapper -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- /.content-header -->
      <div class="main-content">

          <div class="page-content">
              <div class="container-fluid">

                  <!-- start page title -->
                  <div class="row">
                      <div class="col-12">
                          <div class="page-title-box d-sm-flex align-items-center justify-content-between">




                          </div>
                      </div>
              <div class="col-lg-15">
                  <div class="callout callout-info">
                      <h5><i class="fas fa-info"></i> <?php echo $menu["apiay"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["siteyo"] ; ?></li>
          <li class="breadcrumb-item active"> <?php echo $menu["apiay"]; ?></li>
        </ol>
      </div>
    </div>
</div>
  <!-- main body -->

          <p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
           <form action="function/islem.php" method="POST" enctype="multipart/form-data">



            <div class="form-group">
              <label ><b>Google Recapctha Api - <small>Site Key</small></b></label>
              <input type="text" class="form-control" name="ayar_recapctha"   value="<?php echo $ayarcek['ayar_recapctha']; ?>" placeholder="Google Recapctha apisini giriniz..." >
            </div>

            <div class="form-group">
              <label ><b>Google Analystic</b></label>
              <input type="text" class="form-control" name="ayar_analystic"   value="<?php echo $ayarcek['ayar_analystic']; ?>"   placeholder="Google Analystic UA- izleme kimliği giriniz... Örnek : UA-155451145-1">
            </div>

            <!--

            <div class="form-group">
              <label ><b>Goole Map Api</b></label>
              <input type="text" class="form-control" name="ayar_goooglemap"    value="<?php echo $ayarcek['ayar_goooglemap']; ?>"  placeholder="Google Maps apisini giriniz...">
            </div>
          -->

          <div class="form-group">
            <label ><b>Google Map Embed Kodu <small>(Width=100%)</small></b></label>

            <textarea  class="form-control" rows="5"   name="ayar_goooglemap"  ><?php echo $ayarcek['ayar_goooglemap']; ?></textarea>

          </div>

          <div class="form-group">
            <label ><b>Canlı Destek Kodu <small>( Script Kodunu buraya gelecek )</small> </b></label>

            <textarea  class="form-control" rows="5"   name="ayar_canlidestek"  ><?php echo $ayarcek['ayar_canlidestek']; ?></textarea>

          </div>



          <br>
          <div class="text-center">

          <button type="submit" name="apiduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
        </form>

      </div>
      </p>
    </div>
  </div>
</div>
</div>


<!--=================================
 wrapper -->

<!--=================================
 footer -->

 <?php require_once 'inc/footer.php';?>

 <script src="js/sweetalert.min.js"></script>
