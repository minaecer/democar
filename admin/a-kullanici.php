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
                            <h5><i class="fas fa-info"></i> <?php echo $menu["yonay"]; ?></h5>


            <div class="col-lg-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
                <li class="breadcrumb-item "><?php echo $menu["yonay"]; ?></li>

              </ol>
            </div>
          </div>
      </div>
          <p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


            <div class="row mt-20">

             <div class="col-lg-12 col-md-12">
              <div class="tab tab-border nav-center">
               <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item">
                  <a class="nav-link active" id="user-tab" data-toggle="tab" href="#user" role="tab" aria-controls="user" aria-selected="false"><i class="fa fa-user"></i> <?php echo $menu["yonad"]; ?> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="sifre-tab" data-toggle="tab" href="#sifre" role="tab" aria-controls="sifre" aria-selected="false"><i class="fa fa-lock"></i> <?php echo $menu["yonsif"]; ?> </a>
                </li>

              </ul>
              <div class="tab-content" id="myTabContent">


              <div class="tab-pane fade active show" id="user" role="tabpanel" aria-labelledby="user-tab">
                <p>
                 <form action="function/islem.php" method="POST" enctype="multipart/form-data">

                  <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">


                  <div class="form-group">
                    <label ><b><?php echo $menu["yonad"]; ?></b></label>
                    <input type="text" class="form-control" name="kullanici_adsoyad" required="required" value="<?php echo $kullanicicek['kullanici_adsoyad']; ?>" placeholder="Ad Soyad Giriniz...">
                  </div>

                  <div class="form-group">
                    <label ><b><?php echo $menu["yonkul"]; ?></b></label>
                    <input type="text" class="form-control" name="kullanici_ad" required="required" value="<?php echo $kullanicicek['kullanici_ad']; ?>" placeholder="Kullanıcı Adı Giriniz...">
                  </div>


                  <!-- Button trigger modal -->
                  <div class="card-footer bg-transparent text-center">


                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    <i class="ti-reload"> </i> <?php echo $menu["sub"]; ?>
                  </button>
  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <div class="modal-title" id="exampleModalLabel">
                           <div class="section-title mb-10">
                            <h6>Doğrulama</h6>


                          </div>
                        </div>
                        <div class="text-center">


                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                          </div>
                      </div>
                      <div class="modal-body">
                       <div class="form-group">
                        <label ><b><?php echo $menu["yonsif"]; ?></b></label>
                        <input type="password" class="form-control" name="kullanici_password" required="required"  placeholder="Kullanıcı Şifresi Giriniz...">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <div class="card-footer bg-transparent text-center">


                     <button type="submit" name="kullaniciadduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-check"> <?php echo $menu["sub"]; ?> </i></button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   </div>
                     </div>
                 </div>
               </div>
             </div>




           </form>
         </p>
       </div>
       <div class="tab-pane fade" id="sifre" role="tabpanel" aria-labelledby="sifre-tab">
        <p>
          <form action="function/islem.php" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">


            <div class="form-group">
              <label ><b><?php echo $menu["yones"]; ?></b></label>
              <input type="password" class="form-control" name="kullanici_oldpassword" required="required"  placeholder="Eski Şifre Giriniz...">
            </div>

            <div class="form-group">
              <label ><b><?php echo $menu["yonyen"]; ?></b></label>
              <input type="password" class="form-control" name="kullanici_password" required="required"  placeholder="Yen Şifre Giriniz...">
            </div>

            <div class="form-group">
              <label ><b><?php echo $menu["yontkr"]; ?></b></label>
              <input type="password" class="form-control" name="kullanici_password2" required="required"  placeholder="Yen Şifre Tekrar Giriniz...">
            </div>

            <div class="text-center">


            <button type="submit" name="passwordduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> <?php echo $menu["sub"]; ?> </i></button>

    </div>
          </form>
        </p>
      </div>

    </div>
  </div>
</div>
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

<?php } else if($_GET['durum']=="errorpass"){?>
<script type="text/javascript">
 swal({
  title: "Şifre Hatalı",
  icon: "warning",
  button: "Tamam!",
});

</script>

<?php } else if($_GET['durum']=="notequal"){?>
<script type="text/javascript">
 swal({
  title: "Şifreler Uyuşmuyor. Tekrar Deneyiniz...",
  icon: "info",
  button: "Tamam!",
});

</script>

<?php }else if($_GET['durum']=="erroroldpass"){?>
<script type="text/javascript">
 swal({
  title: "Eski Şifreyi Doğru Giriniz...",
  icon: "warning",
  button: "Tamam!",
});

</script>

<?php }  ?>
