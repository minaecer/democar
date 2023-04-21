<?php
require_once 'inc/header.php';
?>

<!--=================================
 Main content -->


    <?php


$slayt=$db->prepare("SELECT * from slayt order by slayt_id ASC");
$slayt->execute(array(0));

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["posteryo"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
    
          <li class="breadcrumb-item active"> <?php echo $menu["posteryo"]; ?></li>
        </ol>
      </div>
    </div>
</div>
          <p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
		<h2> <?php echo $menu["posteryo"]; ?></h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
		

      <div class="card-body">
					
					<form method="POST" action="function/islem.php" class="form-horizontal">
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
                                <label ><b><?php echo $menu["resyuk"]; ?></b></label>

<div class="was-validated input-group custom-file ">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="slayt_resim" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF"  required>
        <label class="custom-file-label" for="validatedCustomFile"> </label>
        <div class="invalid-feedback"><?php echo $menu["resyuk"]; ?></div>
      </div>
    </div>
								<div class="col-md-2">
									<label><?php echo $menu["posterad"]; ?></label>
									<input type="text" name="slayt_baslik"  class="form-control">
								</div>
								<div class="col-md-2">
									<label><?php echo $menu["acik"]; ?></label>
									<input type="text" name="slayt_aciklama" class="form-control">
								</div>
							
								
                <div class="col-md-2">
                <div class="checkbox  checbox-switch switch-success">
                  <label ><b><?php echo $menu["dur"]; ?></b></label><br>
                  <label>
                    <input type="checkbox"  name="slayt_durum" checked="" />
                    <span></span>

                  </label>
                </div>
                </div>
								<div class="col-md-2">
									<label></label><div>
										<button style="cursor: pointer;" type="submit" name="slaytekle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i><?php echo $menu["sub"]; ?></button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<br />
					<hr>
					<br />
	
					<?php 
					while ($slaytprint=$slayt->fetch(PDO::FETCH_ASSOC)) {
						?>
						<form method="POST" action="function/islem.php" class="form-horizontal">
							<div class="form-group">
								<div class="row">

									<input type="hidden" name="slayt_id" value="<?php echo $slaytprint['slayt_id']; ?>"  class="form-control">
									<div class="col-md-3">
                                    <div class="form-group">
                                                <label ><b><?php echo $menu["resyuk"]; ?></b></label>
                                                <div class="">
                                                <?php if (strlen(trim($slaytprint['slayt_resim']))>0) {?>
                                                <img width="100"  src="../<?php echo $slaytprint['slayt_resim']; ?>">
                                                <?php }else {?>
                                                <img width="100"  src="../images/resim-yok.png">
                                                <?php } ?>

                                                </div>
                                            </div>

                                            <label ><b></b></label>

                                        <div class="was-validated input-group custom-file ">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="slayt_resim" accept=".jpg, .png, .jpeg, .JPG, .PNG, .JPEG, .gif, .GIF" >
                                            <label class="custom-file-label" for="validatedCustomFile"> </label>
                                            <div class="invalid-feedback"><?php echo $menu["urunres"]; ?></div>
                                            </div>
                                        </div>
								<div class="col-md-2">
										<label><?php echo $menu["posterad"]; ?></label>
										<input type="text" name="slayt_baslik" value="<?php echo $slaytprint['slayt_baslik']; ?>" class="form-control">
									</div>
									
									<div class="col-md-2">
										<label><?php echo $menu["acik"]; ?></label>
										<input type="text" name="slayt_aciklama" value="<?php echo $slaytprint['slayt_aciklama']; ?>" class="form-control">
									
					
									</div>
                  <div class="col-md-2 ">
            <label ><b><?php echo $menu["dur"]; ?></b></label><br>
            <label>
              <input type="checkbox"  name="slayt_durum"  <?php if ($slaytprint['slayt_durum']==1) {?> checked=""<?php   } ?>  />
              <span></span>

            </label></div>
          
          <div class="col-md-2">
										<div>
											<button style="cursor: pointer;" type="submit" name="slaytduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i><?php echo $menu["sub"]; ?></button>
											<a href="function/islem.php?slaytsil=ok&slayt_id=<?php echo $slaytprint['slayt_id']; ?>" style="cursor: pointer;" type="submit" name="encoksil" class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i><?php echo $menu["sil"]; ?></a>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php } ?>
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
 