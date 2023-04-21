<?php
require_once 'inc/header.php';
?>





    <?php


    $referanssor=$db->prepare("SELECT * from referans where referans_id=:referans_id");
    $referanssor->execute(array(
      'referans_id' => $_GET['referans_id']
    ));
    $referanscek=$referanssor->fetch(PDO::FETCH_ASSOC);
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["refduz"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
            <li class="breadcrumb-item "><?php echo $menu["ref"]; ?></li>
          <li class="breadcrumb-item active"><?php echo $menu["refduz"]; ?></li>
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

            <input type="hidden" name="referans_id" value="<?php echo $referanscek['referans_id']; ?>">
            <input type="hidden" name="referans_resimyol" value="<?php echo $referanscek['referans_resimyol']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["refad"]; ?></b></label>
              <input type="text" class="form-control" name="referans_ad" required="required" value="<?php echo $referanscek['referans_ad']; ?>" placeholder="Referans Adı Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b> <?php echo $menu["hizmetno"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="referans_sira" required="required" value="<?php echo $referanscek['referans_sira']; ?>" >
            </div>

            <div class="form-group">
             <label ><b><?php echo $menu["logoyuk"]; ?></b></label>
             <div class="">
              <img width="100"  src="../<?php echo $referanscek['referans_resimyol']; ?>">
            </div>
          </div>

             <div class="col-md-6">
           <label ><b><?php echo $menu["logo"]; ?></b></label>

  <div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="referans_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  >
            <label class="custom-file-label" for="validatedCustomFile"> </label>

          </div>
        </div>

        <div class="checkbox  checbox-switch switch-success"><br>
          <label ><b><?php echo $menu["dur"]; ?></b></label><br>
          <label>
            <input type="checkbox"  name="referans_durum"
            <?php if ($referanscek['referans_durum']==1) {?> checked="" <?php   } ?>  />

            <span></span>


          </label>
        </div>
        <br>
        <div class="card-footer bg-transparent text-center">


        <button type="submit" name="referansduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
