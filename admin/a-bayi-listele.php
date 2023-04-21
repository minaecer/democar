<?php
require_once 'inc/header.php';
?>



<!--=================================
 Main content -->


    <?php

    $bayisor=$db->prepare("SELECT * FROM bayi  ORDER BY bayi_sira ASC ");
    $bayisor->execute();


     // $say=$bayisor->rowCount();
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["bayi"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
          <li class="breadcrumb-item "> <?php echo $menu["bayi"]; ?></li>

        </ol>
      </div>
    </div>
</div>

          <p>

                    <a href="a-bayi-ekle.php"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-plus"> <?php echo $menu["bayiek"]; ?> </i></button></a>
                    <br> <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                        <tr >

                          <th class="column-title"><?php echo $menu["bayisir"]; ?></th>
                          <th class="column-title"><?php echo $menu["bayis"]  ; ?> </th>
                          <th class="column-title"><?php echo   $menu["bayitel"]; ?> </th>
                          <th class="column-title"><?php echo $menu["bayimail"] ; ?></th>
                          <th class="column-title"><?php echo   $menu["dur"]; ?></th>
                          <th  class="column-title"></th>
                          <th  class="column-title"></th>

                        </tr>
                      </thead>

                      <tbody>

                        <?php


                        while ($bayicek=$bayisor->fetch(PDO::FETCH_ASSOC)) {

                          $bayi_id=$bayicek['bayi_id'];
                          ?>
                          <tr>
                           <td class=" "><?php echo $bayicek['bayi_sira']; ?></td>
                           <td class=" "><?php echo $bayicek['bayi_ad']; ?></td>
                           <td class=" "><?php echo $bayicek['bayi_tel']; ?></td>
                           <td class=" "><?php echo $bayicek['bayi_mail']; ?></td>
                           <td class=" "><?php

                           if ($bayicek['bayi_durum']=="1") {?>

                           <span class="badge badge-pill badge-soft-success font-size-11"><?php echo $menu["ak"]; ?></span>
                           <?php  } else {?>

                           <span class="badge badge-pill badge-soft-danger font-size-11"><?php echo $menu["pas"]; ?></span>
                           <?php }

                           ?></td>

                           <td >

                            <a href="a-bayi-duzenle.php?bayi_id=<?php echo $bayicek['bayi_id']; ?>" style="font-size: 20px;" class="text text-info"><button  class="btn btn-info btn-sm"><i class="ti-pencil-alt" aria-hidden="true"></i> <?php echo $menu["duzen"]; ?></button></a>

                          </td>

                          <td>

                            <a  onclick="silbtn('<?php echo $bayicek['bayi_id']; ?>')" style="font-size: 20px;cursor: pointer;" class="text text-red"><button   class="btn btn-danger btn-sm"><i class="ti-trash" aria-hidden="true"></i><?php echo $menu["sil"]; ?></button></a>

                          </td>

                        </tr>





                        <?php  } ?>




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
  title: "İşlem Tamamlandı",
  icon: "success",
  button: "Tamam!",
});
</script>


<?php }  else if($_GET['durum']=="no"){?>
<script type="text/javascript">
 swal({
  title: "İşlem Hatalı",
  icon: "error",
  button: "Tamam!",
});
</script>


<?php } ?>

<script type="text/javascript">

 function silbtn(bayiid){
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

      window.location.href = "function/islem.php?bayisil=ok&bayi_id="+bayiid;

    }});
}


</script>
