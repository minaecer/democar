<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->


    <?php


    $ssssor=$db->prepare("SELECT * from sss where sss_id=:sss_id");
    $ssssor->execute(array(
      'sss_id' => $_GET['sss_id']
    ));
    $ssscek=$ssssor->fetch(PDO::FETCH_ASSOC);
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
                        <h5><i class="fas fa-info"></i> <?php echo $menu["sssduz"]; ?></h5>


        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
            <li class="breadcrumb-item "><?php echo $menu["sss"]; ?></li>
            <li class="breadcrumb-item active"><?php echo $menu["sssduz"]; ?></li>
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

            <input type="hidden" name="sss_id" value="<?php echo $ssscek['sss_id']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["sssad"]; ?></b></label>
              <input type="text" class="form-control" name="sss_ad" required="required" value="<?php echo $ssscek['sss_ad']; ?>" placeholder="Soru Adı Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b><?php echo $menu["hizmetno"]; ?> </b></label>
              <input type="number" class="form-control col-md-6 col-sm-6 col-xs-12" name="sss_sira"  value="<?php echo $ssscek['sss_sira']; ?>"  required="required" value="0" >
            </div>


            <div class="checkbox  checbox-switch switch-success">
              <label ><b><?php echo $menu["dur"]; ?></b></label><br>
              <label>
                <input type="checkbox"  name="sss_durum"  <?php if ($ssscek['sss_durum']==1) {?> checked="" <?php   } ?> />
                <span></span>

              </label>
            </div>



            <div class="form-group">
             <label ><b><?php echo $menu["acik"]; ?></b></label><br>
           </label>
           <div class="form-group">

            <textarea  class="form-control" rows="5"   name="sss_detay" required="required"  >
              <?php echo $ssscek['sss_detay']; ?>

            </textarea>

          </div>
        </div>





        <br>
        <div class="card-footer bg-transparent text-center">


        <button type="submit" name="sssduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
