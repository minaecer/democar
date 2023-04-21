<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->


    <?php


    $bayisor=$db->prepare("SELECT * from bayi where bayi_id=:bayi_id");
    $bayisor->execute(array(
      'bayi_id' => $_GET['bayi_id']
    ));
    $bayicek=$bayisor->fetch(PDO::FETCH_ASSOC);

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
                      <h5><i class="fas fa-info"></i><?php echo $menu["bayiduz"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
          <li class="breadcrumb-item "> <?php echo $menu["bayi"]; ?></li>
          <li class="breadcrumb-item active"><?php echo $menu["bayiduz"]; ?></li>
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

            <input type="hidden" name="bayi_id" value="<?php echo $bayicek['bayi_id']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["bayis"]; ?></b></label>
              <input type="text" class="form-control" name="bayi_ad" required="required"   value="<?php echo $bayicek['bayi_ad']; ?>" placeholder="Bayi Adı Giriniz...">
            </div>

            <div class="form-group">
              <label ><b><?php echo $menu["bayiad"] ; ?></b></label>
              <input type="text" class="form-control" name="bayi_adres"   value="<?php echo $bayicek['bayi_adres']; ?>"  placeholder="Bayi Adresi Giriniz...">
            </div>

            <div class="form-group">
              <label ><b><?php echo   $menu["bayitel"]; ?></b></label>
              <input type="text" class="form-control" name="bayi_tel"   value="<?php echo $bayicek['bayi_tel']; ?>"   placeholder="Bayi Telefon Giriniz...">
            </div>

            <div class="form-group">
              <label ><b><?php echo $menu["bayimail"]; ?></b></label>
              <input type="email" class="form-control" name="bayi_mail"  value="<?php echo $bayicek['bayi_mail']; ?>"    placeholder="Bayi E-Mail Adresi Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b><?php echo   $menu["bayisir"]; ?> </b></label>
              <input type="number" class="form-control col-md-6 col-sm-6 col-xs-12" name="bayi_sira"  required="required"  value="<?php echo $bayicek['bayi_sira']; ?>" >
            </div>


            <div class="checkbox  checbox-switch switch-success">
              <label ><b><?php echo   $menu["dur"]; ?></b></label><br>
              <label>
                <input type="checkbox"  name="bayi_durum"  <?php if ($bayicek['bayi_durum']==1) {?> checked="" <?php   } ?> />
                <span></span>

              </label>
            </div>



            <br>
  <div class="card-footer bg-transparent text-center">
            <button type="submit" name="bayiduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
