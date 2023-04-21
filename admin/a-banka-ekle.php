<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->






 <!--=================================
  wrapper -->

      <!-- Content Header (Page header) -->


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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["bankaek"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["bankalar"]; ?></li>
          <li class="breadcrumb-item active"><?php echo $menu["bankaek"]; ?></li>
        </ol>
      </div>
    </div>
</div>
  <!-- main body -->

          <p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
           <form action="function/islem.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label ><b><?php echo   $menu["bankais"]; ?></b></label>
              <input type="text" class="form-control" name="banka_ad" required="required"  placeholder="Banka Adı Giriniz...">
            </div>

            <div class="form-group">
              <label ><b><?php echo $menu["bankasah"]; ?></b></label>
              <input type="text" class="form-control" name="banka_sahip" required="required"  placeholder="Hesap Sahibini Giriniz...">
            </div>

            <div class="form-group">
              <label ><b><?php echo $menu["bankasub"]; ?></b></label>
              <input type="text" class="form-control" name="banka_sube" required="required"  placeholder="Şube Kodu ve Adını Giriniz...">
            </div>

            <div class="form-group">
              <label ><b><?php echo   $menu["bankahesno"]; ?></b></label>
              <input type="text" class="form-control" name="banka_hesap" required="required"  placeholder="Hesap Numarasını Giriniz...">
            </div>


            <div class="form-group">
              <label ><b>IBAN</b></label>
              <input type="text" class="form-control" name="banka_iban" required="required"  placeholder="IBAN Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b><?php echo   $menu["bankano"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="banka_sira" required="required" value="0" >
            </div>



               <div class="col-md-6">
             <label ><b><?php echo $menu["logo"]; ?></b></label>

                 <div class="was-validated input-group custom-file ">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="banka_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  required>
              <label class="custom-file-label" for="validatedCustomFile"> </label>
              <div class="invalid-feedback"><?php echo $menu["logosec"]; ?></div>
            </div>
          </div>

          <div class="checkbox  checbox-switch switch-success"><br>
            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="banka_durum" checked="" />
              <span></span>

            </label>
          </div>
          <br>

          <div class="text-center">


          <button type="submit" name="bankakaydet" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"> <?php echo $menu["sub"]; ?> </i></button>
  </div>
        </form>

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
