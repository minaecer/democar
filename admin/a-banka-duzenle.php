<?php
require_once 'inc/header.php';


    $bankasor=$db->prepare("SELECT * from banka where banka_id=:banka_id");
    $bankasor->execute(array(
      'banka_id' => $_GET['banka_id']
    ));
    $bankacek=$bankasor->fetch(PDO::FETCH_ASSOC);

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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["bankaduz"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "> <?php echo $menu["bankalar"]; ?></li>
          <li class="breadcrumb-item active"> <?php echo $menu["bankaduz"]; ?></li>
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

             <input type="hidden" name="banka_id" value="<?php echo $bankacek['banka_id']; ?>">
             <input type="hidden" name="banka_resimyol" value="<?php echo $bankacek['banka_resimyol']; ?>">

             <div class="form-group">
              <label ><b><?php echo   $menu["bankais"]; ?></b></label>
              <input type="text" class="form-control" name="banka_ad" required="required" value="<?php echo $bankacek['banka_ad'] ?>"  >
            </div>

            <div class="form-group">
              <label ><b><?php echo $menu["bankasah"]; ?></b></label>
              <input type="text" class="form-control" name="banka_sahip" required="required"  value="<?php echo $bankacek['banka_sahip'] ?>"  >
            </div>

            <div class="form-group">
              <label ><b><?php echo $menu["bankasub"]; ?></b></label>
              <input type="text" class="form-control" name="banka_sube" required="required"  value="<?php echo $bankacek['banka_sube'] ?>"  >
            </div>

            <div class="form-group">
              <label ><b><?php echo   $menu["bankahesno"]; ?></b></label>
              <input type="text" class="form-control" name="banka_hesap" required="required"  value="<?php echo $bankacek['banka_hesap'] ?>" >
            </div>


            <div class="form-group">
              <label ><b>IBAN</b></label>
              <input type="text" class="form-control" name="banka_iban" required="required"  value="<?php echo $bankacek['banka_iban'] ?>" >
            </div>


            <div class="form-group ">
              <label ><b><?php echo   $menu["bankano"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="banka_sira" required="required"  value="<?php echo $bankacek['banka_sira']; ?>" >
            </div>


            <div class="form-group">
             <label ><b><?php echo   $menu["logo"]; ?></b></label>
             <div class="">
              <img width="100"  src="../<?php echo $bankacek['banka_resimyol']; ?>">
            </div>
          </div>



           <div class="col-md-6">
           <label ><b><?php echo   $menu["logo"]; ?></b></label>

  <div class="was-validated input-group custom-file ">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="banka_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  >
            <label class="custom-file-label" for="validatedCustomFile"> </label>
            <div class="invalid-feedback"> </div>
          </div>
        </div>

        <div class="checkbox  checbox-switch switch-success"><br>
          <label ><b><?php echo   $menu["durum"]; ?></b></label><br>
          <label>
            <input type="checkbox"  name="banka_durum"   <?php if ($bankacek['banka_durum']==1) {?> checked="" <?php   } ?>   />
            <span></span>

          </label>
        </div>
        <br>

  <div class="card-footer bg-transparent text-center">
        <button type="submit" name="bankaduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?></i></button>
      </form>

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
 <script src="js/sweetalert.min.js"></script>
