<?php
require_once 'inc/header.php';
?>


<!--=================================
 Main content -->


    <?php


    $habersor=$db->prepare("SELECT * from haber where haber_id=:haber_id");
    $habersor->execute(array(
      'haber_id' => $_GET['haber_id']
    ));
    $habercek=$habersor->fetch(PDO::FETCH_ASSOC);

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
                      <h5><i class="fas fa-info"></i><?php echo $menu["blogduz"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
          <li class="breadcrumb-item "><?php echo $menu["blog"]; ?></li>
          <li class="breadcrumb-item active"> <?php echo $menu["blogduz"]; ?></li>
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

            <input type="hidden" name="haber_id" value="<?php echo $habercek['haber_id']; ?>">
            <input type="hidden" name="haber_resimyol" value="<?php echo $habercek['haber_resimyol']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["blogad"]; ?></b></label>
              <input type="text" class="form-control" name="haber_ad" required="required" value="<?php echo $habercek['haber_ad']; ?>"  placeholder="Haber Adı Giriniz...">
            </div>
            <div class="form-group ">
              <label ><b> Haber Sira</b></label>
              <input type="number" class="form-control col-md-3" name="haber_sira" required="required" value="<?php echo $habercek['haber_sira']; ?>" >
            </div>
            <div class="form-group ">
              <label ><b> Haber Zaman</b></label>
              <input type="date" class="form-control col-md-3" name="haber_zaman"  value="<?php echo $habercek['haber_zaman']; ?>" >
            </div>
            <div class="form-group">
             <label ><b><?php echo $menu["resyuk"]; ?></b></label>
             <div class="">
              <img width="200"  src="../<?php echo $habercek['haber_resimyol']; ?>">
            </div>
          </div>

    <div class="col-md-6">
           <label ><b><?php echo $menu["blogres"]; ?></b></label>

      <div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="haber_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
            <label class="custom-file-label" for="validatedCustomFile"> </label>

          </div>
        </div>

        <div class="checkbox  checbox-switch switch-success"> <br>
          <div class="row">

            <div class="col-md-2 ">
              <label ><b><?php echo $menu["dur"]; ?></b></label><br>
              <label>
                <input type="checkbox"  name="haber_durum" <?php if ($habercek['haber_durum']==1) {?> checked="" <?php   } ?>  />
                <span></span>

              </label>
            </div>
            

          </div>
        </div>

        <br>

        <div class="form-group">
         <label ><b><?php echo $menu["blogaci"]; ?></b></label><br>
       </label>
       <div class="form-group">

        <textarea  class="form-control" rows="5" id="editor1" name="haber_detay" required="required" ><?php echo $habercek['haber_detay']; ?></textarea>

      </div>
    </div>


   






    <div class="card-footer bg-transparent text-center">

  

    <button type="submit" name="haberduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
