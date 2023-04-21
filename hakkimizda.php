<?php require_once "inc/header.php"; ?>




               
<div id="hakkimizda">
            
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 md-margin-b-60">
                        <?php

$menusor=$db->prepare("SELECT * FROM menu WHERE menu_sira=:sira order by menu_id ASC");
$menusor->execute(array(
  'sira'=>1
));
while($menucek=$menusor->fetch(PDO::FETCH_ASSOC))
{   ?>
                            <div class="margin-t-50 margin-b-30">
                                <h2><?php echo $menucek["menu_ad"]; ?></h2>
                                <p><?php echo $menucek["menu_url"]; ?></p>
                            </div>
                            <?php
}
                        ?>
                        </div>
                        <div class="col-md-5 col-sm-7 col-md-offset-2">
                        <?php

$sayfasor=$db->prepare("SELECT * FROM sayfa WHERE sayfa_id=:id ");
$sayfasor->execute(array(
  'id'=>6
));
$sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC);
   ?>
                            <!-- Accordion -->
                            <div class="accordion">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a class="panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <?php echo $sayfacek["sayfa_ad"]; ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                            <?php echo $sayfacek["sayfa_icerik"]; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php

$sayfadsor=$db->prepare("SELECT * FROM sayfa WHERE sayfa_id=:id ");
$sayfadsor->execute(array(
  'id'=>7
));
$sayfadcek=$sayfadsor->fetch(PDO::FETCH_ASSOC);
   ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <?php echo $sayfadcek["sayfa_ad"]; ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                            <?php echo $sayfadcek["sayfa_icerik"]; ?>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <!-- End Accodrion -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <style>
            #hakkimizda{
                margin-top:100px;
            }
            .accordion{
                margin-top:100px;
            }
        </style>
         <?php require_once "inc/footer.php"; ?>