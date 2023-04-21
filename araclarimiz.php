<?php require_once "inc/header.php"; ?>
 
 <div id="araclarimiz">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Araçlarımız</h2>
                      
                    </div>
                </div>
                <!--// end row -->
        
                <div class="row">
                <?php

$slidersor=$db->prepare("SELECT * FROM slider WHERE slider_durum=:durum order by slider_sira ASC");
$slidersor->execute(array(
  'durum'=>1
));
while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC))
{   ?>
                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
   
                        <div class="margin-b-20">
                            <img class="img-responsive" src="<?php echo $slidercek["slider_resimyol"]; ?>" alt="Latest Products Image">
                        </div>
                        <h4><a href="#"></a> <span class="text-uppercase margin-l-20"><?php echo $slidercek["slider_ad"]; ?></span></h4>
                        <p></p>
                 
                    
                    </div>
                    <!-- End Latest Products -->
        
                 
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                   
                    <?php
}
                        ?>             <!-- End Latest Products -->
               </div>
          <!--// end row -->
              </div>
     
        </div>
        <style>
            #araclarimiz{
                margin-top:100px;
            }
          
        </style>
        <!-- End Latest Products -->
        <?php require_once "inc/footer.php"; ?>