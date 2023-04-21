<?php
require_once 'inc/header.php';
?>

<?php


$bedensor=$db->prepare("SELECT * from urun_beden where beden_id=:beden_id");
$bedensor->execute(array(
  'beden_id' => $_GET['beden_id']
));
$bedencek=$bedensor->fetch(PDO::FETCH_ASSOC);

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
                  <h5><i class="fas fa-info"></i><?php echo $menu["bedenduz"]; ?></h5>


  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
      <li class="breadcrumb-item "><?php echo $menu["urunyo"]; ?></li>
      <li class="breadcrumb-item "> <?php echo $menu["beden"]; ?></li>
      <li class="breadcrumb-item active"><?php echo $menu["bedenduz"]; ?></li>
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

        <input type="hidden" name="beden_id" value="<?php echo $bedencek['beden_id']; ?>">

        <div class="form-group">
          <label ><b><?php echo $menu["bedenad"]; ?></b></label>
          <input type="text" class="form-control" name="beden_ad" required="required"   value="<?php echo $bedencek['beden_ad']; ?>" >
        </div>

        <div class="form-group">
          <label ><b><?php echo $menu["bedensir"] ; ?></b></label>
          <input type="number"  class="form-control col-md-6 col-sm-6 col-xs-12" name="beden_sira"   value="<?php echo $bedencek['beden_sira']; ?>"  >
        </div>

       


        <div class="form-group ">
          <label ><b><?php echo   $menu["bedensayi"]; ?> </b></label>
          <input type="number" class="form-control col-md-6 col-sm-6 col-xs-12" name="beden_sayi"  required="required"  value="<?php echo $bedencek['beden_sayi']; ?>" >
        </div>


        <div class="checkbox  checbox-switch switch-success">
          <label ><b><?php echo   $menu["dur"]; ?></b></label><br>
          <label>
            <input type="checkbox"  name="beden_durum"  <?php if ($bedencek['beden_durum']==1) {?> checked="" <?php   } ?> />
            <span></span>

          </label>
        </div>



        <br>
<div class="card-footer bg-transparent text-center">
        <button type="submit" name="bedenduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
