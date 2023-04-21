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
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0">
                          </h1>
                      </div><!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- Main content -->
          <div class="content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-12">
                      </div>

                  </div>
                  <div class="col-lg-15">
                      <div class="callout callout-info">
                          <h5><i class="fas fa-info"></i> Tema Ayarları</h5>


          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="default-color">Anasayfa</a></li>
              <li class="breadcrumb-item ">Site Yönetimi</li>
              <li class="breadcrumb-item active">Tema Ayarları</li>
            </ol>
          </div>
        </div>
    </div>
          <p>

           <form action="function/islem.php" method="POST" enctype="multipart/form-data">





             <h5 class="mb-15 mt-30"> Tema Renkleri</h5>

             <div class="row">


              <div class="col-md-3">

               <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="ayar_tema" value="blue"
                <?php if ($ayarcek['ayar_tema']=='blue') {?> checked="" <?php   } ?>   class="custom-control-input">
                <label class="custom-control-label badge  " style="background: #299be8; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio1">Tema -> blue</label>
              </div>

              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="ayar_tema" value="red"
                <?php if ($ayarcek['ayar_tema']=='red') {?> checked="" <?php   } ?>  class="custom-control-input">
                <label class="custom-control-label badge  " style="background: #d12326; color: #fff; text-shadow: none; cursor: pointer;  " for="customRadio2">Tema -> red</label>
              </div>

              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="ayar_tema" value="yellow"
                <?php if ($ayarcek['ayar_tema']=='yellow') {?> checked="" <?php   } ?>  class="custom-control-input">
                <label class="custom-control-label badge  " style="background: #f7c605; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio3">Tema -> yellow</label>
              </div>

              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="ayar_tema" value="purple"
                <?php if ($ayarcek['ayar_tema']=='purple') {?> checked="" <?php   } ?>  class="custom-control-input">
                <label class="custom-control-label badge  " style="background: #c36dff; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio4">Tema -> purple</label>
              </div>

              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio5" name="ayar_tema" value="pink"
                <?php if ($ayarcek['ayar_tema']=='pink') {?> checked="" <?php   } ?>  class="custom-control-input">
                <label class="custom-control-label badge  " style="background: #e9457a; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio5">Tema -> pink</label>
              </div>

              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio6" name="ayar_tema"
                <?php if ($ayarcek['ayar_tema']=='green') {?> checked="" <?php   } ?>  value="green" class="custom-control-input">
                <label class="custom-control-label badge  " style="background: #00b106; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio6">Tema -> green</label>
              </div>

            </div>


            <div class="col-md-3">

             <div class="custom-control custom-radio">
              <input type="radio" id="customRadio7" name="ayar_tema" value="default"
              <?php if ($ayarcek['ayar_tema']=='default') {?> checked="" <?php   } ?>  class="custom-control-input">
              <label class="custom-control-label badge  " style="background: #84ba3f; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio7">Tema -> default</label>
            </div>

            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio8" name="ayar_tema" value="brown"
              <?php if ($ayarcek['ayar_tema']=='brown') {?> checked="" <?php   } ?>  class="custom-control-input">
              <label class="custom-control-label badge  " style="background: #885830; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio8">Tema -> brown</label>
            </div>

            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio9" name="ayar_tema" value="cyan"
              <?php if ($ayarcek['ayar_tema']=='cyan') {?> checked="" <?php   } ?>  class="custom-control-input">
              <label class="custom-control-label badge  " style="background: #37c5a6; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio9">Tema -> cyan</label>
            </div>

            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio10" name="ayar_tema" value="gold"
              <?php if ($ayarcek['ayar_tema']=='gold') {?> checked="" <?php   } ?>  class="custom-control-input">
              <label class="custom-control-label badge  " style="background: #ba893f; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio10">Tema -> gold</label>
            </div>

            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio11" name="ayar_tema" value="gray"
              <?php if ($ayarcek['ayar_tema']=='gray') {?> checked="" <?php   } ?>  class="custom-control-input">
              <label class="custom-control-label badge  " style="background: #9a9a9a; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio11">Tema -> gray</label>
            </div>

            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio12" name="ayar_tema" value="lime"
              <?php if ($ayarcek['ayar_tema']=='lime') {?> checked="" <?php   } ?>  class="custom-control-input">
              <label class="custom-control-label badge  " style="background: #b4ef56; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio12">Tema -> lime</label>
            </div>

          </div>



          <div class="col-md-3">

           <div class="custom-control custom-radio">
            <input type="radio" id="customRadio13" name="ayar_tema" value="malachite"
            <?php if ($ayarcek['ayar_tema']=='malachite') {?> checked="" <?php   } ?>  class="custom-control-input">
            <label class="custom-control-label badge  " style="background: #51e887; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio13">Tema -> malachite</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio14" name="ayar_tema" value="olive"
            <?php if ($ayarcek['ayar_tema']=='olive') {?> checked="" <?php   } ?>  class="custom-control-input">
            <label class="custom-control-label badge  " style="background: #8d8f02; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio14">Tema -> olive</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio15" name="ayar_tema" value="orange"
            <?php if ($ayarcek['ayar_tema']=='orange') {?> checked="" <?php   } ?>  class="custom-control-input">
            <label class="custom-control-label badge  " style="background: #ed5001; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio15">Tema -> orange</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio16" name="ayar_tema" value="perfume"
            <?php if ($ayarcek['ayar_tema']=='perfume') {?> checked="" <?php   } ?>  class="custom-control-input">
            <label class="custom-control-label badge  " style="background: #b3affa; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio16">Tema -> perfume</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio17" name="ayar_tema" value="salmon"
            <?php if ($ayarcek['ayar_tema']=='salmon') {?> checked="" <?php   } ?>  class="custom-control-input">
            <label class="custom-control-label badge  " style="background: #ff796c; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio17">Tema -> salmon</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio18" name="ayar_tema" value="steelblue"
            <?php if ($ayarcek['ayar_tema']=='steelblue') {?> checked="" <?php   } ?>  class="custom-control-input">
            <label class="custom-control-label badge  " style="background: #354a6b; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio18">Tema -> steelblue</label>
          </div>

        </div>


        <div class="col-md-3">

         <div class="custom-control custom-radio">
          <input type="radio" id="customRadio19" name="ayar_tema" value="blue-gem"
          <?php if ($ayarcek['ayar_tema']=='blue-gem') {?> checked="" <?php   } ?>  class="custom-control-input">
          <label class="custom-control-label badge  " style="background: #5713A9; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio19">Tema -> blue-gem</label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" id="customRadio20" name="ayar_tema" value="chestnut-rose"
          <?php if ($ayarcek['ayar_tema']=='chestnut-rose') {?> checked="" <?php   } ?>  class="custom-control-input">
          <label class="custom-control-label badge  " style="background: #D35665; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio20">Tema -> chestnut-rose</label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" id="customRadio21" name="ayar_tema" value="dark-pink"
          <?php if ($ayarcek['ayar_tema']=='dark-pink') {?> checked="" <?php   } ?>  class="custom-control-input">
          <label class="custom-control-label badge  " style="background: #f41e54; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio21">Tema -> dark-pink</label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" id="customRadio22" name="ayar_tema" value="green-dark"
          <?php if ($ayarcek['ayar_tema']=='green-dark') {?> checked="" <?php   } ?>  class="custom-control-input">
          <label class="custom-control-label badge  " style="background: #005608; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio22">Tema -> green-dark</label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" id="customRadio23" name="ayar_tema"  value="persian-green"
          <?php if ($ayarcek['ayar_tema']=='persian-green') {?> checked="" <?php   } ?>  class="custom-control-input">
          <label class="custom-control-label badge  " style="background: #7dcdcd; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio23">Tema -> persian-green</label>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" id="customRadio24" name="ayar_tema" value="water-blue"
          <?php if ($ayarcek['ayar_tema']=='water-blue') {?> checked="" <?php   } ?>  class="custom-control-input">
          <label class="custom-control-label badge  " style="background: #0079fc; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio24">Tema -> water-blue</label>
        </div>

      </div>


    </div>



    <br><br>
    <div class="text-center">



    <button type="submit" name="temaduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> Güncelle </i></button>
  </form>
    </div>
</p> <br>
<hr class="divider double">


<p>

 <form action="function/islem.php" method="POST" enctype="multipart/form-data">





   <h5 class="mb-15 mt-30"> Header-Menü Görünümü</h5>

   <div class="row">


    <div class="col-md-3">

     <div class="custom-control custom-radio">
      <input type="radio" id="customRadio30" name="ayar_header" value="default"
      <?php if ($ayarcek['ayar_header']=='default') {?> checked="" <?php   } ?>   class="custom-control-input">
      <label class="custom-control-label badge   " style="background: #dddddddd; color: #000; text-shadow: none; cursor: pointer; " for="customRadio30">Hedaer -> Default</label>
    </div>



  </div>


  <div class="col-md-3">

   <div class="custom-control custom-radio">
    <input type="radio" id="customRadio31" name="ayar_header" value="transparent"
    <?php if ($ayarcek['ayar_header']=='transparent') {?> checked="" <?php   } ?>  class="custom-control-input">
    <label class="custom-control-label badge  " style="background: #dddddddd; color: #000; text-shadow: none; cursor: pointer; " for="customRadio31">Hedaer -> Transparent</label>
  </div>


</div>



<div class="col-md-2">

 <div class="custom-control custom-radio">
  <input type="radio" id="customRadio32" name="ayar_header" value="light"
  <?php if ($ayarcek['ayar_header']=='light') {?> checked="" <?php   } ?>  class="custom-control-input">
  <label class="custom-control-label badge  " style="background: #eee; color: #333; text-shadow: none; cursor: pointer; " for="customRadio32">Hedaer -> Light</label>
</div>


</div>


<div class="col-md-2">

 <div class="custom-control custom-radio">
  <input type="radio" id="customRadio33" name="ayar_header" value="dark"
  <?php if ($ayarcek['ayar_header']=='dark') {?> checked="" <?php   } ?>  class="custom-control-input">
  <label class="custom-control-label badge  " style="background: #333; color: #fff; text-shadow: none; cursor: pointer; " for="customRadio33">Header -> Dark</label>
</div>



</div>

<!--
<div class="col-md-2">

 <div class="custom-control custom-radio">
  <input type="radio" id="customRadio34" name="ayar_header" value="fancy"
  <?php if ($ayarcek['ayar_header']=='fancy') {?> checked="" <?php   } ?>  class="custom-control-input">
  <label class="custom-control-label badge  bg-primary " style=" color: #fff; text-shadow: none; cursor: pointer; " for="customRadio34">Header -> Fancy</label>
</div>



</div>

-->

</div>



<br><br>
<div class="text-center">


<button type="submit" name="headerduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> Güncelle </i></button>
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
