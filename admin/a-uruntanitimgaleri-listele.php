<?php
require_once 'inc/header.php';

$uruntanitim_id=$_GET['uruntanitim_id'];
$uruntanitim_ad=$_GET['uruntanitim_ad'];

$uruntanitimgalerisor=$db->prepare("SELECT * FROM uruntanitimgaleri WHERE uruntanitim_id=:id");
$uruntanitimgalerisor->execute(array(
  'id'=>$_GET['uruntanitim_id']
));

//$uruntanitimgalericek=$uruntanitimgalerisor->fetch(PDO::FETCH_ASSOC);

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
                      <h5><i class="fas fa-info"></i>   <?php echo $menu["uruntagal"]; ?>  <small>( <?php  echo $uruntanitim_ad; ?> )</small></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["uruntagal"]; ?> </a></li>
          <li class="breadcrumb-item "><?php echo $menu["urunta"]; ?> </li>
            <li class="breadcrumb-item "><?php echo $menu["urun"]; ?> </li>
          <li class="breadcrumb-item active"><?php echo $menu["uruntagal"]; ?> </li>
        </ol>
      </div>
    </div>
</div>

          <p>
           <a href="a-uruntanitimgaleri-ekle.php?uruntanitim_id=<?php  echo $uruntanitim_id; ?>&uruntanitim_ad=<?php echo $uruntanitim_ad; ?>"> <button type="button" class="dropdown-toggle-split btn btn-success btn-sm"   aria-haspopup="true" aria-expanded="false"> <i class="ti-plus"> <?php echo $menu["fotoek"]; ?>  </i></button></a>
         </p> <br>
         <hr><br>
         <p>
           <div class="isotope columns-3 popup-gallery ">

            <?php

            while($uruntanitimgalericek=$uruntanitimgalerisor->fetch(PDO::FETCH_ASSOC)) {
              ?>

              <div class="grid-item  bg-light">
                <div class="portfolio-item" style="min-height: 200px">
                 <img src="../<?php echo $uruntanitimgalericek['uruntanitimgaleri_resimyol']; ?>" alt="">
                 <div class="portfolio-overlay " >
                  <a  style="color: white;cursor: pointer;" onclick="silbtn('<?php echo $uruntanitimgalericek['uruntanitimgaleri_id']; ?>','<?php echo $uruntanitimgalericek['uruntanitimgaleri_resimyol']; ?>','<?php echo $uruntanitimgalericek['uruntanitim_id']; ?>','<?php echo $uruntanitim_ad; ?>')"><i class="fa fa-trash fa-2x"></i></a>
                  <span class="text-white">  </span>
                </div>
                <a class="popup portfolio-img" href="../<?php echo $uruntanitimgalericek['uruntanitimgaleri_resimyol']; ?>"><i class="fa fa-arrows-alt"></i></a>
              </div>
            </div>

            <?php } ?>


          </div>

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

 function silbtn(uruntanitimgaleriid,resimyol,uruntanitimid,uruntanitimad){
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

      window.location.href = "function/islem.php?uruntanitimgalerisil=ok&uruntanitimgaleri_id="+uruntanitimgaleriid+"&uruntanitimgaleri_resimyol="+resimyol+"&uruntanitim_id="+uruntanitimid+"&uruntanitim_ad="+uruntanitimad;

    }});
}


</script>
