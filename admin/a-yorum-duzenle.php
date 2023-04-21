<?php
require_once 'inc/header.php';
?>


<!--=================================
 Main content -->



    <?php


    $yorumsor=$db->prepare("SELECT * from yorum where yorum_id=:yorum_id");
    $yorumsor->execute(array(
      'yorum_id' => $_GET['yorum_id']
    ));
    $yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC);
    ?>


<!--=================================
 Main content -->



 <!--=================================
  wrapper -->


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
                        <h5><i class="fas fa-info"></i>  <?php echo $menu["musyorduz"]; ?></h5>


        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
            <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
              <li class="breadcrumb-item "><?php echo $menu["musyor"]; ?></li>
            <li class="breadcrumb-item active"><?php echo $menu["musyorduz"]; ?></li>
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

            <input type="hidden" name="yorum_id" value="<?php echo $yorumcek['yorum_id']; ?>">
            <input type="hidden" name="yorum_resimyol" value="<?php echo $yorumcek['yorum_resimyol']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["musyorad"]; ?></b></label>
              <input type="text" class="form-control" name="yorum_adsoyad" required="required" value="<?php echo $yorumcek['yorum_adsoyad']; ?>" placeholder="Yorum Sahibi Giriniz...">
            </div>


            <div class="form-group">
              <label ><b><?php echo $menu["acik"]; ?></b></label>
              <input type="text" class="form-control" name="yorum_icerik" required="required" value="<?php echo $yorumcek['yorum_icerik']; ?>" placeholder="Yorum İçeriği Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b><?php echo $menu["hizmetno"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="yorum_sira" required="required" value="<?php echo $yorumcek['yorum_sira']; ?>" >
            </div>

            <div class="form-group">
             <label ><b><?php echo $menu["resyuk"]; ?></b></label>
             <div class="">
              <img width="100"  src="../<?php echo $yorumcek['yorum_resimyol']; ?>">
            </div>
          </div>

          <div class="col-md-6">
           <label ><b><?php echo $menu["foto"]; ?></b></label>

<div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="yorum_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  >
            <label class="custom-file-label" for="validatedCustomFile"> </label>

          </div>
        </div>

        <div class="checkbox  checbox-switch switch-success"><br>
          <label ><b><?php echo $menu["dur"]; ?></b></label><br>
          <label>
            <input type="checkbox"  name="yorum_durum"
            <?php if ($yorumcek['yorum_durum']==1) {?> checked="" <?php   } ?>  />

            <span></span>


          </label>
        </div>
        <br>
        <div class="card-footer bg-transparent text-center">


        <button type="submit" name="yorumduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
