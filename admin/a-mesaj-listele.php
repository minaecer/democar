<?php
require_once 'inc/header.php';
?>



<!--=================================
 Main content -->



    <?php

    $mesajsor=$db->prepare("select * from mesajlar order by  mesaj_id ASC ");
    $mesajsor->execute();
    $mesajsay=$mesajsor->rowCount();
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
                          <h5><i class="fas fa-info"></i><?php echo $menu["mesajlis"] ; ?></h5>


          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
              <li class="breadcrumb-item "><?php echo $menu["icerikyo"]; ?></li>
                <li class="breadcrumb-item "><?php echo $menu["mesajlis"] ; ?></li>

            </ol>
          </div>
        </div>
    </div>
          <p>


                    

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                        <tr>
                          <th><?php echo $menu["mail"] ; ?></th>
                          <th><?php echo $menu["ad"] ; ?></th>
                          <th class="text-center"><?php echo $menu["icerik"] ; ?></th>
                        
                          <th></th>

                        </tr>
                      </thead>

                      <tbody>

                        <?php

                        while($mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC)) {
                          ?>

                          <tr>

                         
                            <td ><?php echo $mesajcek['mesaj_mail']; ?></td>
                            <td class="text-center"><?php echo $mesajcek['mesaj_isim']; ?></td>
                            <td class="text-center"><?php

echo $mesajcek['mesaj_icerik']; ?>
                            </td>

                            <td class="text-center">
                              <a onclick="silbtn('<?php echo $mesajcek['mesaj_id']; ?>')"><button   class="btn btn-danger btn-sm"><i class="ti-trash" aria-hidden="true"></i> <?php echo $menu["sil"]; ?></button></a>

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

 function silbtn(mesajid){
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

      window.location.href = "function/islem.php?mesajsil=ok&mesaj_id="+mesajid;

    }});
}


</script>
