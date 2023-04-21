<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->

    <?php


    $modulsor=$db->prepare("SELECT * from modul where modul_id=:modul_id");
    $modulsor->execute(array(
      'modul_id' => 0
    ));
    $modulcek=$modulsor->fetch(PDO::FETCH_ASSOC);

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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["modulyo"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item active"><?php echo $menu["modulyo"]; ?></li>
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


            <div class="row">

              <div class="col-md-6">

               <div class="checkbox  checbox-switch switch-success"><br>
                 <div class="row">
                  <div class="col-md-8">
                    <label ><b><?php echo $menu["urun"]; ?></b></label><br>
                  </div>
                  <div class="col-md-4">
                    <label>
                      <input type="checkbox"  name="modul_urun"   <?php if ($modulcek['modul_urun']==1) {?> checked="" <?php   } ?>   />
                      <span></span>
                    </label>
                  </div>
                </div>
              </div>


             <div class="checkbox  checbox-switch switch-success"><br>
                 <div class="row">
                  <div class="col-md-8">
                    <label ><b><?php echo $menu["urungr"]; ?></b></label><br>
                  </div>
                  <div class="col-md-4">
                    <label>
                      <input type="checkbox"  name="modul_urungrup"   <?php if ($modulcek['modul_urungrup']==1) {?> checked="" <?php   } ?>   />
                      <span></span>
                    </label>
                  </div>
                </div>
              </div>




              <div class="checkbox  checbox-switch switch-success"><br>
               <div class="row">
                <div class="col-md-8">
                  <label ><b><?php echo $menu["hizmet"]; ?></b></label><br>
                </div>
                <div class="col-md-4">
                  <label>
                    <input type="checkbox"  name="modul_hizmet"   <?php if ($modulcek['modul_hizmet']==1) {?> checked="" <?php   } ?>   />
                    <span></span>
                  </label>
                </div>
              </div>
            </div>


            <div class="checkbox  checbox-switch switch-success"><br>
             <div class="row">
              <div class="col-md-8">
                <label ><b><?php echo $menu["blog"]; ?></b></label><br>
              </div>
              <div class="col-md-4">
                <label>
                  <input type="checkbox"  name="modul_haber"   <?php if ($modulcek['modul_haber']==1) {?> checked="" <?php   } ?>   />
                  <span></span>
                </label>
              </div>
            </div>
          </div>

          <div class="checkbox  checbox-switch switch-success"><br>
           <div class="row">
            <div class="col-md-8">
              <label ><b><?php echo $menu["fotolar"]; ?></b></label><br>
            </div>
            <div class="col-md-4">
              <label>
                <input type="checkbox"  name="modul_foto"   <?php if ($modulcek['modul_foto']==1) {?> checked="" <?php   } ?>   />
                <span></span>
              </label>
            </div>
          </div>
        </div>



      </div>

      <div class="col-md-6">


        <div class="checkbox  checbox-switch switch-success"><br>
         <div class="row">
          <div class="col-md-8">
            <label ><b><?php echo $menu["ref"]; ?></b></label><br>
          </div>
          <div class="col-md-4">
            <label>
              <input type="checkbox"  name="modul_marka"   <?php if ($modulcek['modul_marka']==1) {?> checked="" <?php   } ?>   />
              <span></span>
            </label>
          </div>
        </div>
      </div>


      <div class="checkbox  checbox-switch switch-success"><br>
       <div class="row">
        <div class="col-md-8">
          <label ><b><?php echo $menu["musyor"]; ?></b></label><br>
        </div>
        <div class="col-md-4">
          <label>
            <input type="checkbox"  name="modul_yorum"   <?php if ($modulcek['modul_yorum']==1) {?> checked="" <?php   } ?>   />
            <span></span>
          </label>
        </div>
      </div>
    </div>




    <div class="checkbox  checbox-switch switch-success"><br>
     <div class="row">
      <div class="col-md-8">
        <label ><b><?php echo $menu["countyo"]; ?></b></label><br>
      </div>
      <div class="col-md-4">
        <label>
          <input type="checkbox"  name="modul_istatistik"   <?php if ($modulcek['modul_istatistik']==1) {?> checked="" <?php   } ?>   />
          <span></span>
        </label>
      </div>
    </div>
  </div>

  <div class="checkbox  checbox-switch switch-success"><br>
   <div class="row">
    <div class="col-md-8">
      <label ><b>Whatsapp</b></label><br>
    </div>
    <div class="col-md-4">
      <label>
        <input type="checkbox"  name="modul_whatsapp"   <?php if ($modulcek['modul_whatsapp']==1) {?> checked="" <?php   } ?>   />
        <span></span>
      </label>
    </div>
  </div>
</div>



  <div class="checkbox  checbox-switch switch-success"><br>
   <div class="row">
    <div class="col-md-8">
      <label ><b><?php echo $menu["ile"]; ?></b></label><br>
    </div>
    <div class="col-md-4">
      <label>
        <input type="checkbox"  name="modul_recapctha"   <?php if ($modulcek['modul_recapctha']==1) {?> checked="" <?php   } ?>   />
        <span></span>
      </label>
    </div>
  </div>
</div>



</div>

</div>











<input type="hidden" name="modulayar_true"/>

<br><br>
<div class="text-center">


<button type="submit" name="modulduzenle" class="dropdown-toggle-split btn btn-success "   aria-haspopup="true" aria-expanded="false"> <i class="ti-reload"> Güncelle </i></button>
</form>
</div>
</p>
</div>
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
