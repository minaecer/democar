<?php require_once "inc/header.php"; ?>


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
                <div class="row margin-b-40">
                        <div class="col-sm-6">
                            <h2>İletişim</h2>
                            <p></p>
                        </div>
                    </div>
                
                        <!-- Contact List -->
                        <div class="col-sm-4 sm-margin-b-50">
                            <h3><a href="#"><?php echo $ayarcek["ayar_il"]?> / <?php echo $ayarcek["ayar_ilce"]?></a> <span class="text-uppercase margin-l-20"><?php echo $ayarcek["ayar_author"]?></span></h3>
                            <p><?php echo $ayarcek["ayar_adres"]?></p><br><p><?php echo $ayarcek["ayar_mesai"]?></p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> <?php echo $ayarcek["ayar_tel"]?></li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i><?php echo $ayarcek["ayar_mail"]?></li>
                            </ul>
                          
                        
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
            #iletisim{
                margin-top:150px;
               
            }
       
          
        </style>
            <!-- Google Map -->
            <?php require_once "inc/footer.php"; ?>