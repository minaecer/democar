<?php require_once "inc/header.php"; ?>
       
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
            </div>

            <div class="carousel-inner" role="listbox">
            <?php

$slidersor=$db->prepare("SELECT * FROM slider WHERE slider_durum=:durum order by slider_sira ASC");
$slidersor->execute(array(
  'durum'=>1
));
while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC))
{   ?>
                <div class="item">
                    <img class="img-responsive" src="<?php echo $slidercek["slider_resimyol"]; ?>" alt="Slider Image">
                </div>
           
                <?php
}
                        ?>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
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
        <!-- End About -->

        <!-- Latest Products -->
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
        <!-- End Latest Products -->

        <!-- Pricing -->
        

        <!-- Work -->
        <div id="blog">
            
                <div class="content-md container">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                            <h2>Blog</h2>
                            <p></p>
                        </div>
                    </div>
                    <!--// end row -->

                    <!-- Masonry Grid -->
                    <div class="masonry-grid row">

    
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30">
                        <?php

$fotosor=$db->prepare("SELECT * FROM foto WHERE  foto_sira=:sira order by foto_id ASC");
$fotosor->execute(array(
  'sira'=>1
));
while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC))
{   ?>
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="<?php echo $fotocek["foto_resimyol"]; ?>" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">X</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5"><?php echo $fotocek["foto_ad"]; ?></h3>
                    
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                              
                                                </div>
                                            </div>
                         
                                        </div>
                       
                                    </div>
                           </div>
                                   </div>
                                   <?php
}
                        ?>                  <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30">
                        <?php

$fotosor=$db->prepare("SELECT * FROM foto WHERE  foto_sira=:sira order by foto_id ASC");
$fotosor->execute(array(
  'sira'=>6
));
while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC))
{   ?>
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="<?php echo $fotocek["foto_resimyol"]; ?>" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">X</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5"><?php echo $fotocek["foto_ad"]; ?></h3>
                                     
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                               
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
                        ?>      <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                        <?php

$fotosor=$db->prepare("SELECT * FROM foto WHERE  foto_sira=:sira order by foto_id ASC");
$fotosor->execute(array(
  'sira'=>3
));
while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC))
{   ?>
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="<?php echo $fotocek["foto_resimyol"]; ?>" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">X</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5"><?php echo $fotocek["foto_ad"]; ?></h3>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                              
                                                </div>
                                            </div>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
                        ?>              <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-30">
                        <?php

$fotosor=$db->prepare("SELECT * FROM foto WHERE  foto_sira=:sira order by foto_id ASC");
$fotosor->execute(array(
  'sira'=>5
));
while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC))
{   ?>
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="<?php echo $fotocek["foto_resimyol"]; ?>" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">X</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5"><?php echo $fotocek["foto_ad"]; ?></h3>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                             
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
                        ?>               <!-- End Work -->
                        </div>

						<div class="masonry-grid-sizer col-xs-10 col-sm-6 col-md-1"></div>
						<div class="masonry-grid-item col-xs-8 col-sm-6 col-md-4 margin-b-30">
                        <?php

$fotosor=$db->prepare("SELECT * FROM foto WHERE  foto_sira=:sira order by foto_id ASC");
$fotosor->execute(array(
  'sira'=>4
));
while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC))
{   ?>
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="<?php echo $fotocek["foto_resimyol"]; ?>" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">X</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5"><?php echo $fotocek["foto_ad"]; ?></h3>
                                    
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                 
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
                        ?>           <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-8 col-sm-6 col-md-4 margin-b-30">
                        <?php

$fotosor=$db->prepare("SELECT * FROM foto WHERE  foto_sira=:sira order by foto_id ASC");
$fotosor->execute(array(
  'sira'=>2
));
while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC))
{   ?>
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="<?php echo $fotocek["foto_resimyol"]; ?>" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">X</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5"><?php echo $fotocek["foto_ad"]; ?></h3>
                                       
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
                        ?>           <!-- End Work -->
                        </div>
                        
                    </div>
                    <!-- End Masonry Grid -->
                </div>
            </div>
            
            <!-- Clients -->
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">

                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                    <?php

$referanssor=$db->prepare("SELECT * FROM referans WHERE  referans_durum=:durum order by referans_sira ASC");
$referanssor->execute(array(
  'durum'=>1
));
while($referanscek=$referanssor->fetch(PDO::FETCH_ASSOC))
{   ?>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo $referanscek["referans_resimyol"]; ?>" alt="Clients Logo">
                        </div>
                        <?php
}
                        ?>      
                    </div>
                  
                    <!-- End Swiper Wrapper -->
                      </div>
                <!-- End Swiper Clients -->
                   </div>
            <!-- End Clients -->
        </div>
        <!-- End Work -->

        <!-- Services -->
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
                    <!--// end row -->

                 
        <!-- End Service -->
        <?php

$ayarsor=$db->prepare("SELECT * FROM ayar WHERE ayar_id=:id ");
$ayarsor->execute(array(
  'id'=>0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

                        ?>
        <!-- Contact -->
        <div id="iletisim">
            <!-- Contact List -->
            <div class="section-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <!-- Contact List -->
                        <div class="col-sm-4 sm-margin-b-50">
                            <h3><a href="#"><?php echo $ayarcek["ayar_il"]?> / <?php echo $ayarcek["ayar_ilce"]?></a> <span class="text-uppercase margin-l-20"><?php echo $ayarcek["ayar_author"]?></span></h3>
                            <p><?php echo $ayarcek["ayar_adres"]?></p><br><p><?php echo $ayarcek["ayar_mesai"]?></p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> <?php echo $ayarcek["ayar_tel"]?></li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i><?php echo $ayarcek["ayar_mail"]?></li>
                            </ul>
                        </div>
                        <!-- End Contact List -->

                        <!-- Contact List -->
                        
                        <!-- End Contact List -->

                        <!-- Contact List -->
                      
                        <!-- End Contact List -->
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Contact List -->
            </div>
     
     </div>
     <style>
        .service{
            background: black;
        }
        .or{
            color:orange;
          
        }
   
     </style>
            <!-- Google Map -->
            <?php require_once "inc/footer.php"; ?>