<?php
require_once 'inc/header.php';
?>

<!--=================================


    <?php

    $urungrupsor=$db->prepare("SELECT * from urungrup where urungrup_id=:urungrup_id");
    $urungrupsor->execute(array(
      'urungrup_id' => $_GET['urungrup_id']
    ));
    $urungrupcek=$urungrupsor->fetch(PDO::FETCH_ASSOC);
    ?>



 <!--=================================
  wrapper -->

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
                      <h5><i class="fas fa-info"></i>  <?php echo $menu["urungrduz"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["urunta"]; ?></li>
          <li class="breadcrumb-item "><?php echo $menu["urungr"]; ?></li>
          <li class="breadcrumb-item active"> <?php echo $menu["urungrduz"]; ?></li>
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

             <input type="hidden" name="urungrup_id" value="<?php echo $urungrupcek['urungrup_id']; ?>">
             <input type="hidden" name="urungrup_resimyol" value="<?php echo $urungrupcek['urungrup_resimyol']; ?>">

             <div class="form-group">
              <label ><b><?php echo $menu["urungrad"]; ?></b></label>
              <input type="text" class="form-control" name="urungrup_ad" required="required" value="<?php echo $urungrupcek['urungrup_ad']; ?>"  placeholder="urungrup Adı Giriniz...">
            </div>

            <div class="form-group ">
              <label ><b> <?php echo $menu["hizmetno"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="urungrup_sira" required="required" value="<?php echo $urungrupcek['urungrup_sira']; ?>" >
            </div>




          <div class="checkbox  checbox-switch switch-success"><br>
           <div class="row">

            <div class="col-md-2 ">
              <label ><b><?php echo $menu["dur"]; ?></b></label><br>
              <label>
                <input type="checkbox"  name="urungrup_durum" <?php if ($urungrupcek['urungrup_durum']==1) {?> checked="" <?php   } ?>  />
                <span></span>

              </label>
            </div>
            <div class="col-md-3">
              <label ><b><?php echo $menu["goster"]; ?></b></label><br>
              <label>
                <input type="checkbox"  name="urungrup_anasayfa" <?php if ($urungrupcek['urungrup_anasayfa']==1) {?> checked="" <?php   } ?> />
                <span></span>

              </label>
            </div>

          </div>

        </div>






            <div class="form-group">
             <label ><b><?php echo $menu["resyuk"]; ?></b></label>
             <div class="">
              <img width="200"  src="../<?php echo $urungrupcek['urungrup_resimyol']; ?>">
            </div>
          </div>

             <div class="col-md-6">
           <label ><b><?php echo $menu["urunres"]; ?></b></label>

  <div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="urungrup_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
            <label class="custom-file-label" for="validatedCustomFile"> </label>

          </div>
        </div>

        <br><br><br>

        <div class="form-group">
          <label ><b><?php echo $menu["acik"]; ?></b></label><br>
       </label>
       <div class="">

        <textarea  class="form-control" rows="5" id="editor1" name="urungrup_icerik" required="required" ><?php echo $urungrupcek['urungrup_icerik']; ?></textarea>

      </div>
    </div>

    <br>
    <br>
    <br>
    <div class="divider icon"> <span> <?php echo $menu["seoay"]; ?> </span> </div>
    <br >

    <div class="form-group">
      <label ><b>Sayfa  Title <small>( Başlık )</small></b> </label>
      <input type="text" class="form-control"   name="urungrup_title" value="<?php echo $urungrupcek['urungrup_title']; ?>" placeholder="Sayfa Başlığı Giriniz...">
    </div>

    <div class="form-group">
      <label ><b>Sayfa Keywords</b> <small>( Örnek: Teknoloji, Oturma Odası, Mobilya )</small></label>
      <input type="text" class="form-control"    name="urungrup_keywords"  data-role="tagsinput"    value="<?php echo $urungrupcek['urungrup_keywords']; ?>" placeholder="Yaz ve Enter'e bas">
    </div>

    <div class="form-group">
      <label ><b>Sayfa Description <small>( Açıklama )</small></b> </label>
      <input type="text" class="form-control"   name="urungrup_description"  value="<?php echo $urungrupcek['urungrup_description']; ?>" placeholder="Sayfa Açıklama Giriniz...">
    </div>


    <div class="card-footer bg-transparent text-center">



    <button type="submit" name="urungrupduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
