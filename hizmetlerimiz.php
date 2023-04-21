<?php require_once "inc/header.php"; ?>


<div id="hizmetlerimiz">

                <div class="content-lg container">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                            <h2>Hizmetlerimiz</h2>
                            <p></p>
                        </div>
                    </div>
                    <!--// end row -->
                    <?php

$hizmetsor=$db->prepare("SELECT * FROM hizmet WHERE hizmet_durum=:durum order by hizmet_id ASC");
$hizmetsor->execute(array(
  'durum'=>1
));
while($hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC))
{
                        ?>
                    <div class="row row-space-1 margin-b-2">
                        
                     
                        <div class="col-sm-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3 class="or"><?php echo $hizmetcek["hizmet_ad"]?></h3>
                                    <p class="margin-b-5"></p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <?php
}
                        ?>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <!--// end row -->
                    <style>
            #hizmetlerimiz{
                margin-top:100px;
            }
            .service{
            background: black;
        }
        .or{
            color:orange;
          
        }
         
        </style>
      
         <?php require_once "inc/footer.php"; ?>