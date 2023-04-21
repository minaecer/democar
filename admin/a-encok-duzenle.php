<?php
require_once 'inc/header.php';
?>

<?php

$encoksor=$db->prepare("SELECT * from encoksatan where id=:id");
$encoksor->execute(array(
  'id' => $_GET['id']
));
$encokcek=$encoksor->fetch(PDO::FETCH_ASSOC);

?>
<div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- /.content-header -->
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["urunyo"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
    
          <li class="breadcrumb-item active"><?php echo $menu["encok"]; ?></li>
        </ol>
      </div>
    </div>
</div>
          <p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
  
  <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
           <form action="function/islem.php" method="POST" enctype="multipart/form-data">

                               
	
				
							<div class="form-group">
								<div class="row">

									<input type="hidden" name="id" value="<?php echo $encokcek['id']; ?>"  class="form-control">
									<div class="form-group">
                                    <div class="form-group">
                                                <label ><b><?php echo $menu["urunres"]; ?></b></label>
                                                <div class="">
                                                <?php if (strlen(trim($encokcek['encok_resimyol']))>0) {?>
                                                <img width="100"  src="../<?php echo $encokcek['encok_resimyol']; ?>">
                                                <?php }else {?>
                                                <img width="100"  src="../images/resim-yok.png">
                                                <?php } ?>

                                                </div>
                                            </div>

                                            <label ><b><?php echo $menu["urunres"]; ?></b></label>

                                        <div class="was-validated input-group custom-file ">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="encok_resimyol" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
                                            <label class="custom-file-label" for="validatedCustomFile"> </label>
                                            <div class="invalid-feedback"><?php echo $menu["urunres"]; ?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
										<label><b> <?php echo $menu["urunad"]; ?> </b></label>
										<input type="text" name="encok_ad" value="<?php echo $encokcek['encok_ad']; ?>" class="form-control">
									</div>
									
									<div class="form-group">
										<label><b>Urun İcerigi</b> </label>
										<input type="text" name="encok_icerik" value="<?php echo $encokcek['encok_icerik']; ?>" class="form-control">
									
			
										
									
									</div>
                  <div class="form-group">
            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="encok_durum"  <?php if ($encokcek['encok_durum']==1) {?> checked=""<?php   } ?>  />
              <span></span>

            </label>
            </div>
            <div class="form-group">
       <label ><b>Title</b></label><br>
     </label>
     <div class="form-group">

     <input type="text" class="form-control" name="encok_title"  value="<?php echo $encokcek['encok_title']; ?> "  >

    </div>
  </div>
  <div class="form-group">
       <label ><b>Description</b></label><br>
     </label>
     <div class="form-group">

      <textarea  class="form-control" rows="5" id="editor1" name="encok_description"   ><?php echo $encokcek['encok_description']; ?> </textarea>

    </div>
  </div>
            <div class="card-footer bg-transparent text-center">
										<div>
											<button style="cursor: pointer;" type="submit" name="encokduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i><?php echo $menu["sub"]; ?></button>
											
										</div>
									</div>
								</div>
							</div>
						</form>
				
					</div>
				</div>
			</div>
		</div>
    </div>
		</div>
    </div>
		</div>
        </div>
		</div>
        </div>
		</div>
        </div>
		</div>
        </div>
		</div>
        </div>
		</div>
		<?php include 'inc/footer.php'; ?>
 