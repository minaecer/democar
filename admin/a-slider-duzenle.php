<?php
require_once 'inc/header.php';
?>


    <?php

    $slidersor=$db->prepare("SELECT * from slider where slider_id=:slider_id");
    $slidersor->execute(array(
      'slider_id' => $_GET['slider_id']
    ));
    $slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
    ?>


<!--=================================
 Main content -->



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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["sliderduz"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["slideryo"]; ?></li>
          <li class="breadcrumb-item active"><?php echo $menu["sliderduz"]; ?></li>
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

            <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id']; ?>">
            <input type="hidden" name="slider_resimyol" value="<?php echo $slidercek['slider_resimyol']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["sliderad"]; ?></b></label>
              <input type="text" class="form-control" name="slider_ad" required="required" value="<?php echo $slidercek['slider_ad']; ?>" placeholder="Slider Adı Giriniz...">
            </div>
            <div class="form-group">
              <label ><b>Slider URL</b></label>
              <input type="text" class="form-control"  name="slider_link" value="<?php echo $slidercek['slider_link']; ?>"  placeholder="Slider Url Adresini Giriniz...">
            </div>

            <div class="custom-control custom-checkbox mb-3 ">
              <input type="checkbox" class="custom-control-input"  name="slider_link_durum"  id="customControlValidation1"
              <?php if ($slidercek['slider_link_durum']==1) {?> checked=""  <?php   } ?>   >

              <label class="custom-control-label" for="customControlValidation1"  style="cursor: pointer;">Slider Url aktif edilsin mi ?</label>
            </div>

            <div class="form-group ">
              <label ><b><?php echo $menu["hizmetno"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="slider_sira" required="required" value="<?php echo $slidercek['slider_sira']; ?>" >
            </div>

            <div class="form-group">
             <label ><b><?php echo $menu["resyuk"]; ?></b></label>
             <div class="">
              <img width="200"  src="../<?php echo $slidercek['slider_resimyol']; ?>">
            </div>
          </div>

         <div class="col-md-6">
           <label ><b><?php echo $menu["slideres"]; ?></b></label>

  <div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="slider_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  >
            <label class="custom-file-label" for="validatedCustomFile"> </label>

          </div>
        </div>

        <div class="checkbox  checbox-switch switch-success"><br>
          <label ><b><?php echo $menu["dur"]; ?></b></label><br>
          <label>
            <input type="checkbox"  name="slider_durum"
            <?php if ($slidercek['slider_durum']==1) {?> checked="" <?php   } ?>  />

            <span></span>


          </label>
        </div>

        <div class="form-group">
          <label ><b><?php echo $menu["acik"]; ?></b></label>
          <input type="text" class="form-control"  name="slider_aciklama" value="<?php echo $slidercek['slider_aciklama']; ?>" placeholder="Slider Açıklama Giriniz...">
        </div>
<div class="card-footer bg-transparent text-center">


        <button type="submit" name="sliderduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
