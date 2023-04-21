<?php
require_once 'inc/header.php';
?>




 <!--=================================


      <!-- /.content-header -->
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["katoek"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
          <li class="breadcrumb-item "><?php echo $menu["kato"]; ?></li>
          <li class="breadcrumb-item active">  <?php echo $menu["katoek"]; ?></li>
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
              <label ><b><?php echo $menu["katoad"]; ?></b></label>
              <input type="text" class="form-control" name="ekatalog_ad" required="required"  placeholder="E-Katalog Adı Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b><?php echo $menu["katono"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="ekatalog_sira" required="required" value="0" >
            </div>



          <div class="col-md-6">
             <label ><b><?php echo $menu["katores"]; ?></b></label>

  <div class="was-validated input-group custom-file ">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="ekatalog_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  required>
              <label class="custom-file-label" for="validatedCustomFile"> </label>
              <div class="invalid-feedback">Resim Seçiniz</div>
            </div>
          </div>




         <div class="col-md-6">  <br>
           <label ><b><?php echo $menu["katodoc"]; ?></b></label>

    <div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="ekatalog_dosya" accept=".pdf, .PDF"  required>
            <label class="custom-file-label" for="validatedCustomFile"> </label>
            <div class="invalid-feedback">Dosya Seçiniz</div>
          </div>
        </div>


        <div class="checkbox  checbox-switch switch-success"><br>
          <label ><b><?php echo $menu["katodur"]; ?></b></label><br>
          <label>
            <input type="checkbox"  name="ekatalog_durum" checked="" />
            <span></span>

          </label>
        </div>

        <div class="card-footer bg-transparent text-center">


        <button type="submit" name="ekatalogkaydet" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"><?php echo $menu["sub"]; ?></i></button>
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
