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
                        <h5><i class="fas fa-info"></i> <?php echo $menu["encok"]; ?></h5>


        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
            <li class="breadcrumb-item "><?php echo $menu["urunyo"]; ?></li>
            <li class="breadcrumb-item active"><?php echo $menu["encok"]; ?></li>
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
              <label ><b><?php echo $menu["urunad"]; ?></b></label>
              <input type="text" class="form-control" name="encok_ad" required="required"  >
            </div>
          
            <div class="form-group">
              <label ><b>Urun İcerik</b></label>
              <input type="text" class="form-control" name="encok_icerik" required="required"  >
            </div>
           
       



          <div class="form-group ">
             <label ><b><?php echo $menu["urunres"]; ?></b></label>
             <div class="col-md-6">
  <div class="was-validated input-group custom-file ">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="encok_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  required>
              <label class="custom-file-label" for="validatedCustomFile"> </label>
             
            </div>
          </div>

          <div class="checkbox  checbox-switch switch-success"><br>
            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="encok_durum" checked="" />
              <span></span>

            </label>
          </div>
          <div class="form-group">
    <label ><b> Title </b> </label>
    <input type="text" class="form-control"  name="encok_title"  placeholder="Sayfa Başlığı Giriniz...">
  </div>

  

  <div class="form-group">
    <label ><b>Description </b> </label>
    <input type="text" class="form-control"  name="encok_description"  placeholder="Sayfa Açıklama Giriniz...">
  </div>
       

          <div class="card-footer bg-transparent text-center ">


          <button type="submit" name="encokekle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"> <?php echo $menu["sub"]; ?> </i></button>
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