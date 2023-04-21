<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->

 <!--=================================
 <div class="main-content">

     <div class="page-content">
         <div class="container-fluid">

             <!-- start page title -->

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
                      <h5><i class="fas fa-info"></i><?php echo $menu["fotoek"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["fotolar"]; ?></li>
          <li class="breadcrumb-item active"> <?php echo $menu["fotoek"]; ?></li>
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
              <label ><b><?php echo $menu["fotoad"]; ?></b></label>
              <input type="text" class="form-control" name="foto_ad" required="required"  placeholder="Fotoğraf Adı Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b><?php echo $menu["fotono"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="foto_sira" required="required" value="0" >
            </div>



            <div class="col-md-6">
             <label ><b><?php echo $menu["foto"]; ?></b></label>

             <div class="was-validated input-group custom-file ">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="foto_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  required>
              <label class="custom-file-label" for="validatedCustomFile"> </label>
              <div class="invalid-feedback">Fotoğraf Seçiniz</div>
            </div>
          </div>

          <div class="checkbox  checbox-switch switch-success"><br>
            <label ><b><?php echo $menu["fotodur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="foto_durum" checked="" />
              <span></span>

            </label>
          </div>


          <div class="card-footer bg-transparent text-center ">


          <button type="submit" name="fotokaydet" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"><?php echo $menu["sub"]; ?></i></button>
        </form>
          </div>
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
