<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->




   <?php

   $uruntanitimsor=$db->prepare("SELECT * from uruntanitim where uruntanitim_id=:uruntanitim_id");
   $uruntanitimsor->execute(array(
    'uruntanitim_id' => $_GET['uruntanitim_id']
  ));
   $uruntanitimcek=$uruntanitimsor->fetch(PDO::FETCH_ASSOC);

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
                          <h5><i class="fas fa-info"></i> <?php echo $menu["uruntaduz"]; ?></h5>


          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
              <li class="breadcrumb-item "><?php echo $menu["urunta"]; ?></li>
              <li class="breadcrumb-item "><?php echo $menu["urun"]; ?></li>
              <li class="breadcrumb-item active"><?php echo $menu["uruntaduz"]; ?></li>
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


            <input type="hidden" name="uruntanitim_id" value="<?php echo $uruntanitimcek['uruntanitim_id']; ?>">
            <input type="hidden" name="uruntanitim_resimyol" value="<?php echo $uruntanitimcek['uruntanitim_resimyol']; ?>">


            <div class="form-group">
              <label ><b><?php echo $menu["uruntad"]; ?></b></label>
              <input type="text" class="form-control" name="uruntanitim_ad" required="required"  placeholder="Ürün Adı Giriniz..."   value="<?php echo $uruntanitimcek['uruntanitim_ad']; ?>">
            </div>



            <div class="row">

           

              <div class="col-md-3">
               <div class="form-group ">
                <label ><b><?php echo $menu["hizmetno"]; ?></b></label>
                <input type="number" class="form-control" name="uruntanitim_sira" required="required"  value="<?php echo $uruntanitimcek['uruntanitim_sira']; ?>" >
              </div>
            </div>

            <div class="checkbox  checbox-switch switch-success col-md-3 pl-20 ">

              <label ><b><?php echo $menu["dur"]; ?></b></label><br>
              <label>
                <input type="checkbox"  name="uruntanitim_durum" <?php if ($uruntanitimcek['uruntanitim_durum']==1) {?> checked=""<?php   } ?>  />
                <span></span>

              </label>

            </div>


          </div>


          <div class="form-group">
           <label ><b><?php echo $menu["resyuk"]; ?></b></label>
           <div class="">
             <?php if (strlen(trim($uruntanitimcek['uruntanitim_resimyol']))>0) {?>
             <img width="150"  src="../<?php echo $uruntanitimcek['uruntanitim_resimyol']; ?>">
             <?php }else {?>
             <img width="150"  src="../images/resim-yok.png">
             <?php } ?>

           </div>
         </div>

               <div class="col-md-6">
           <label ><b> <?php echo $menu["uruntakap"]; ?></b></label>

   <div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="uruntanitim_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
            <label class="custom-file-label" for="validatedCustomFile"> </label>
          
          </div>
        </div>
        <br>   <br>

        <div class="form-group">
          <label ><b>Video Url</b></label>
          <input type="text" class="form-control" name="uruntanitim_video"  value=" <?php echo $uruntanitimcek['uruntanitim_video']; ?>"   placeholder="Video Url ( Örnek: https://www.youtube.com/watch?v=cJZoTqtwGzY )">
        </div>






        <div class="form-group">
          <label ><b><?php echo $menu["ekb"]; ?></b></label>
          <textarea  class="form-control" rows="5" name="uruntanitim_kisa"  placeholder="Ürün Kısa Açıklama Giriniz..."><?php echo $uruntanitimcek['uruntanitim_kisa']; ?></textarea>

        </div>


        <div class="form-group">
          <label ><b><?php echo $menu["uruntacik"]; ?></b></label><br>
        </label>
        <div class="">

          <textarea class="form-control" rows="5" id="editor1" name="uruntanitim_icerik" > <?php echo $uruntanitimcek['uruntanitim_icerik']; ?></textarea>

        </div>
      </div>


      <div class="form-group">
        <label ><b><?php echo $menu["uruntaoz"]; ?></b></label><br>
      </label>
      <div class="">

        <textarea  class="form-control" rows="5" id="editor1" name="uruntanitim_ozellik"  > <?php echo $uruntanitimcek['uruntanitim_ozellik']; ?></textarea>

      </div>
    </div>




    <br>
    <div class="divider icon"> <span> <?php echo $menu["seoay"]; ?> </span> </div>
    <br>

    <div class="form-group">
      <label ><b>Sayfa Title <small>( Başlık )</small></b> </label>
      <input type="text" class="form-control"  name="uruntanitim_title"   value="<?php echo $uruntanitimcek['uruntanitim_title']; ?>"  placeholder="Sayfa Başlığı Giriniz...">
    </div>

    <div class="form-group">
      <label ><b>Sayfa Keywords</b> <small>( Örnek: Teknoloji, Oturma Odası, Mobilya )</small></label>
      <input type="text" class="form-control"   name="uruntanitim_keywords" value="<?php echo $uruntanitimcek['uruntanitim_keywords']; ?>"   data-role="tagsinput"  placeholder="Yaz ve Enter'e bas">
    </div>

    <div class="form-group">
      <label ><b>Sayfa Description <small>( Açıklama )</small></b> </label>
      <input type="text" class="form-control"  name="uruntanitim_description" value="<?php echo $uruntanitimcek['uruntanitim_description']; ?>"  placeholder="Sayfa Açıklama Giriniz...">
    </div>
    <div class="card-footer bg-transparent text-center">


    <button type="submit" name="uruntanitimduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"><i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>
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
