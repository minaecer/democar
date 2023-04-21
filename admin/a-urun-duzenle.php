<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->



    <?php

    $urunsor=$db->prepare("SELECT * from urun where urun_id=:urun_id");
    $urunsor->execute(array(
      'urun_id' => $_GET['urun_id']
    ));
    $uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

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
                          <h5><i class="fas fa-info"></i> <?php echo $menu["urunduz"]; ?></h5>


          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
              <li class="breadcrumb-item "><?php echo $menu["urunyo"]; ?></li>
              <li class="breadcrumb-item "><?php echo $menu["urun"]; ?></li>
              <li class="breadcrumb-item active"><?php echo $menu["urunduz"]; ?></li>
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

             <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id']; ?>">
             <input type="hidden" name="urun_resimyol" value="<?php echo $uruncek['urun_resimyol']; ?>">

             <div class="form-group">
              <label ><b><?php echo $menu["urunad"]; ?></b></label>
              <input type="text" class="form-control" name="urun_ad" required="required"  value="<?php echo $uruncek['urun_ad']; ?>" placeholder="Ürün Adı Giriniz...">
            </div>


         
              
              <div class="col-md-4">
               <div class="form-group ">
                <label ><b><?php echo $menu["hizmetno"]; ?></b></label>
                <input type="number" class="form-control" name="urun_sira" required="required"  value="<?php echo $uruncek['urun_sira']; ?>" >
              </div>
            </div>





        

        <div class="form-group">
         <label ><b><?php echo $menu["resyuk"]; ?></b></label>
         <div class="">
           <?php if (strlen(trim($uruncek['urun_resimyol']))>0) {?>
           <img width="100"  src="../<?php echo $uruncek['urun_resimyol']; ?>">
           <?php }else {?>
           <img width="100"  src="../images/resim-yok.png">
           <?php } ?>

         </div>
       </div>
       

<div class="form-group">
  <label ><b><?php echo $menu["urunkt"]; ?> </b></label>
  <div class="">
    <select class=" form-control" name="urun_kategori" tabindex="-1">

     <?php
     $kategorisor=$db->prepare("SELECT * FROM kategori ORDER BY kategori_sira ASC");
     $kategorisor->execute();

     while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
      ?>
      <option value="<?php echo $kategoricek['kategori_id']; ?>" ><?php echo $kategoricek['kategori_ad']; ?></option>
      <?php } ?>

    </select>
  </div>
</div>
<div class="form-group">
  <label ><b>Cinsiyet Secin </b></label>
  <div class="">
    <select class=" form-control" required="" name="urun_cinsiyet" tabindex="-1">

     <?php
     $kategorisor=$db->prepare("SELECT * FROM cinsi ORDER BY cins_sira ASC");
     $kategorisor->execute();

     while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {

  



      ?>
      <option value="<?php echo $kategoricek['cins_id']; ?>" selected><?php echo $kategoricek['cins_ad']; ?></option>
      <?php } ?>

    </select>
  </div>
</div>


     <div class="col-md-6">
         <label ><b><?php echo $menu["resim"]; ?></b></label>

   <div class="was-validated input-group custom-file ">
          <input type="file" class="custom-file-input" id="validatedCustomFile" name="urun_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
          <label class="custom-file-label" for="validatedCustomFile"> </label>
          <div class="invalid-feedback">Ürün Resmi Seçiniz</div>
        </div>
      </div>


      <div class="checkbox  checbox-switch switch-success"><br>
        <div class="row">

          <div class="col-md-2 ">
            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="urun_durum"  <?php if ($uruncek['urun_durum']==1) {?> checked=""<?php   } ?>  />
              <span></span>

            </label>
          </div>
      

        </div>
      </div>


      <br>

      <div class="form-group">
       <label ><b><?php echo $menu["acik"]; ?></b></label><br>
     </label>
     <div class="form-group">

      <textarea  class="form-control" rows="5" id="editor1" name="urun_icerik" required="required"   ><?php echo $uruncek['urun_icerik']; ?> </textarea>

    </div>
  </div>
  <div class="form-group">
       <label ><b>Title</b></label><br>
     </label>
     <div class="form-group">

     <input type="text" class="form-control" name="urun_title"  value="<?php echo $uruncek['urun_title']; ?> "  >

    </div>
  </div>
  <div class="form-group">
       <label ><b>Description</b></label><br>
     </label>
     <div class="form-group">

      <textarea  class="form-control" rows="5" id="editor1" name="urun_description"   ><?php echo $uruncek['urun_description']; ?> </textarea>

    </div>
  </div>
  <div class="card-footer bg-transparent text-center">


  <button type="submit" name="urunduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
