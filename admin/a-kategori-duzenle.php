<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->


    <?php
    $kategorisor=$db->prepare("SELECT * from kategori where kategori_id=:kategori_id");
    $kategorisor->execute(array(
      'kategori_id' => $_GET['kategori_id']
    ));
    $kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
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
                          <h5><i class="fas fa-info"></i> <?php echo $menu["kategduz"] ?></h5>


          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="default-color"> <?php echo $menu["anasay"] ?></a></li>
              <li class="breadcrumb-item "> <?php echo $menu["urunyo"] ?></li>
              <li class="breadcrumb-item "> <?php echo  $menu["kateg"] ?></li>
              <li class="breadcrumb-item active"> <?php echo $menu["kategduz"] ?></li>
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
           <input type="hidden" name="kategori_id" value="<?php echo  $kategoricek['kategori_id']; ?>"  class="form-control">
									<div class="col-md-2">
									<div class="form-group">
                                                <label ><b><?php echo $menu["resim"]; ?></b></label>
                                                <div class="">
                                                <?php if (strlen(trim( $kategoricek['kategori_resimyol']))>0) {?>
                                                <img width="100"  src="../<?php echo  $kategoricek['kategori_resimyol']; ?>">
                                                <?php }else {?>
                                                <img width="100"  src="../images/resim-yok.png">
                                                <?php } ?>

                                                </div>
                                            </div>

                                       

                                        <div class="was-validated input-group custom-file ">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="kategori_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
                                            <label class="custom-file-label" for="validatedCustomFile"> </label>
                                            <div class="invalid-feedback">Banner <?php echo $menu["resim"]; ?></div>
                                            </div>
                                        </div>



             <div class="form-group">
              <label ><b> <?php echo $menu["kategad"] ?></b></label>
              <input type="text" class="form-control" name="kategori_ad" required="required" value="<?php echo $kategoricek['kategori_ad']; ?>"  >
            </div>

            <div class="form-group ">
              <label ><b>  <?php echo $menu["kategno"] ?></b></label>
              <input type="number" class="form-control col-md-3" name="kategori_sira" required="required" value="<?php echo $kategoricek['kategori_sira']; ?>" >
            </div>
            <div class="col-md-2 ">
            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="kategori_durum"  <?php if ($kategoricek['kategori_durum']==1) {?> checked=""<?php   } ?>  />
              <span></span>

            </label>
            </div>

         <!--   <div class="checkbox  checbox-switch switch-success"><br>
              <label ><b>Anasayfada Göster</b></label><br>
              <label>
                <input type="checkbox"  name="kategori_anasayfa"
                <?php if ($kategoricek['kategori_anasayfa']==1) {?> checked="" <?php   } ?>  />

                <span></span>


              </label>
            </div>


            <div class="form-group">
             <label ><b>Yüklü Resim</b></label>
             <div class="">
              <img width="200"  src="../<?php echo $kategoricek['kategori_resimyol']; ?>">
            </div>
          </div>

          <div class="was-validated input-group custom-file ">
           <label ><b>Kategori Resim</b></label>
           <div class="col-md-6">

            <input type="file" class="custom-file-input" id="validatedCustomFile" name="kategori_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
            <label class="custom-file-label" for="validatedCustomFile"> </label>

          </div>
        </div>
      -->

     



      <div class="card-footer bg-transparent text-center">


      <button type="submit" name="kategoriduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload">  <?php echo $menu["sub"] ?> </i></button>
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
