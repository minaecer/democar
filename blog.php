<?php require_once "inc/header.php"; ?>


<div id="blog">
            <div class="section-seperator">
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
                                            <span><?php echo $fotocek["foto_ad"]; ?></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
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
                                            <span><?php echo $fotocek["foto_ad"]; ?></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
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
                                            <span><?php echo $fotocek["foto_ad"]; ?></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
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
                                            <span><?php echo $fotocek["foto_ad"]; ?></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
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
                                            <span><?php echo $fotocek["foto_ad"]; ?></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
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
                                            <span><?php echo $fotocek["foto_ad"]; ?></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
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
            <style>
            #blog{
                margin-top:100px;
            }
         
        </style>
         <?php require_once "inc/footer.php"; ?>