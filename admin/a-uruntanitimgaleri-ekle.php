<?php
require_once 'inc/header.php';

$uruntanitim_id=$_GET['uruntanitim_id'];
$uruntanitim_ad=$_GET['uruntanitim_ad'];

?>

<!--=================================
 Main content -->



    <head>

      <link rel="stylesheet" type="text/css" href="dropzone/dropzone.css" />
      <script src="dropzone/dropzone.js"></script>

    </head>

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
                      <h5><i class="fas fa-info"></i>    <?php echo $menu["uruntagalek"]; ?> <small>( <?php  echo $uruntanitim_ad; ?> )</small></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color">  <?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item ">  <?php echo $menu["urunta"]; ?></li>
          <li class="breadcrumb-item ">  <?php echo $menu["urun"]; ?></li>
          <li class="breadcrumb-item active">  <?php echo $menu["uruntagalek"]; ?></li>
        </ol>
      </div>
    </div>
</div>

         <p>
           <a href="a-uruntanitimgaleri-listele.php?uruntanitim_id=<?php  echo $uruntanitim_id; ?>&uruntanitim_ad=<?php echo $uruntanitim_ad; ?>"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-eye">   <?php echo $menu["goster"]; ?> </i></button></a>
         </p><br>
         <hr><br>
         <p>
          <form action="galeri.php" method="POST"    class="dropzone" id="my-awesome-dropzone" >

            <input type="hidden" name="uruntanitim_id" value="<?php  echo $uruntanitim_id ?>">
            <input type="hidden" name="uruntanitimgaleri" >

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
