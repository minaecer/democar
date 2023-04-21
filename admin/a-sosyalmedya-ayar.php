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
                        <h5><i class="fas fa-info"></i> <?php echo $menu["sosmed"]; ?></h5>


        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
            <li class="breadcrumb-item "><?php echo $menu["siteyo"]; ?></li>
            <li class="breadcrumb-item active"><?php echo $menu["sosmed"]; ?></li>
          </ol>
        </div>
      </div>
  </div>
          <p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
           <form action="function/islem.php" method="POST" enctype="multipart/form-data">

     

            <div class="form-group">
              <label ><b>Facebook</b></label>
              <input type="text" class="form-control" name="ayar_facebook"   value="<?php echo $ayarcek['ayar_facebook']; ?>" placeholder="Facebook adresinizi giriniz..." >
            </div>

            <div class="form-group">
              <label ><b>Twitter</b></label>
              <input type="text" class="form-control" name="ayar_twitter"    value="<?php echo $ayarcek['ayar_twitter']; ?>"  placeholder="instagram adresinizi giriniz...">
            </div>

            <div class="form-group">
              <label ><b>Instagram</b></label>
              <input type="text" class="form-control" name="ayar_instagram"   value="<?php echo $ayarcek['ayar_instagram']; ?>"   placeholder="Instagram adresinizi giriniz...">
            </div>

            <div class="form-group">
              <label ><b>Youtube</b></label>
              <input type="text" class="form-control" name="ayar_youtube"   value="<?php echo $ayarcek['ayar_youtube']; ?>"   placeholder="Youtube adresinizi giriniz...">
            </div>


            <br>
            <div class="card-footer bg-transparent text-center">


            <button type="submit" name="sosyalmedyaduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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

<?php } ?>
