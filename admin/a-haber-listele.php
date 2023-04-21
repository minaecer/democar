<?php
require_once 'inc/header.php';
?>



<!--=================================
 Main content -->




    <?php

    $habersor=$db->prepare("select * from haber order by  haber_id DESC ");
    $habersor->execute();
    $habersay=$habersor->rowCount();
    ?>


<!--=================================
 Main content -->




 <!--=================================
  wrapper -->


      <!-- Content Header (Page header) -->

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
                      <h5><i class="fas fa-info"></i>  <?php echo $menu["blog"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
          <li class="breadcrumb-item "> <?php echo $menu["blog"]; ?></li>

        </ol>
      </div>
    </div>
</div>

  <!-- main body -->

          <p>


                    <a href="a-haber-ekle.php"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-plus">   <?php echo $menu["blogek"]; ?> </i></button></a>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                        <tr>
                          <th><?php echo $menu["blogres"]; ?></th>
                          <th><?php echo $menu["blogad"]; ?></th>
                          <th class="text-center"><?php echo $menu["blogno"]; ?></th>
                          <th class="text-center"><?php echo $menu["dur"]; ?></th>
                          <th></th>

                        </tr>
                      </thead>

                      <tbody>

                        <?php

                        $habersira=1;

                        while($habercek=$habersor->fetch(PDO::FETCH_ASSOC)) {
                          ?>

                          <tr>

                            <td><img width="150" src="../<?php echo $habercek['haber_resimyol']; ?>"></td>
                            <td ><?php echo $habercek['haber_ad']; ?></td>
                            <td class="text-center"><?php echo $habersira; ?></td>
                            <td class="text-center"><?php

                            if ($habercek['haber_durum']=="1") {?>

                            <span class="badge badge-pill badge-soft-success font-size-11"><?php echo $menu["ak"]; ?></span>
                            <?php  } else {?>

                            <span class="badge badge-pill badge-soft-danger font-size-11"><?php echo $menu["pas"]; ?></span>
                            <?php }

                            ?></td>

                            <td class="text-center"><a href="a-haber-duzenle.php?haber_id=<?php echo $habercek['haber_id']; ?>"><button  class="btn btn-info btn-sm"><i class="ti-pencil-alt" aria-hidden="true"></i> <?php echo $menu["duzen"]; ?></button></a>
                              <a onclick="silbtn('<?php echo $habercek['haber_id']; ?>','<?php echo $habercek['haber_resimyol']; ?>')"><button   class="btn btn-danger btn-sm"><i class="ti-trash" aria-hidden="true"></i> <?php echo $menu["sil"]; ?></button></a>

                            </td>


                          </tr>

                          <?php $habersira++;} ?>


                        </tbody>
                      </table>
                    </div>
                  </div>
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

 function silbtn(haberid,resimyol){
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

      window.location.href = "function/islem.php?habersil=ok&haber_id="+haberid+"&haber_resimyol="+resimyol;

    }});
}


</script>
