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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["menuek"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["siteyo"]; ?></li>
          <li class="breadcrumb-item active"><?php echo $menu["menuek"]; ?></li>
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
               <label ><b><?php echo $menu["menulerust"]; ?> </b></label>
               <div class="">
                <select class=" form-control col-md-6 col-sm-6 col-xs-12" required="" name="omenu_ust" tabindex="-1">

                  <option value="0"><?php echo $menu["menulerust"]; ?></option>

                  <?php
                  $menusor=$db->prepare("select * from omenu where omenu_ust=:omenu_ust order by omenu_sira");
                  $menusor->execute(array(
                    'omenu_ust' => 0
                  ));

                  while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                    <option value="<?php echo $menucek['omenu_id']; ?>"><?php echo $menucek['omenu_ad']; ?></option>


                    <?php } ?>




                  </select>
                </div>
              </div>
              <div class="form-group ">
             <label ><b><?php echo $menu["resim"]; ?></b></label>
             <div class="col-md-6">
  <div class="was-validated input-group custom-file ">
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="omenu_banner_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
              <label class="custom-file-label" for="validatedCustomFile"> </label>
             
            </div>
          </div>
              <div class="form-group ">
                <label ><b><?php echo $menu["menulersir"]; ?> </b></label>
                <input type="number" class="form-control col-md-6 col-sm-6 col-xs-12" name="omenu_sira" required="required" value="0" >
              </div>

              <div class="form-group">
                <label ><b><?php echo $menu["menulerad"]; ?></b></label>
                <input type="text" class="form-control" name="omenu_ad" required="required"  >
              </div>
           

           
       

                 <div id="hiddenDiv"  class="form-group">
                  <label ><b><?php echo $menu["menulerbag"]; ?></b> ( Manuel Link )</label>
                  <input type="text" class="form-control" style="background-color: #DEDEDE"  name="omenu_link"  placeholder="Bağlantı Adresini Giriniz...">
                </div>






             
                <br>
                <div class="card-footer bg-transparent text-center">


                <button type="submit" name="omenuekle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"> <?php echo $menu["sub"]; ?></i></button>
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

 <script type="text/javascript">
  function show(aval) {
    if (aval == "0") {
      hiddenDiv.style.display='block';
      Form.fileURL.focus();
    }
    else{
      hiddenDiv.style.display='none';
    }
  }
</script>
