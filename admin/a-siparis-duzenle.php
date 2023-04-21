<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->



    <?php

    $siparissor=$db->prepare("SELECT * from siparis where siparis_id=:siparis_id");
    $siparissor->execute(array(
      'siparis_id' => $_GET['siparis_id']
    ));
    $sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC);

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
                          <h5><i class="fas fa-info"></i> <?php echo $menu["sipduz"]; ?></h5>


          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
              <li class="breadcrumb-item "><?php echo $menu["sipyo"]; ?></li>
        
              <li class="breadcrumb-item active"><?php echo $menu["sipduz"]; ?></li>
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
              <label ><b><?php echo $menu["sipad"]; ?></b></label>
              <input type="text" class="form-control" name="siparis_urun" required="required"  value="<?php echo $sipariscek['siparis_urun'] ?>">
            </div>



            <div class="row">

              <div class="col-md-4">

                <div class="form-group">
                  <label ><b><?php echo $menu["yonad"]; ?> </b></label>
                  <input type="text" class="form-control" name="siparis_adsoyad" required="required" value="<?php echo $sipariscek['siparis_adsoyad'] ?>" >
          
                </div>
              </div>

              <div class="col-md-4">
               <div class="form-group ">
                <label ><b><?php echo $menu["sipno"]; ?></b></label>
                <input type="number" class="form-control" name="siparis_id" required="required" value="<?php echo $sipariscek['siparis_id'] ?>">
              </div>
            </div>


            <div class="col-md-4">
             <div class="form-group ">
              <label ><b><?php echo $menu["fiyat"] ?></b></label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">₺</span>
                </div>
                <input type="text" class="form-control" name="siparis_fiyat" value="<?php echo $sipariscek['siparis_fiyat'] ?>"  aria-describedby="basic-addon1">
              </div>
            </div>
          </div>

          <div class="col-md-4">
             <div class="form-group ">
              <label ><b>E-mail</b></label>
              <div class="input-group mb-3">
             
                <input type="text" class="form-control" name="siparis_email" value="<?php echo $sipariscek['siparis_email'] ?>"  aria-describedby="basic-addon1">
              </div>
            </div>
          </div>


   
                                        <div class="col-md-4">
                                        <div class="form-group">
                                          <label ><b><?php echo $menu["tel"]; ?></b></label>
                                        </div>
                                        <div class="col-md-9">
                                          <input type="text" class="form-control" name="siparis_telefon" value="<?php echo $sipariscek['siparis_telefon'] ?>" >
                                        </div>
                                      </div>
                                 

                                 
                                        <div class="col-md-4">
                                        <div class="form-group">
                                          <label ><b><?php echo $menu["il"]; ?></b></label>
                                        </div>
                                        <div class="col-md-9">
                                          <input type="text" class="form-control" name="siparis_il" value="<?php echo $sipariscek['siparis_il'] ?>" >
                                        </div>
                                      </div>
                                  

                            
                                        <div class="col-md-4">
                                        <div class="form-group">
                                          <label ><b><?php echo $menu["ilce"]; ?></b></label>
                                        </div>
                                        <div class="col-md-9">
                                          <input type="text" class="form-control" name="siparis_ilce" value="<?php echo $sipariscek['siparis_ilce'] ?>">
                                        </div>
                                      </div>
                               

                               
                                        <div class="col-md-4">
                                        <div class="form-group">
                                          <label ><b><?php echo $menu["adres"]; ?></b></label>
                                        </div>
                                        <div class="col-md-9">
                                          <textarea  class="form-control" name="siparis_adres" rows="2" ><?php echo $sipariscek['siparis_adres']; ?></textarea>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                      <div class="form-group">
                                            <label ><b><?php echo $menu["ekb"]; ?></b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea  class="form-control" name="siparis_not" rows="2" ><?php echo $sipariscek['siparis_not']; ?></textarea>
                                        </div>
                                        </div>
                                                                        


  


      <div class="checkbox  checbox-switch switch-success"><br>
        <div class="row">

          <div class="col-md-4 ">
            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <div class="col-md-9">
    <select class=" form-control " required="" name="siparis_durum" tabindex="-1">

      <option value="0" <?php if ($sipariscek['siparis_durum']==0) {?> selected=""    <?php } ?>><?php echo $menu["haz"]; ?></option>

      <option value="1" <?php if ($sipariscek['siparis_durum']==1) {?> selected=""    <?php } ?>><?php echo $menu["tam"]; ?></option>

      <option value="2" <?php if ($sipariscek['siparis_durum']==2) {?> selected=""    <?php } ?>><?php echo $menu["ip"]; ?></option>

      <option value="3" <?php if ($sipariscek['siparis_durum']==3) {?> selected=""    <?php } ?>><?php echo $menu["teda"]; ?></option>

      <option value="4" <?php if ($sipariscek['siparis_durum']==4) {?> selected=""    <?php } ?>><?php echo $menu["kargo"]; ?></option>

      <option value="5" <?php if ($sipariscek['siparis_durum']==5) {?> selected=""    <?php } ?>><?php echo $menu["odeme"]; ?></option>

    </select>
  </div>
          </div>
     

   

  <div class="col-md-4">
  <div class="form-group">
    <label ><b><?php echo $menu["siptar"]; ?></b></label>
  </div>
  <div class="col-md-9">
    <input type="date"  class="form-control" name="siparis_tarih" value="<?php echo $sipariscek['siparis_tarih'] ?>" >
  </div>
</div>
      </div>
      </div>

      <br>

      <div class="form-group">
       <label ><b><?php echo $menu["acik"]; ?></b></label><br>
     </label>
     <div class="form-group">

      <textarea class="form-control" rows="5"  id="editor1" name="siparis_aciklama" required="required"   ><?php echo $sipariscek['siparis_aciklama']; ?></textarea>

    </div>
  </div>
  <div class="card-footer bg-transparent text-center">

  <button type="submit" name="siparisduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"> <?php echo $menu["sub"]; ?> </i></button>
</form>
 
</p>
</div>
</div>
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

 <?php   if($_GET['durum']=="ok"){?>
 <script type="text/javascript">
   swal({
    title: "İşlem Başarılı",
    icon: "success",
    button: "Tamam!",
  });
</script>


<?php }  else if($_GET['durum']=="no"){?>
<script type="text/javascript">
 swal({
  title: "İşlem Başarısız",
  icon: "error",
  button: "Tamam!",
});
</script>

<?php } ?>
