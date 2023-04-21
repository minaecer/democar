<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->

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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["uruntaek"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["urunta"]; ?></li>
          <li class="breadcrumb-item "><?php echo $menu["urun"]; ?></li>
          <li class="breadcrumb-item active"><?php echo $menu["uruntaek"]; ?></li>
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

            <div class="form-group">
              <label ><b><?php echo $menu["uruntad"]; ?></b></label>
              <input type="text" class="form-control" name="uruntanitim_ad" required="required"  placeholder="Ürün Adı Giriniz...">
            </div>



            <div class="row">

              <div class="col-md-6">

                <div class="form-group">
                  <label ><b><?php echo $menu["urungr"]; ?> </b></label>
                  <div class="">
                    <select class=" form-control" required="" name="uruntanitim_grup" tabindex="-1">

                     <?php
                     $urungrupsor=$db->prepare("SELECT * FROM urungrup ORDER BY urungrup_sira ASC");
                     $urungrupsor->execute();

                     while($urungrupcek=$urungrupsor->fetch(PDO::FETCH_ASSOC)) {
                      ?>
                      <option value="<?php echo $urungrupcek['urungrup_id']; ?>" ><?php echo $urungrupcek['urungrup_ad']; ?></option>
                      <?php } ?>

                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
               <div class="form-group ">
                <label ><b><?php echo $menu["hizmetno"]; ?></b></label>
                <input type="number" class="form-control" name="uruntanitim_sira" required="required" value="0" >
              </div>
            </div>

        <div class="checkbox  checbox-switch switch-success col-md-3 pl-20 ">

            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="uruntanitim_durum" checked="" />
              <span></span>

            </label>

      </div>


          </div>



   <div class="col-md-6">
       <label ><b><?php echo $menu["uruntakap"]; ?></b></label>

      <div class="was-validated input-group custom-file ">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="uruntanitim_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" required>
        <label class="custom-file-label" for="validatedCustomFile"> </label>
        <div class="invalid-feedback">Kapak Resmi Seçiniz</div>
      </div>
    </div>
    <br>   <br>
    <div class="form-group">
      <label ><b>Video Url</b></label>
      <input type="text" class="form-control" name="uruntanitim_video"    placeholder="Video Url ( Örnek: https://www.youtube.com/watch?v=cJZoTqtwGzY )">
    </div>


          <div class="form-group">
            <label ><b><?php echo $menu["ekb"]; ?></b></label>
            <textarea   class="form-control" rows="5" name="uruntanitim_kisa"     placeholder="Ürün Kısa Açıklama Giriniz..."></textarea>

          </div>


          <div class="form-group">
            <label ><b><?php echo $menu["uruntacik"]; ?></b></label><br>
          </label>
          <div class="">

            <textarea  class="form-control" rows="5" id="editor1" name="uruntanitim_icerik" ></textarea>

          </div>
        </div>


        <div class="form-group">
          <label ><b><?php echo $menu["uruntaoz"]; ?></b></label><br>
        </label>
        <div class="">

          <textarea class="form-control" rows="5" id="editor1" name="uruntanitim_ozellik"></textarea>

        </div>
      </div>










    <br>
    <div class="divider icon"> <span> <?php echo $menu["seoay"]; ?> </span> </div>
    <br>

    <div class="form-group">
      <label ><b>Sayfa Title <small>( Başlık )</small></b> </label>
      <input type="text" class="form-control"  name="uruntanitim_title"  placeholder="Sayfa Başlığı Giriniz...">
    </div>

    <div class="form-group">
      <label ><b>Sayfa Keywords</b> <small>( Örnek: Teknoloji, Oturma Odası, Mobilya )</small></label>
      <input type="text" class="form-control"   name="uruntanitim_keywords"  data-role="tagsinput"  placeholder="Yaz ve Enter'e bas">
    </div>

    <div class="form-group">
      <label ><b>Sayfa Description <small>( Açıklama )</small></b> </label>
      <input type="text" class="form-control"  name="uruntanitim_description"  placeholder="Sayfa Açıklama Giriniz...">
    </div>
    <div class="card-footer bg-transparent text-center">


    <button type="submit" name="uruntanitimkaydet" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"> <?php echo $menu["sub"]; ?> </i></button>
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
