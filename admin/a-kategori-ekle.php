<?php
require_once 'inc/header.php';
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
                            <h5><i class="fas fa-info"></i>  <?php echo $menu["kategek"] ?></h5>


            <div class="col-lg-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"] ?></a></li>
                <li class="breadcrumb-item "><?php echo $menu["urunyo"] ?></li>
                <li class="breadcrumb-item "><?php echo $menu["kateg"] ?></li>
                <li class="breadcrumb-item active"><?php echo $menu["kategek"] ?></li>
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
           <div class="form-group ">
             <label ><b><?php echo $menu["resim"]; ?></b></label>
             <div class="col-md-6">
  <div class="was-validated input-group custom-file ">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="kategori_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
              <label class="custom-file-label" for="validatedCustomFile"> </label>
             
            </div>
          </div>
            <div class="form-group">
              <label ><b><?php echo $menu["kategad"] ?></b></label>
              <input type="text" class="form-control" name="kategori_ad" required="required"  >
            </div>
      
<div class="form-group ">
                <label ><b><?php echo $menu["hizmetno"]; ?></b></label>
                <input type="number" class="form-control" name="kategori_sira" required="required" value="0" >
              </div>
            </div>


<div class="checkbox  checbox-switch switch-success"><br>
            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="kategori_durum" checked="" />
              <span></span>

            </label>
          </div>


            <div class="card-footer bg-transparent text-center">



            <button type="submit" name="kategorikaydet" class="dropdown-toggle-split btn btn-success"   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"> <?php echo $menu["sub"] ?> </i></button>
          </form>
        </div>
        </p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!--=================================
 wrapper -->

<!--=================================
 footer -->

 <?php require_once 'inc/footer.php';?>
