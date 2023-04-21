<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->




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
                      <h5><i class="fas fa-info"></i>  <?php echo $menu["urungrek"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["urunta"]; ?></li>
            <li class="breadcrumb-item "><?php echo $menu["urungr"]; ?></li>
          <li class="breadcrumb-item active"><?php echo $menu["urungrduz"]; ?></li>
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
              <label ><b><?php echo $menu["urungrad"]; ?></b></label>
              <input type="text" class="form-control" name="urungrup_ad" required="required"  placeholder="Grup Adı Giriniz...">
            </div>

            <div class="form-group ">
              <label ><b> <?php echo $menu["hizmetno"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="urungrup_sira" required="required" value="0" >
            </div>




          <div class="checkbox  checbox-switch switch-success"><br>
            <div class="row">

              <div class="col-md-2 ">
                <label ><b><?php echo $menu["dur"]; ?></b></label><br>
                <label>
                  <input type="checkbox"  name="urungrup_durum" checked="" />
                  <span></span>

                </label>
              </div>
              <div class="col-md-3">
                <label ><b><?php echo $menu["goster"]; ?></b></label><br>
                <label>
                  <input type="checkbox"  name="urungrup_anasayfa"  />
                  <span></span>

                </label>
              </div>

            </div>
          </div>




                  <div class="col-md-6">
              <label ><b><?php echo $menu["resyuk"]; ?></b></label>

    <div class="was-validated input-group custom-file ">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="urungrup_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  required>
                <label class="custom-file-label" for="validatedCustomFile"> </label>
                <div class="invalid-feedback">Grup Resmi Seçiniz</div>
              </div>
            </div>
            <br><br>
            <div class="form-group">
              <label ><b><?php echo $menu["acik"]; ?></b></label><br>
            </label>
            <div class="">

              <textarea  class="form-control" rows="5" id="editor1" name="urungrup_icerik"  ></textarea>

            </div>
          </div>

          <br>
          <br>

          <div class="divider icon"> <span> <?php echo $menu["seoay"]; ?></span> </div>
          <br >

          <div class="form-group">
            <label ><b>Sayfa  Title <small>( Başlık )</small></b> </label>
            <input type="text" class="form-control"   name="urungrup_title"  placeholder="Sayfa Başlığı Giriniz...">
          </div>

          <div class="form-group">
            <label ><b>Sayfa Keywords</b> <small>( Örnek: Teknoloji, Oturma Odası, Mobilya )</small></label>
            <input type="text" class="form-control"    name="urungrup_keywords"  data-role="tagsinput"  placeholder="Yaz ve Enter'e bas">
          </div>

          <div class="form-group">
            <label ><b>Sayfa Description <small>( Açıklama )</small></b> </label>
            <input type="text" class="form-control"   name="urungrup_description"  placeholder="Sayfa Açıklama Giriniz...">
          </div>



          <div class="card-footer bg-transparent text-center">


          <button type="submit" name="urungrupkaydet" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"> <?php echo $menu["sub"]; ?> </i></button>
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
