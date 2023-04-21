<?php
require_once 'inc/header.php';
?>



    <?php


    $kategorisor=$db->prepare("SELECT * FROM kategori  ORDER BY kategori_sira ASC");
    $kategorisor->execute();


     // $say=$kategorisor->rowCount();
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
                            <h5><i class="fas fa-info"></i><?php echo $menu["kategduz"] ?></h5>


            <div class="col-lg-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"] ?></a></li>
                <li class="breadcrumb-item "><?php echo $menu["urunyo"] ?></li>
                <li class="breadcrumb-item active "><?php echo $menu["kategduz"] ?></li>

              </ol>
            </div>
          </div>
      </div>
          <p>

                    <a href="a-kategori-ekle.php"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-plus"> <?php echo $menu["kategek"] ?> </i></button></a>
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
                         <th class="column-title"><?php echo $menu["kategad"] ?> </th>
                         <th class="column-title text-center"><?php echo $menu["kategno"] ?> </th>
                          <!--  <th class="column-title text-center">Anasayfa Durumu </th>-->
                         <th  class="column-title"></th>
                         <th  class="column-title"></th>

                       </tr>
                     </thead>

                     <tbody>

                      <?php


                      while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {

                        $kategori_id=$kategoricek['kategori_id'];
                        ?>
                        <tr>
                        <td>    

<?php if (strlen(trim($kategoricek['kategori_resimyol']))>0) {?>
<img width="100"  src="../<?php echo $kategoricek['kategori_resimyol']; ?>">
<?php }else {?>
<img width="100"  src="../images/resim-yok.png">
<?php } ?>


</td>

                         <td ><?php echo $kategoricek['kategori_ad']; ?></td>

                         <td class="text-center" ><?php echo $kategoricek['kategori_sira']; ?></td>

                       <!--  <td class="text-center"><?php

                         if ($kategoricek['kategori_anasayfa']=="1") {?>

                         <span class="badge badge-pill badge-success  mt-1">AKTİF</span>
                         <?php  } else {?>

                         <span class="badge badge-pill badge-danger  mt-1">PASİF</span>
                         <?php }

                         ?></td>-->

                         <td class="text-center">

                          <a href="a-kategori-duzenle.php?kategori_id=<?php echo $kategoricek['kategori_id']; ?>" style="font-size: 20px;" class="text text-info"><button  class="btn btn-info btn-sm"><i class="ti-pencil-alt" aria-hidden="true"></i> <?php echo $menu["duzen"] ?></button></a>

                        </td>

                        <td class="text-center">

                          <a  onclick="silbtn('<?php echo $kategoricek['kategori_id']; ?>')" style="font-size: 20px;cursor: pointer;" class="text text-red"><button   class="btn btn-danger btn-sm"><i class="ti-trash" aria-hidden="true"></i> <?php echo $menu["sil"] ?></button></a>

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

 function silbtn(kategoriid,resimyol){
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

      window.location.href = "function/islem.php?kategorisil=ok&kategori_id="+kategoriid+"&kategori_resimyol="+resimyol;;

    }});
}


</script>
