<?php
require_once 'inc/header.php';

$urun_id=$_GET['urun_id'];


$urungalerisor=$db->prepare("SELECT * FROM urungaleri ");
$urungalerisor->execute(array(
  
));


?>

<!--=================================
 Main content -->


    <head>

      <link rel="stylesheet" type="text/css" href="dropzone/dropzone.css" />
      <script src="dropzone/dropzone.js"></script>

    </head>

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
                      <h5><i class="fas fa-info"></i>   <?php echo $menu["urungal"]; ?> </h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?> </a></li>
          <li class="breadcrumb-item "><?php echo $menu["urunyo"]; ?> </li>
          <li class="breadcrumb-item active"><?php echo $menu["urungal"]; ?> </li>
        </ol>
      </div>
    </div>
</div>

  <!-- main body -->




  <div class="row">
    <div class="col-md-12">
      <div class="card card-statistics h-100">
        <div class="card-body">

       
         
           <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">

            
 <tr>

 <th><?php echo $menu["urunres"]; ?></th>
 <th>Urun ID</th>
 <th>Urun Isim</th>
 
 <th></th>
 <th></th>
 <th></th>

</tr>
</thead>

<tbody>
<?php

            while($urungalericek=$urungalerisor->fetch(PDO::FETCH_ASSOC)) {
              ?>
 <tr>

<td>
              <div class="grid-item">
                <div class="portfolio-item">
                <?php if (strlen(trim($urungalericek['urungaleri_resimyol']))>0) {?>
                             <img width="100"  src="../<?php echo $urungalericek['urungaleri_resimyol']; ?>">
                             <?php }else {?>
                             <img width="100"  src="../images/resim-yok.png">
                             <?php } ?>
                 <div class="portfolio-overlay">
                  <a  style="color: white;cursor: pointer;" onclick="silbtn('<?php echo $urungalericek['urungaleri_id']; ?>','<?php echo $urungalericek['urungaleri_resimyol']; ?>','<?php echo $urungalericek['urun_id']; ?>','<?php echo $urun_ad; ?>')"><i class="fa fa-trash fa-2x"></i></a>
                  <span class="text-white">  </span>
                </div>
                <a class="popup portfolio-img" href="../<?php echo $urungalericek['urungaleri_resimyol']; ?>"><i class="fa fa-arrows-alt"></i></a>
              </div>
            </div>

            </td>
                           <td ><?php echo $urungalericek['urun_id']; ?></td>
                           <?php 
                           $urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id ");
                           $urunsor->execute(array(
                            'urun_id' => $urungalericek['urun_id']
                           ));
                           $uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
                           ?>
                           <td ><?php echo $uruncek['urun_ad']; ?></td>
                       

                        
                       
                         <td class="text-center">
                         <a href="a-urungaleri-ekle.php?urun_id=<?php  echo $urungalericek['urun_id']; ?>"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-plus"><?php echo $menu["fotoek"]; ?>  </i></button></a>

                         </td>
                         <td class="text-center">
                          <a  onclick="silbtn('<?php echo $urungalericek['urungaleri_id']; ?>','<?php echo  $urungalericek['urungaleri_resimyol']; ?>')"><button   class="btn btn-danger btn-sm"><i class="ti-trash" aria-hidden="true"></i> <?php echo $menu["sil"]; ?></button></a>

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
          </div>

        </p>
      </div>
    </div>
  </div>
</div>
</div>
  </div>





<!--=================================
 wrapper -->

<!--=================================
 footer -->





 <?php require_once 'inc/footer.php';?>



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

 function silbtn(urungaleriid,resimyol){
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

      window.location.href = "function/islem.php?urungalerisil=ok&urungaleri_id="+urungaleriid+"&urungaleri_resimyol="+resimyol;

    }});
}


</script>
