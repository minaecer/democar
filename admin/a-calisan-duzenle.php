<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->



    <?php

    $casor=$db->prepare("SELECT * from calisan where calisan_id=:calisan_id");
    $casor->execute(array(
      'calisan_id' => $_GET['calisan_id']
    ));
    $cacek=$casor->fetch(PDO::FETCH_ASSOC);

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
                          <h5><i class="fas fa-info"></i> <?php echo $menu["calisan"]; ?></h5>


          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>

              <li class="breadcrumb-item "><?php echo $menu["calisan"]; ?></li>

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

             <input type="hidden" name="calisan_ad" value="<?php echo $cacek['calisan_id']; ?>">
             <input type="hidden" name="calisan_resimyol" value="<?php echo $cacek['calisan_resimyol']; ?>">

             <div class="form-group">
              <label ><b><?php echo $menu["calad"]; ?></b></label>
              <input type="text" class="form-control" name="urun_ad" required="required"  value="<?php echo $cacek['calisan_ad']; ?>" placeholder="Full Name">
            </div>


            <div class="row">



            <div class="col-md-4">
             <div class="form-group ">
              <label ><b><?php echo $menu["calic"]; ?></b></label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"></span>
                </div>
                <input type="text" class="form-control" name="calisan_detay"  value="<?php echo $cacek["calisan_detay"]; ?>" placeholder="Department"  aria-describedby="basic-addon1">
              </div>
            </div>
          </div>



        </div>

        <div class="form-group">
         <label ><b><?php echo $menu["resyuk"]; ?></b></label>
         <div class="">
           <?php if (strlen(trim($cacek['calisan_resimyol']))>0) {?>
           <img width="100"  src="../<?php echo $cacek["calisan_resimyol"]; ?>">
           <?php }else {?>
           <img width="100"  src="../images/resim-yok.png">
           <?php } ?>

         </div>
       </div>


     <div class="col-md-6">
         <label ><b><?php echo $menu["urunres"]; ?></b></label>

   <div class="was-validated input-group custom-file ">
          <input type="file" class="custom-file-input" id="validatedCustomFile" name="calisan_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
          <label class="custom-file-label" for="validatedCustomFile"> </label>
          <div class="invalid-feedback">Photo</div>
        </div>
      </div>


      <div class="checkbox  checbox-switch switch-success"><br>
        <div class="row">

          <div class="col-md-2 ">
            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="calisan_durum"  <?php if ($cacek['calisan_durum']==1) {?> checked=""<?php   } ?>  />
              <span></span>

            </label>
          </div>


        </div>
      </div>

  <div class="card-footer bg-transparent text-center">

  <button type="submit" name="calisanduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
