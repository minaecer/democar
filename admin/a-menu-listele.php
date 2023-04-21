<?php
require_once 'inc/header.php';
?>




    <?php

    $menusor=$db->prepare("SELECT * FROM omenu  ORDER BY omenu_id ASC ");
    $menusor->execute(array());


    $say=$menusor->rowCount();
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["menuyo"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>

          <li class="breadcrumb-item active"><?php echo $menu["menuyo"]; ?></li>
        </ol>
      </div>
    </div>
</div>
          <p>


                    <br> <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                        <tr >

                        <th class="column-title text-center"><?php echo $menu["resim"]; ?> </th>
                          <th class="column-title"><?php echo $menu["menulerad"]; ?></th>
                        <!--  <th class="column-title">Üst Menü - id </th>-->
                          <th class="column-title text-center"><?php echo $menu["menulersir"]; ?> </th>
                          <th class="column-title text-center"><?php echo $menu["dur"]; ?></th>
                          <th  class="column-title text-center"></th>
                          <th  class="column-title text-center"></th>

                        </tr>
                      </thead>

                      <tbody>

                        <?php


                        while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {

                          $menu_id=$menucek['omenu_id'];
                          ?>
                          <tr>
                          <td>    

<?php if (strlen(trim($menucek['omenu_banner_resimyol']))>0) {?>
<img width="100"  src="../<?php echo $menucek['omenu_banner_resimyol']; ?>">
<?php }else {?>
<img width="100"  src="../images/resim-yok.png">
<?php } ?>


</td>

                            <td class=""><b><?php echo $menucek['omenu_ad']; ?></b></td>
                          <!--  <td class=" "><?php echo $menucek['menu_ust']; ?> - ( <?php echo $omenu_id; ?> )</td>-->
                            <td class="text-center"><b><?php echo $menucek['omenu_sira']; ?></b></td>
                            <td class="text-center"><?php

                            if ($menucek['omenu_durum']>=0) {?>

                            <span class="badge badge-pill badge-soft-success font-size-11"><?php echo $menu["ak"]; ?></span>
                            <?php  } else {?>

                            <span class="badge badge-pill badge-soft-danger font-size-11"><?php echo $menu["pas"]; ?></span>
                            <?php }

                            ?></td>

                            <td class="text-center">

                              <a href="a-menu-duzenle.php?menu_id=<?php echo $menucek['omenu_id']; ?>" style="font-size: 20px;" class="text text-info"><button  class="btn btn-info btn-sm"><i class="ti-pencil-alt" aria-hidden="true"></i> <?php echo $menu["duzen"]; ?></button></a>

                            </td>

              

                          </tr>


                          <?php

                          $altmenusor=$db->prepare("SELECT * FROM menu WHERE menu_ust=:menu_id ORDER BY menu_sira ASC");
                          $altmenusor->execute(array(
                            'menu_id'=>$menu_id));
                            while ($altmenucek=$altmenusor->fetch(PDO::FETCH_ASSOC)) { ?>

                            <tr>

                              <td class=" "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i> &nbsp; <?php echo $altmenucek['omenu_ad']; ?></td>
                              <!--<td class=" "></td>-->
                              <td class="text-center"><?php echo $altmenucek['omenu_sira']; ?></td>
                              <td class="text-center "><?php

                              if ($altmenucek['omenu_durum']=="1") {?>

                              <span class="badge badge-pill badge-success  mt-1"><?php echo $menu["ak"]; ?></span>
                              <?php  } else {?>

                              <span class="badge badge-pill badge-danger  mt-1"><?php echo $menu["pas"]; ?></span>
                              <?php }

                              ?></td>

                              <td class="text-center">

                                <a href="a-menu-duzenle.php?omenu_id=<?php echo $altmenucek['omenu_id']; ?>" style="font-size: 20px;" class="text text-info"><button  class="btn btn-info btn-sm"><i class="ti-pencil-alt" aria-hidden="true"></i> <?php echo $menu["duzen"]; ?></button></a>

                              </td>

                           

                            </tr>




                            <?php  }} ?>




                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </section>


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
 <!-- DataTables -->
 <script src="../js/bootstrap-datatables/jquery.dataTables.min.js"></script>
 <script src="../js/bootstrap-datatables/dataTables.bootstrap4.min.js"></script>

 <script>
  $(function () {


   $("#example").DataTable({
    "pageLength": 20,
    "lengthChange": false,
    "language": {
     "url": "../js/bootstrap-datatables/Turkish.json"
   },
   "autoWidth": true,
   "paging":   true,
 });

 });
</script>


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

<script type="text/javascript">

 function silbtn(menuid){
  swal({
    title: "Silmek istediğinden emin misin?",
   // text: familya+" - "+taxon,
   icon: "warning",
   buttons: true,
   dangerMode: true,
   buttons: ["İptal", "Sil"],
 })
  .then((willDelete) => {
    if (willDelete) {

      window.location.href = "function/islem.php?omenusil=ok&menu_id="+menuid;

    }});
}


</script>
