<?php
require_once 'inc/header.php';
?>


    <?php


    $fotosor=$db->prepare("SELECT * from foto where foto_id=:foto_id");
    $fotosor->execute(array(
      'foto_id' => $_GET['foto_id']
    ));
    $fotocek=$fotosor->fetch(PDO::FETCH_ASSOC);
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["fotoduz"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["fotolar"]; ?></li>
          <li class="breadcrumb-item active"> <?php echo $menu["fotoduz"]; ?></li>
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

            <input type="hidden" name="foto_id" value="<?php echo $fotocek['foto_id']; ?>">
            <input type="hidden" name="foto_resimyol" value="<?php echo $fotocek['foto_resimyol']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["fotoad"]; ?></b></label>
              <input type="text" class="form-control" name="foto_ad" required="required" value="<?php echo $fotocek['foto_ad']; ?>" placeholder="Fotoğraf Adı Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b><?php echo $menu["fotono"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="foto_sira" required="required" value="<?php echo $fotocek['foto_sira']; ?>" >
            </div>

            <div class="form-group">
             <label ><b><?php echo $menu["fotoyuk"]; ?></b></label>
             <div class="">
              <img width="200"  src="../<?php echo $fotocek['foto_resimyol']; ?>">
            </div>
          </div>

         <div class="col-md-6">
           <label ><b><?php echo $menu["foto"]; ?></b></label>

  <div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="foto_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  >
            <label class="custom-file-label" for="validatedCustomFile"> </label>

          </div>
        </div>

        <div class="checkbox  checbox-switch switch-success"><br>
          <label ><b><?php echo $menu["fotodur"]; ?></b></label><br>
          <label>
            <input type="checkbox"  name="foto_durum"
            <?php if ($fotocek['foto_durum']==1) {?> checked="" <?php   } ?>  />

            <span></span>


          </label>
        </div>
        <br>
        <div class="card-footer bg-transparent text-center">


        <button type="submit" name="fotoduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
