<?php
require_once 'inc/header.php';
?>



<!--=================================
 Main content -->


    <?php

    $siparissor=$db->prepare("SELECT * FROM siparis  ORDER BY siparis_id DESC ");
    $siparissor->execute();


     // $say=$siparissor->rowCount();
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["sipyo"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
          <li class="breadcrumb-item "><?php echo $menu["sipyo"]; ?></li>

        </ol>
      </div>
    </div>
</div>
          <p>
          <a href="a-siparis-ekle.php"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-plus"><?php echo $menu["sipek"]; ?> </i></button></a>
           <br> <br>
          <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                      <thead>
                        <tr >

                          <th class="column-title"><?php echo $menu["sipsir"]; ?></th>
                          <th class="column-title"><?php echo $menu["sipno"]; ?> </th>
                          <th class="column-title"><?php echo $menu["sipad"]; ?> </th>
                          <th class="column-title"><?php echo $menu["siptar"]; ?></th>
                          <th class="column-title"><?php echo $menu["dur"]; ?></th>
                          <th  class="column-title"></th>
                          <th  class="column-title"></th>

                        </tr>
                      </thead>

                      <tbody>

                        <?php

                        $siparissay=1;

                        while ($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) {

                          $siparis_id=$sipariscek['siparis_id'];
                          ?>
                          <tr>
                           <td class=" "> <?php echo $siparissay; ?> </td>
                           <td class=" ">#<?php echo $sipariscek['siparis_id']; ?></td>
                           <td class=" "><?php echo $sipariscek['siparis_urun']; ?></td>
                           <td class=" "><?php echo tcevir($sipariscek['siparis_tarih']); ?></td>
                           <td class=" "><?php

                           if ($sipariscek['siparis_durum']=="0") {?>

                           <span class="badge badge-pill badge-soft-warning font-size-11"><?php echo $menu["haz"]; ?></span>
                           <?php  } else if ($sipariscek['siparis_durum']=="1") {?>

                           <span class="badge badge-pill badge-soft-success font-size-11"><?php echo   $menu["tam"] ; ?></span>
                           <?php } else if ($sipariscek['siparis_durum']=="2") {?>

                           <span class="badge badge-pill badge-soft-danger font-size-11"><?php echo $menu["ip"]; ?></span>
                           <?php }else if ($sipariscek['siparis_durum']=="3") {?>

                           <span class="badge badge-pill badge-soft-secondary font-size-11"><?php echo $menu["teda"]; ?></span>
                           <?php }else if ($sipariscek['siparis_durum']=="4") {?>

                           <span class="badge badge-pill badge-soft-info font-size-11"><?php echo $menu["kargo"]; ?></span>
                           <?php }else if ($sipariscek['siparis_durum']=="5") {?>

                           <span class="badge badge-pill badge-soft-warning font-size-11"><?php echo $menu["odeme"]; ?></span>
                           <?php }

                           ?></td>

<td >

<a href="a-siparis-duzenle.php?siparis_id=<?php echo $sipariscek['siparis_id']; ?>" style="font-size: 20px;" class="text text-info"><button  class="btn btn-info btn-sm"><i class="ti-pencil-alt" aria-hidden="true"></i> <?php echo $menu["duzen"]; ?></button></a>

</td>

<td>

<a  onclick="silbtn('<?php echo $sipariscek['siparis_id']; ?>')" style="font-size: 20px;cursor: pointer;" class="text text-red"><button   class="btn btn-danger btn-sm"><i class="ti-trash" aria-hidden="true"></i><?php echo $menu["sil"]; ?></button></a>

</td>

</tr>
                            

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

 function silbtn(siparisid){
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

      window.location.href = "function/islem.php?siparissil=ok&siparis_id="+siparisid;

    }});
}


</script>
