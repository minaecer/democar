<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->



    <?php
    $sayfasor=$db->prepare("SELECT * from sayfa where sayfa_id=:sayfa_id");
    $sayfasor->execute(array(
      'sayfa_id' => $_GET['sayfa_id']
    ));
    $sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC);

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
                  <h5><i class="fas fa-info"></i><?php echo $menu["sayfaduz"]; ?></h5>


  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
      <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
        <li class="breadcrumb-item "><?php echo $menu["sayfayo"]; ?></li>
      <li class="breadcrumb-item active"><?php echo $menu["sayfaduz"]; ?></li>
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

            <input type="hidden" name="sayfa_id" value="<?php echo $sayfacek['sayfa_id']; ?>">
            <input type="hidden" name="sayfa_resimyol" value="<?php echo $sayfacek['sayfa_resimyol']; ?>">

            <div class="form-group">
              <label ><b><?php echo $menu["sayfad"]; ?></b></label>
              <input type="text" class="form-control" name="sayfa_ad" required="required"  value="<?php echo $sayfacek['sayfa_ad']; ?>" placeholder="Sayfa Adı Giriniz...">
            </div>




            <div class="form-group">
             <label ><b><?php echo $menu["resyuk"]; ?></b></label>
             <div class="">
              <?php if (strlen(trim($sayfacek['sayfa_resimyol']))>0) {?>
              <img width="200"  src="../<?php echo $sayfacek['sayfa_resimyol']; ?>">
              <?php }else {?>
              <img width="200"  src="../images/resim-yok.png">
              <?php } ?>

              <button type="submit" name="sayfaresimsil" class="dropdown-toggle-split btn btn-danger "   aria-haspopup="true" aria-expanded="false"> <i class="ti-trash"> <?php echo $menu["sil"]; ?> </i></button>
            </div>
          </div>

             <div class="col-md-6">
           <label ><b><?php echo $menu["sayfares"]; ?></b></label>

  <div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="sayfa_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
            <label class="custom-file-label" for="validatedCustomFile"> </label>

          </div>
        </div>


        <div class="checkbox  checbox-switch switch-success"><br>

          <label ><b><?php echo $menu["dur"]; ?></b></label><br>
          <label>
            <input type="checkbox"  name="sayfa_durum" <?php if ($sayfacek['sayfa_durum']==1) {?> checked="" <?php   } ?> />
            <span></span>

          </label>

        </div>


        <br>

        <div class="form-group">
         <label ><b><?php echo $menu["sayfaic"]; ?></b></label><br>
       </label>
       <div class="form-group">

        <textarea  class="form-control" rows="5" id="editor1" name="sayfa_icerik" required="required" ><?php echo $sayfacek['sayfa_icerik']; ?></textarea>

      </div>
    </div>

    <br />
    <div class="divider icon"> <span> <?php echo $menu["seoay"]; ?> </span> </div>
    <br />

    <div class="form-group">
      <label ><b>Sayfa  Title <small>( Başlık )</small></b> </label>
      <input type="text" class="form-control"   name="sayfa_title"  value="<?php echo $sayfacek['sayfa_title']; ?>" placeholder="Sayfa Başlığı Giriniz...">
    </div>


    <div class="form-group">
      <label ><b>Sayfa Keywords</b>  <small>( Örnek: Teknoloji, Oturma Odası, Mobilya )</small></label>
      <input type="text" class="form-control"   name="sayfa_keywords"  data-role="tagsinput"  value="<?php echo $sayfacek['sayfa_keywords']; ?>" placeholder="Yaz ve Enter'e bas">
    </div>

    <div class="form-group">
      <label ><b>Sayfa Description  <small>( Açıklama )</small></b> </label>
      <input type="text" class="form-control"   name="sayfa_description"  value="<?php echo $sayfacek['sayfa_description']; ?>" placeholder="Sayfa Açıklama Giriniz...">
    </div>

    <div class="card-footer bg-transparent text-center">



    <button type="submit" name="sayfaduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
