<?php

$ayarsor=$db->prepare("SELECT * FROM ayar WHERE ayar_id=:id ");
$ayarsor->execute(array(
  'id'=>0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

                        ?>

        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                            <?php

$omenusor=$db->prepare("SELECT * FROM omenu  order by omenu_sira ASC limit 4");
$omenusor->execute(array(
  
));
while($omenucek=$omenusor->fetch(PDO::FETCH_ASSOC))
{   ?>
                                <li class="footer-list-item"><a href="<?php echo $omenucek["omenu_link"]; ?>"><?php echo $omenucek["omenu_ad"]; ?></a></li>
                                <?php
}
                        ?>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="<?php echo $ayarcek["ayar_twitter"] ; ?>">Twitter</a></li>
                                <li class="footer-list-item"><a href="<?php echo $ayarcek["ayar_facebook"] ; ?>">Facebook</a></li>
                                <li class="footer-list-item"><a href="<?php echo $ayarcek["ayar_google"] ; ?>">Instagram</a></li>
                                <li class="footer-list-item"><a href="<?php echo $ayarcek["ayar_youtube"] ; ?>">YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-3">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                            <?php

$omenusor=$db->prepare("SELECT * FROM omenu  order by omenu_sira DESC limit 2");
$omenusor->execute(array(
  
));
while($omenucek=$omenusor->fetch(PDO::FETCH_ASSOC))
{   ?>
                                <li class="footer-list-item"><a href="<?php echo $omenucek["omenu_link"]; ?>"><?php echo $omenucek["omenu_ad"]; ?></a></li>
                                <?php
}
                        ?>
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/shnlogo.png" alt="flameonepage Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="#"><?php echo $ayarcek["ayar_firmaad"] ; ?></a> by: <a class="fweight-700" href="#">Mina ECER</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>