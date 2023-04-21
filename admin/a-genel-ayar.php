<?php
require_once 'inc/header.php';
?>


<!--=================================


    <?php


    $ayarsor=$db->prepare("select * from ayar where ayar_id=:id");
    $ayarsor->execute(array('id'=>0));
    $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
    ?>


<!--=================================
 Main content -->



 <!--=================================
  wrapper -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["genelay"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["siteyo"]; ?></li>
          <li class="breadcrumb-item active"><?php echo $menu["genelay"]; ?></li>
        </ol>
      </div>
    </div>
</div>
          <p>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
            <div class="row mt-20">

             <div class="col-lg-12 col-md-12">
              <div class="tab tab-border nav-center">
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active show" id="genel-tab" data-toggle="tab" href="#genel" role="tab" aria-controls="genel" aria-selected="true"> <i class="fa fa-cog"></i> <?php echo $menu["genelay"]; ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="false"><i class="fa fa-search"></i> <?php echo $menu["seoay"]; ?> </a>
                </li>


              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="genel" role="tabpanel" aria-labelledby="genel-tab">
                  <p>


                    <div class="row">
                      <div class="col-md-6">

                       <form action="function/islem.php" method="POST" enctype="multipart/form-data">

                         <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_logo']; ?>">

                         <div class="form-group">
                           <label ><b><?php echo $menu["logo"]; ?></b></label>
                           <div class="">
                            <img   height="100"   src="../<?php echo $ayarcek['ayar_logo']; ?>">
                          </div>
                        </div>


                      <div class="col-md-6">
                         <label ><b><?php echo $menu["logosec"]; ?></b></label>

                         <div class="was-validated input-group custom-file ">
                          <input type="file" class="custom-file-input" id="validatedCustomFile" name="ayar_logo" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  required="required">
                          <label class="custom-file-label" for="validatedCustomFile"> </label>

                        </div>
                      </div>

                      <br><br> <br>

                      <button type="submit" name="logoduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
                    </form>

                  </div>

                  <div class="col-md-6">

                   <form action="function/islem.php" method="POST" enctype="multipart/form-data">

                     <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_favicon']; ?>">

                     <div class="form-group">
                       <label ><b><?php echo $menu["icoyuk"]; ?></b></label>
                       <div class="">
                        <img height="50" src="../<?php echo $ayarcek['ayar_favicon']; ?>?v=<?php echo time(); ?>">
                      </div>
                    </div>


                     <div class="col-md-6">
                     <label ><b><?php echo $menu["icosec"]; ?></b></label>

                         <div class="was-validated input-group custom-file pt-50">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" name="ayar_favicon" accept=".ico, .ICO"  required="required">
                      <label class="custom-file-label" for="validatedCustomFile"> </label>

                    </div>
                  </div>

                  <br><br> <br>

                  <button type="submit" name="faviconduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?></i></button>
                </form>

              </div>
            </div>




            <br>

            <div class="divider"></div><br>


            <form action="function/islem.php" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label ><b><?php echo $menu["firmad"]; ?></b></label>
                <input type="text" class="form-control" name="ayar_firmaad" value="<?php echo $ayarcek['ayar_firmaad']; ?>" >
              </div>

              <div class="form-group">
                <label ><b><?php echo $menu["slo"]; ?></b></label>
                <input type="text" class="form-control" name="ayar_slogan" value="<?php echo $ayarcek['ayar_slogan']; ?>" >
              </div>

              <div class="form-group">
                <label ><b><?php echo $menu["site"]; ?></b></label>
                <input type="text" class="form-control" name="ayar_siteurl"  value="<?php echo $ayarcek['ayar_siteurl']; ?>" >
              </div>


              <div class="form-group">
                <label ><b><?php echo $menu["fot"]; ?></b></label>
                <input type="text" class="form-control" name="ayar_footer"  value="<?php echo $ayarcek['ayar_footer']; ?>">
              </div>

              <div class="card-footer bg-transparent text-center">


              <button type="submit" name="firmabilgiduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
                </div>

            </form>


          </p>
        </div>

        <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
          <p>

            <form action="function/islem.php" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label ><b>Title</b></label>
                <input type="text" class="form-control" name="ayar_title" required="required" value="<?php echo $ayarcek['ayar_title']; ?>" placeholder="Site Başlığı Giriniz...">
              </div>

              <div class="form-group">
                <label ><b>Description</b></label>
                <input type="text" class="form-control" name="ayar_description" required="required" value="<?php echo $ayarcek['ayar_description']; ?>" placeholder="Site Açıklama Giriniz...)">
              </div>

              <div class="form-group">
                <label ><b>Keywords</b> ( Örnek: Teknoloji, Oturma Odası, Mobilya )</label>
                <input type="text" class="form-control"   name="ayar_keywords"  data-role="tagsinput"  value="<?php echo $ayarcek['ayar_keywords']; ?>" placeholder="Yaz ve Enter'e bas">
              </div>

              <div class="card-footer bg-transparent text-center">


              <button type="submit" name="siteseoduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> Güncelle </i></button>
              </div>

            </form>
          </p>
        </div>


      </div>
    </div>
  </div>
</div>








</p>
</div>
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

 <?php   if($_GET['durum']=="ok"){?>
 <script type="text/javascript">
   swal({
    title: "İşlem Başarılı",
    icon: "success",
    button: "Tamam!",
  });
</script>


<?php }  else if($_GET['durum']=="no"){?>
<script type="text/javascript">
 swal({
  title: "İşlem Başarısız",
  icon: "error",
  button: "Tamam!",
});

</script>

<?php }?>
