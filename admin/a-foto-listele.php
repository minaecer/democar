<?php
require_once 'inc/header.php';
?>



    <?php

    $fotosor=$db->prepare("select * from foto order by  foto_sira ASC ");
    $fotosor->execute();
    $fotosay=$fotosor->rowCount();
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["fotolar"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["fotolar"]; ?></li>

        </ol>
      </div>
    </div>
</div>
          <p>


                    <a href="a-foto-ekle.php"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-plus"><?php echo $menu["fotoek"]; ?> </i></button></a>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                        <tr>
                          <th><?php echo $menu["foto"]; ?></th>
                          <th><?php echo $menu["fotoad"]; ?></th>
                          <th class="text-center"><?php echo $menu["fotono"]; ?></th>
                          <th class="text-center"><?php echo $menu["fotodur"]; ?></th>
                          <th></th>

                        </tr>
                      </thead>

                      <tbody>

                        <?php

                        while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC)) {
                          ?>

                          <tr>

                            <td><img width="150" src="../<?php echo $fotocek['foto_resimyol']; ?>"></td>
                            <td ><?php echo $fotocek['foto_ad']; ?></td>
                            <td class="text-center"><?php echo $fotocek['foto_sira']; ?></td>
                            <td class="text-center"><?php

                            if ($fotocek['foto_durum']=="1") {?>

                            <span class="badge badge-pill badge-soft-success font-size-11"><?php echo $menu["ak"]; ?></span>
                            <?php  } else {?>

                            <span class="badge badge-pill badge-soft-danger font-size-11"><?php echo $menu["pas"]; ?></span>
                            <?php }

                            ?></td>

                            <td class="text-center"><a href="a-foto-duzenle.php?foto_id=<?php echo $fotocek['foto_id']; ?>"><button  class="btn btn-info btn-sm"><i class="ti-pencil-alt" aria-hidden="true"></i><?php echo $menu["duzen"]; ?></button></a>
                              <a onclick="silbtn('<?php echo $fotocek['foto_id']; ?>','<?php echo $fotocek['foto_resimyol']; ?>')"><button   class="btn btn-danger btn-sm"><i class="ti-trash" aria-hidden="true"></i><?php echo $menu["sil"]; ?></button></a>

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

 function silbtn(fotoid,resimyol){
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

      window.location.href = "function/islem.php?fotosil=ok&foto_id="+fotoid+"&foto_resimyol="+resimyol;

    }});
}


</script>
