<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->


    <?php


    $ayarsor=$db->prepare("SELECT * from ayar where ayar_id=:ayar_id");
    $ayarsor->execute(array(
      'ayar_id' => 0
    ));
    $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

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
                          <h5><i class="fas fa-info"></i> <?php echo $menu["ileay"]; ?></h5>


          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="default-color"> <?php echo $menu["anasay"]; ?></a></li>
              <li class="breadcrumb-item "> <?php echo $menu["siteyo"]; ?></li>
              <li class="breadcrumb-item active"> <?php echo $menu["ileay"]; ?></li>
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
              <label ><b> <?php echo $menu["tel"]; ?></b></label>
              <input type="text" class="form-control" name="ayar_tel"   value="<?php echo $ayarcek['ayar_tel']; ?>" placeholder="Telefon Numarasını giriniz..." >
            </div>

            <div class="form-group">
              <label ><b>Gsm</b></label>
              <input type="text" class="form-control" name="ayar_gsm"    value="<?php echo $ayarcek['ayar_gsm']; ?>"  placeholder="Telefon Numarasını giriniz...">
            </div>

            <div class="form-group">
              <label ><b>Fax</b></label>
              <input type="text" class="form-control" name="ayar_faks"   value="<?php echo $ayarcek['ayar_faks']; ?>"   placeholder="Telefon Numarasını giriniz...">
            </div>

            <div class="form-group">
              <label ><b>E-Mail</b></label>
              <input type="email" class="form-control" name="ayar_mail"   value="<?php echo $ayarcek['ayar_mail']; ?>"    placeholder="E-Mail adresini giriniz...">
            </div>

            <br />
            <div class="divider icon"> <span> Whatsapp - Arama </span> </div>
            <br />

            <div class="form-group">
              <label ><b>Whatsapp <small> ( örnek : 5334445566 )</small></b></label>
              <input type="text" class="form-control" name="ayar_whatsapp"   value="<?php echo $ayarcek['ayar_whatsapp']; ?>" placeholder="Whatsapp Numarasını giriniz..." >
            </div>

            <div class="form-group">
              <label ><b> <?php echo $menu["tel"]; ?> <small> ( örnek : 5334445566 )</small></b></label>
              <input type="text" class="form-control" name="ayar_arama"    value="<?php echo $ayarcek['ayar_arama']; ?>"  placeholder="Telefon Arama Numarasını giriniz...">
            </div>


            <br />
            <div class="divider icon"> <span>  </span> </div>
            <br />

            <div class="form-group">
              <label ><b> <?php echo $menu["adres"]; ?></b></label>
              <input type="text" class="form-control" name="ayar_adres"   value="<?php echo $ayarcek['ayar_adres']; ?>"   placeholder="Adresi giriniz...">
            </div>

            <div class="form-group">
              <label ><b> <?php echo $menu["ilce"]; ?></b></label>
              <input type="text" class="form-control" name="ayar_ilce"   value="<?php echo $ayarcek['ayar_ilce']; ?>"   placeholder="İlçe giriniz...">
            </div>


            <div class="form-group">
              <label ><b> <?php echo $menu["il"]; ?></b></label>
              <input type="text" class="form-control" name="ayar_il"   value="<?php echo $ayarcek['ayar_il']; ?>"   placeholder="İl giriniz...">
            </div>

            <div class="form-group">
              <label ><b> <?php echo $menu["mes"]; ?></b></label>
              <input  type="text" class="form-control"   name="ayar_mesai" value="<?php echo $ayarcek['ayar_mesai']; ?>" placeholder="Mesai Saatlerini giriniz...">

            </div>



            <br>
            <div class="card-footer bg-transparent text-center">


            <button type="submit" name="iletisimduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload">  <?php echo $menu["sub"]; ?> </i></button>
          </form>
          </div>
        </p>
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
