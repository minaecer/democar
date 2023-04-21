<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->



    <?php


    $hizmetsor=$db->prepare("SELECT * from hizmet where hizmet_id=:hizmet_id");
    $hizmetsor->execute(array(
      'hizmet_id' => $_GET['hizmet_id']
    ));
    $hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC);

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
                        <h5><i class="fas fa-info"></i> <?php echo $menu["hizmetduz"]; ?></h5>


        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
            <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
            <li class="breadcrumb-item "><?php echo $menu["hizmet"]; ?></li>
            <li class="breadcrumb-item active"><?php echo $menu["hizmetduz"]; ?></li>
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

            <input type="hidden" name="hizmet_id" value="<?php echo $hizmetcek['hizmet_id']; ?>">
            <input type="hidden" name="hizmet_resimyol" value="<?php echo $hizmetcek['hizmet_resimyol']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["hizmetad"]; ?></b></label>
              <input type="text" class="form-control" name="hizmet_ad" required="required"  value="<?php echo $hizmetcek['hizmet_ad']; ?>" placeholder="Hizmet Adı Giriniz...">
            </div>




            <div class="form-group">
             <label ><b><?php echo $menu["resyuk"]; ?></b></label>
             <div class="">
               <?php if (strlen(trim($hizmetcek['hizmet_resimyol']))>0) {?>
               <img width="200"  src="../<?php echo $hizmetcek['hizmet_resimyol']; ?>">
               <?php }else {?>
               <img width="200"  src="../images/resim-yok.png">
               <?php } ?>

               <button type="submit" name="hizmetresimsil" class="dropdown-toggle-split btn btn-danger "   aria-haspopup="true" aria-expanded="false"> <i class="ti-trash"> Resmi Sil </i></button>
             </div>
           </div>

         <div class="col-md-6">
             <label ><b><?php echo $menu["hizmetres"]; ?></b></label>

           <div class="was-validated input-group custom-file ">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="hizmet_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
              <label class="custom-file-label" for="validatedCustomFile"> </label>

            </div>
          </div>


          <div class="checkbox  checbox-switch switch-success"><br>
           <div class="row">

            <div class="col-md-2 ">
              <label ><b><?php echo $menu["dur"]; ?></b></label><br>
              <label>
                <input type="checkbox"  name="hizmet_durum" <?php if ($hizmetcek['hizmet_durum']==1) {?> checked="" <?php   } ?>  />
                <span></span>

              </label>
            </div>
           

          </div>

        </div>


        <br>

        <div class="form-group">
         <label ><b><?php echo $menu["hizmetic"]; ?></b></label><br>
       </label>
       <div class="form-group">

        <textarea  class="form-control" rows="5" id="editor1" name="hizmet_icerik" required="required" ><?php echo $hizmetcek['hizmet_icerik']; ?></textarea>

      </div>
    </div>

   
    <div class="card-footer bg-transparent text-center">


    <button type="submit" name="hizmetduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"><?php echo $menu["sub"]; ?></i></button>
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
