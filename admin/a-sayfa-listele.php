<?php
require_once 'inc/header.php';
?>



<!--=================================
 Main content -->



    <?php

    $sayfasor=$db->prepare("select * from sayfa  ");
    $sayfasor->execute();
    $sayfasay=$sayfasor->rowCount();
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
                        <h5><i class="fas fa-info"></i> <?php echo $menu["sayfayo"]; ?></h5>


        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
            <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
            <li class="breadcrumb-item "> <?php echo $menu["sayfayo"]; ?></li>

          </ol>
        </div>
      </div>
  </div>
          <p>


                    <a href="a-sayfa-ekle.php"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-plus"> <?php echo $menu["sayfaek"]; ?> </i></button></a>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">

                        <tr>
                          <th><?php echo $menu["sayfares"]; ?></th>
                          <th><?php echo $menu["sayfad"]; ?></th>
                          <th class="text-center"><?php echo $menu["hizmetno"]; ?></th>
                          <th class="text-center"><?php echo $menu["dur"]; ?></th>
                          <th></th>

                        </tr>
                      </thead>

                      <tbody>

                        <?php

                        $sayfasira=1;

                        while($sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC)) {
                          ?>

                          <tr>

                            <td>
                             <?php if (strlen(trim($sayfacek['sayfa_resimyol']))>0) {?>
                             <img width="150"  src="../<?php echo $sayfacek['sayfa_resimyol']; ?>">
                             <?php }else {?>
                             <img width="150"  src="../images/resim-yok.png">
                             <?php } ?>
                           </td>
                           <td ><?php echo $sayfacek['sayfa_ad']; ?></td>
                           <td class="text-center"><?php echo $sayfasira; ?></td>
                           <td class="text-center"><?php

                           if ($sayfacek['sayfa_durum']=="1") {?>

                           <span class="badge badge-pill badge-soft-success font-size-11"><?php echo $menu["ak"]; ?></span>
                           <?php  } else {?>

                           <span class="badge badge-pill badge-soft-danger font-size-11"><?php echo $menu["pas"]; ?></span>
                           <?php }

                           ?></td>

                           <td class="text-center"><a href="a-sayfa-duzenle.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>"><button  class="btn btn-info btn-sm"><i class="ti-pencil-alt" aria-hidden="true"></i> <?php echo $menu["duzen"]; ?></button></a>
                            <a onclick="silbtn('<?php echo $sayfacek['sayfa_id']; ?>','<?php echo $sayfacek['sayfa_resimyol']; ?>')"><button   class="btn btn-danger btn-sm"><i class="ti-trash" aria-hidden="true"></i> <?php echo $menu["sil"]; ?></button></a>

                          </td>


                        </tr>

                        <?php $sayfasira++;} ?>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




        </p>




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







<script type="text/javascript">

 function silbtn(sayfaid,resimyol){
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

      window.location.href = "function/islem.php?sayfasil=ok&sayfa_id="+sayfaid+"&sayfa_resimyol="+resimyol;

    }});
}


</script>
