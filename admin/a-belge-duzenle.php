<?php
require_once 'inc/header.php';
?>



<!--=================================
 Main content -->


    <?php


    $belgesor=$db->prepare("SELECT * from belge where belge_id=:belge_id");
    $belgesor->execute(array(
      'belge_id' => $_GET['belge_id']
    ));
    $belgecek=$belgesor->fetch(PDO::FETCH_ASSOC);
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["belgeduz"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
          <li class="breadcrumb-item "> <?php echo $menu["belge"]; ?></li>
          <li class="breadcrumb-item active"> <?php echo $menu["belgeduz"]; ?></li>
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

            <input type="hidden" name="belge_id" value="<?php echo $belgecek['belge_id']; ?>">
            <input type="hidden" name="belge_resimyol" value="<?php echo $belgecek['belge_resimyol']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["belgeis"]; ?></b></label>
              <input type="text" class="form-control" name="belge_ad" required="required" value="<?php echo $belgecek['belge_ad']; ?>" placeholder="belge Adı Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b> <?php echo $menu["belgeno"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="belge_sira" required="required" value="<?php echo $belgecek['belge_sira']; ?>" >
            </div>

            <div class="form-group">
             <label ><b><?php echo $menu["belgeyuk"]; ?></b></label>
             <div class="">
              <img width="100"  src="../<?php echo $belgecek['belge_resimyol']; ?>">
            </div>
          </div>

       <div class="col-md-6">
           <label ><b><?php echo $menu["belgeres"]; ?></b></label>

    <div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="belge_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  >
            <label class="custom-file-label" for="validatedCustomFile"> </label>

          </div>
        </div>

        <div class="checkbox  checbox-switch switch-success"><br>
          <label ><b><?php echo $menu["dur"]; ?></b></label><br>
          <label>
            <input type="checkbox"  name="belge_durum"
            <?php if ($belgecek['belge_durum']==1) {?> checked="" <?php   } ?>  />

            <span></span>


          </label>
        </div>
        <br>
    <div class="card-footer bg-transparent text-center">
        <button type="submit" name="belgeduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"><?php echo $menu["sub"]; ?> </i></button>
      </form>

    </p>
  </div>
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
    title: "İşlem Tamamlandı",
    icon: "success",
    button: "Tamam!",
  });
</script>


<?php }  else if($_GET['durum']=="no"){?>
<script type="text/javascript">
 swal({
  title: "İşlem Hatalı",
  icon: "error",
  button: "Tamam!",
});
</script>

<?php } ?>