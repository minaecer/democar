<?php
require_once 'inc/header.php';
?>



    <?php

    $ekatalogsor=$db->prepare("select * from ekatalog order by  ekatalog_sira ASC ");
    $ekatalogsor->execute();
    $ekatalogsay=$ekatalogsor->rowCount();
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["kato"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
          <li class="breadcrumb-item "><?php echo $menu["kato"]; ?></li>

        </ol>
      </div>
    </div>
</div>
  <!-- main body -->

          <p>



                    <a href="a-ekatalog-ekle.php"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-plus"> <?php echo $menu["katoek"]; ?></i></button></a>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                        <tr>
                          <th><?php echo $menu["katores"]; ?></th>
                          <th><?php echo $menu["katoad"]; ?></th>
                          <th class="text-center"><?php echo $menu["katono"]; ?></th>
                          <th class="text-center"><?php echo $menu["katodur"]; ?></th>
                          <th></th>

                        </tr>
                      </thead>

                      <tbody>

                        <?php

                        while($ekatalogcek=$ekatalogsor->fetch(PDO::FETCH_ASSOC)) {
                          ?>

                          <tr>

                            <td><img width="100" src="../<?php echo $ekatalogcek['ekatalog_resimyol']; ?>"></td>
                            <td ><?php echo $ekatalogcek['ekatalog_ad']; ?></td>
                            <td class="text-center"><?php echo $ekatalogcek['ekatalog_sira']; ?></td>
                            <td class="text-center"><?php

                            if ($ekatalogcek['ekatalog_durum']=="1") {?>

                            <span class="badge badge-pill badge-soft-success font-size-11"><?php echo $menu["ak"]; ?></span>
                            <?php  } else {?>

                            <span class="badge badge-pill badge-soft-danger font-size-11"><?php echo $menu["pas"]; ?></span>
                            <?php }

                            ?></td>

                            <td class="text-center"><a href="a-ekatalog-duzenle.php?ekatalog_id=<?php echo $ekatalogcek['ekatalog_id']; ?>"><button  class="btn btn-info btn-sm"><i class="ti-pencil-alt" aria-hidden="true"></i> <?php echo $menu["duzen"]; ?></button></a>
                              <a onclick="silbtn('<?php echo $ekatalogcek['ekatalog_id']; ?>','<?php echo $ekatalogcek['ekatalog_resimyol']; ?>','<?php echo $ekatalogcek['ekatalog_dosya']; ?>')"><button   class="btn btn-danger btn-sm"><i class="ti-trash" aria-hidden="true"></i> <?php echo $menu["sil"]; ?></button></a>

                            </td>


                          </tr>

                          <?php } ?>


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

 function silbtn(ekatalogid,resimyol,dosyayol){
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

      window.location.href = "function/islem.php?ekatalogsil=ok&ekatalog_id="+ekatalogid+"&ekatalog_resimyol="+resimyol+"&ekatalog_dosya="+dosyayol;

    }});
}


</script>
