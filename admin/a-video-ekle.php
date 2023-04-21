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
                        <h5><i class="fas fa-info"></i>   <?php echo $menu["videoek"]; ?></h5>


        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
            <li class="breadcrumb-item "><?php echo $menu["videogal"]; ?></li>
            <li class="breadcrumb-item active"><?php echo $menu["videoek"]; ?></li>
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
              <label ><b><?php echo $menu["videoad"]; ?></b></label>
              <input type="text" class="form-control" name="video_ad" required="required"  placeholder="Video Adı Giriniz...">
            </div>


            <div class="form-group ">
              <label ><b><?php echo $menu["hizmetno"]; ?></b></label>
              <input type="number" class="form-control col-md-3" name="video_sira" required="required" value="0" >
            </div>



            <div class="col-md-6">
             <label ><b><?php echo $menu["foto"]; ?></b></label>

<div class="was-validated input-group custom-file ">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="video_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  required>
              <label class="custom-file-label" for="validatedCustomFile"> </label>
              <div class="invalid-feedback">Kapak Resmi Seçiniz</div>
            </div>
          </div>

          <div class="checkbox  checbox-switch switch-success"><br>
            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="video_durum" checked="" />
              <span></span>

            </label>
          </div>

          <div class="form-group">
            <label ><b>Video Url</b></label>
            <input type="text" class="form-control" name="video_url" required="required"  placeholder="Video Url ( Örnek: https://www.youtube.com/watch?v=cJZoTqtwGzY )">
          </div>
          <div class="card-footer bg-transparent text-center">



          <button type="submit" name="videokaydet" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"> <?php echo $menu["sub"]; ?> </i></button>
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
