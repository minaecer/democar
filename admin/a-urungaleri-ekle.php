<?php
require_once 'inc/header.php';
$urun_id=$_GET['urun_id'];
$urun_ad=$_GET['urun_ad'];


?>

<!--=================================
 Main content -->


    <head>

      <link rel="stylesheet" type="text/css" href="dropzone/dropzone.css" />
      <script src="dropzone/dropzone.js"></script>

    </head>

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
                      <h5><i class="fas fa-info"></i>  <?php echo $menu["urungalek"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["urunyo"]; ?></li>
          <li class="breadcrumb-item active"><?php echo $menu["urungalek"]; ?></li>
        </ol>
      </div>
    </div>
</div>

  <!-- main body -->


         <p>
           <a href="a-urungaleri-listele.php?urun_id=<?php  echo $urun_id; ?>"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-eye"> <?php echo $menu["goster"]; ?> </i></button></a>
         </p><br>
         <form action="galeri.php" method="POST"    class="dropzone" id="my-awesome-dropzone" >

<input type="hidden" name="urun_id" value="<?php  echo $urun_id ?>">
<input type="hidden" name="urungaleri" >

</form>
       
           
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
