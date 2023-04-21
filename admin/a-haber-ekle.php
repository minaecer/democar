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
                        <h5><i class="fas fa-info"></i> <?php echo $menu["blogek"]; ?></h5>


        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
            <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
            <li class="breadcrumb-item "><?php echo $menu["blog"]; ?></li>
            <li class="breadcrumb-item active"> <?php echo $menu["blogek"]; ?></li>
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
              <label ><b><?php echo $menu["blogad"]; ?></b></label>
              <input type="text" class="form-control" name="haber_ad" required="required"  placeholder="Haber Adı Giriniz...">
            </div>
            <div class="form-group ">
              <label ><b> Haber Sira</b></label>
              <input type="number" class="form-control col-md-3" name="haber_sira" required="required"  >
            </div>
            <div class="form-group ">
              <label ><b> Haber Zaman</b></label>
              <input type="date" class="form-control col-md-3" name="haber_zaman" required="required"  >
            </div>
             <div class="col-md-6">
             <label ><b><?php echo $menu["blogres"]; ?></b></label>

                 <div class="was-validated input-group custom-file ">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="haber_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" required>
              <label class="custom-file-label" for="validatedCustomFile"> </label>
              <div class="invalid-feedback"><?php echo $menu["blogres"]; ?></div>
            </div>
          </div>

          <div class="checkbox  checbox-switch switch-success"> <br>
            <div class="row">

              <div class="col-md-2 ">
                <label ><b><?php echo $menu["dur"]; ?></b></label><br>
                <label>
                  <input type="checkbox"  name="haber_durum" checked="" />
                  <span></span>

                </label>
              </div>
             

            </div>
          </div>

          <br>

          <div class="form-group">
           <label ><b><?php echo $menu["blogaci"]; ?></b></label><br>
         </label>
         <div class="form-group">

          <textarea rows="5" class="form-control" id="editor1" name="haber_detay" required="required" ></textarea>

        </div>
      </div>


      


     
      <div class="card-footer bg-transparent text-center">



      <button type="submit" name="haberkaydet" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"> <?php echo $menu["sub"]; ?> </i></button>
    
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
