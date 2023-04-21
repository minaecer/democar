<?php
require_once 'inc/header.php';
?>



<!--=================================
 Main content -->



    <?php


    $urungrupsor=$db->prepare("SELECT * FROM urungrup  ORDER BY urungrup_sira ASC");
    $urungrupsor->execute();


     // $say=$urungrupsor->rowCount();
    ?>


<!--=================================
 Main content -->






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
                       <h5><i class="fas fa-info"></i>  <?php echo $menu["urungr"]; ?></h5>


       <div class="col-lg-12">
         <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.php" class="default-color"> <?php echo $menu["anasay"]; ?></a></li>
           <li class="breadcrumb-item "> <?php echo $menu["urunta"]; ?></li>
           <li class="breadcrumb-item active "> <?php echo $menu["urungr"]; ?></li>

         </ol>
       </div>
     </div>
 </div>

          <p>

                    <a href="a-urungrup-ekle.php"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-plus">  <?php echo $menu["urungrek"]; ?></i></button></a>
                    <br> <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                        <tr >

                          <th class="column-title">  </th>
                          <th class="column-title"> <?php echo $menu["urungrad"]; ?> </th>
                          <th class="column-title text-center"> <?php echo $menu["hizmetno"]; ?> </th>
                          <th class="column-title text-center"> <?php echo $menu["dur"]; ?></th>
                          <th class="column-title text-center"> <?php echo $menu["anasay"]; ?></th>
                          <th  class="column-title"></th>
                          <th  class="column-title"></th>

                        </tr>
                      </thead>

                      <tbody>

                        <?php


                        while ($urungrupcek=$urungrupsor->fetch(PDO::FETCH_ASSOC)) {

                          $urungrup_id=$urungrupcek['urungrup_id'];
                          ?>
                          <tr>

                           <td >         <?php if (strlen(trim($urungrupcek['urungrup_resimyol']))>0) {?>
                            <img width="100"  src="../<?php echo $urungrupcek['urungrup_resimyol']; ?>">
                            <?php }else {?>
                            <img width="100"  src="../images/resim-yok.png">
                            <?php } ?></td>

                            <td ><?php echo $urungrupcek['urungrup_ad']; ?></td>

                            <td class="text-center" ><?php echo $urungrupcek['urungrup_sira']; ?></td>

                            <td class="text-center"><?php

                            if ($urungrupcek['urungrup_durum']=="1") {?>

                            <span class="badge badge-pill badge-soft-success font-size-11">AKTİF</span>
                            <?php  } else {?>

                            <span class="badge badge-pill badge-soft-danger font-size-11">PASİF</span>
                            <?php }

                            ?></td>


                            <td class="text-center"><?php

                            if ($urungrupcek['urungrup_anasayfa']=="1") {?>

                            <span class="badge badge-pill badge-success  mt-1"> <?php echo $menu["ak"]; ?></span>
                            <?php  } else {?>

                            <span class="badge badge-pill badge-danger  mt-1"> <?php echo $menu["pas"]; ?></span>
                            <?php }

                            ?></td>

                            <td >

                              <a href="a-urungrup-duzenle.php?urungrup_id=<?php echo $urungrupcek['urungrup_id']; ?>" style="font-size: 20px;" class="text text-info"><button  class="btn btn-info btn-sm"><i class="ti-pencil-alt" aria-hidden="true"></i>  <?php echo $menu["duzen"]; ?></button></a>

                            </td>

                            <td>

                              <a  onclick="silbtn('<?php echo $urungrupcek['urungrup_id']; ?>','<?php echo $urungrupcek['urungrup_resimyol']; ?>')" style="font-size: 20px;cursor: pointer;" class="text text-red"><button   class="btn btn-danger btn-sm"><i class="ti-trash" aria-hidden="true"></i>  <?php echo $menu["sil"]; ?></button></a>

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

 function silbtn(urungrupid,resimyol){
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

      window.location.href = "function/islem.php?urungrupsil=ok&urungrup_id="+urungrupid+"&urungrup_resimyol="+resimyol;;

    }});
}


</script>
