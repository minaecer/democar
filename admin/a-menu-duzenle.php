<?php
require_once 'inc/header.php';
error_reporting(0);

?>

<!--=================================
 Main content -->


    <?php


$omenu=$db->prepare("SELECT * from omenu order by omenu_sira ASC");
$omenu->execute(array(0));

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
                      <h5><i class="fas fa-info"></i> <?php echo $menu["menuyo"]; ?></h5>


      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="default-color"><?php echo $menu["anasay"]; ?></a></li>
    
          <li class="breadcrumb-item active"><?php echo $menu["menuyo"]; ?></li>
        </ol>
      </div>
    </div>
</div>
          <p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
		<h2><?php echo $menu["menuyo"]; ?></h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
		

      <div class="card-body">
	
					
					<form method="POST" action="function/islem.php" class="form-horizontal">
					<div class="form-group">
							<div class="row">
							
            
			
		  
								<div class="col-md-2">
									<label><?php echo $menu["menulerad"]; ?></label>
									<input type="text" name="omenu_ad"  class="form-control">
								</div>
								<div class="col-md-2">
									<label>Menü Link</label>
									<input type="text" name="omenu_link" placeholder="Menü linki giriniz." class="form-control">
								</div>
								<div class="col-md-2">
									<label><?php echo $menu["menulersir"]; ?></label>
									<input type="text" name="omenu_sira" class="form-control">
								</div>
								<div class="col-md-2">
									<label><?php echo $menu["menulerust"]; ?></label>
									<select name="omenu_ust" class="form-control m-b">
										<option value="0">-ÜST MENÜ YOK-</option>
                    </div>
     
          
										<?php  
										$menulist=$db->prepare("SELECT * from omenu  order by omenu_sira DESC");
										$menulist->execute(); 
										while($menulistprint=$menulist->fetch(PDO::FETCH_ASSOC)) { ?>
										<option value="<?php echo $menulistprint['omenu_id']; ?>"><?php echo $menulistprint['omenu_ad']; ?></option>
										<?php } ?>
									</select>
								</div>
              
								<div class="col-md-2">
									<label></label><div>
										<button style="cursor: pointer;" type="submit" name="omenuekle" class="btn btn-success btn-icon"><?php echo $menu["sub"]; ?></button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<br />
					<hr>
					<br />
	
					<?php 
					while ($omenuprint=$omenu->fetch(PDO::FETCH_ASSOC)) {
						?>
						<form method="POST" action="function/islem.php" class="form-horizontal">
							<div class="form-group">
								<div class="row">

									<input type="hidden" name="omenu_id" value="<?php echo $omenuprint['omenu_id']; ?>"  class="form-control">
									
										<div class="col-md-2">
										<label><?php echo $menu["menulerad"]; ?></label>
										<input type="text" name="omenu_ad" value="<?php echo $omenuprint['omenu_ad']; ?>" class="form-control">
									</div>
									<div class="col-md-2">
										<label>Menü Link</label>
										<input type="text" name="omenu_link" value="<?php echo $omenuprint['omenu_link']; ?>" class="form-control">
									</div>
							<div class="col-md-2">
										<label><?php echo $menu["menulersir"]; ?></label>
										<input type="text" name="omenu_sira" value="<?php echo $omenuprint['omenu_sira']; ?>" class="form-control">
									</div>
									<input type="hidden" name="eski_ust" value="<?php echo $omenuprint['omenu_ust']; ?>" class="form-control">
									<div class="col-md-2">
										<label>Üst Menü</label>
										<input type="hidden" name="eski_ust" value="<?php echo $omenuprint['omenu_ust']; ?>" class="form-control">
										<select name="omenu_ust" class="form-control m-b">
											<?php 
											$omenedit=$db->prepare("SELECT * from omenu where omenu_id=:omenu_id");
											$omenedit->execute(array(
												'omenu_id' => $omenuprint['omenu_ust']
											));
											$omeneditwrite=$omenedit->fetch(PDO::FETCH_ASSOC);
											?>
											<option value="
											<?php
											if ($omeneditwrite['omenu_ad']) {
												echo $omeneditwrite['omenu_id']; 
											} else {
												echo "0";
											} ?>">
											<?php
											if ($omeneditwrite['omenu_ad']) {
												echo $omeneditwrite['omenu_ad']; 
											} else {
												echo "ÜST MENÜ YOK";
											} ?></option>
											<?php if ($omeneditwrite['omenu_ad']) {
												?>
												<option value="0">ÜST MENÜ YOK</option>
												<?php
											} else {  } ?>
											
											<?php  
											$menulistix=$db->prepare("SELECT * from omenu where omenu_ust=0 order by omenu_sira DESC");
											$menulistix->execute(); 
											while($menulistprintx=$menulistix->fetch(PDO::FETCH_ASSOC)) { ?>
											<option value="<?php echo $menulistprintx['omenu_id']; ?>"><?php echo $menulistprintx['omenu_ad']; ?></option>
											<?php } ?>
										</select>
									</div>
             
          <div class="col-md-2">
										<label></label><div>
											<button style="cursor: pointer;" type="submit" name="omenuduzenle" class="btn btn-success btn-icon"><?php echo $menu["sub"]; ?></button>
											<a href="function/islem.php?omenusil=ok&omenu_id=<?php echo $omenuprint['omenu_id']; ?>&omenu_ust=<?php echo $omenuprint['omenu_ust']; ?>" style="cursor: pointer;" type="submit" name="omenusil" class="btn btn-danger btn-icon"><?php echo $menu["sil"]; ?></a>
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
		<?php include 'inc/footer.php'; ?>
 