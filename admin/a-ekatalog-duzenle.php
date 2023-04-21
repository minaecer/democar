<?php
require_once 'inc/header.php';
?>




    <?php


    $ekatalogsor=$db->prepare("SELECT * from ekatalog where ekatalog_id=:ekatalog_id");
    $ekatalogsor->execute(array(
      'ekatalog_id' => $_GET['ekatalog_id']
    ));
    $ekatalogcek=$ekatalogsor->fetch(PDO::FETCH_ASSOC);
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
                          <h5><i class="fas fa-info"></i> <?php echo $menu["kato"]; ?></h5>


          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
              <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
              <li class="breadcrumb-item "><?php echo $menu["kato"]; ?></li>
              <li class="breadcrumb-item active">  <?php echo $menu["katoduz"]; ?></li>
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

            <input type="hidden" name="ekatalog_id" value="<?php echo $ekatalogcek['ekatalog_id']; ?>">
            <!--  <input type="hidden" name="ekatalog_resimyol" value="<?php echo $ekatalogcek['ekatalog_resimyol']; ?>">-->
            <input type="hidden" name="ekatalog_dosya" value="<?php echo $ekatalogcek['ekatalog_dosya']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["katoad"]; ?></b></label>
              <input type="text" class="form-control" name="ekatalog_ad" required="required" value="<?php echo $ekatalogcek['ekatalog_ad']; ?>" placeholder="ekatalog Adı Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b> <?php echo $menu["katono"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="ekatalog_sira" required="required" value="<?php echo $ekatalogcek['ekatalog_sira']; ?>" >
            </div>

<!--
            <div class="form-group">
             <label ><b>Yüklü Resim</b></label>
             <div class="">
              <img width="100"  src="../<?php echo $ekatalogcek['ekatalog_resimyol']; ?>">
            </div>
          </div>

          <div class="was-validated input-group custom-file ">
           <label ><b>Resim</b></label>
           <div class="col-md-6">

            <input type="file" class="custom-file-input" id="validatedCustomFile" name="ekatalog_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  >
            <label class="custom-file-label" for="validatedCustomFile"> </label>

          </div>
        </div>

      -->

      <div class="col-md-6"><br>
       <label ><b><?php echo $menu["katodoc"]; ?></b></label>

<div class="was-validated input-group custom-file ">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="ekatalog_dosya" accept=".pdf, .PDF"  >
        <label class="custom-file-label" for="validatedCustomFile"> </label>
        <div class="invalid-feedback"></div>
      </div>
    </div>

    <div class="checkbox  checbox-switch switch-success"><br>
      <label ><b><?php echo $menu["katodur"]; ?></b></label><br>
      <label>
        <input type="checkbox"  name="ekatalog_durum"
        <?php if ($ekatalogcek['ekatalog_durum']==1) {?> checked="" <?php   } ?>  />

        <span></span>


      </label>
    </div>
    <br>
    <div class="card-footer bg-transparent text-center">


    <button type="submit" name="ekatalogduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
