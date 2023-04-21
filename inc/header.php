<?php require_once "admin/function/baglan.php"; ?>

<!DOCTYPE html>

<html lang="tr" class="no-js">
   
    <head>
        <meta charset="utf-8"/>
        <title>Black ŞHN Travel</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description"/>
        <meta content="FairTech" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
   
  
    <body id="body" data-spy="scroll" data-target=".header" >
     
          <header class="header navbar-fixed-top" id="head">
              <nav class="navbar" role="navigation" id="dd">
                <div class="container" >
                      <div class="menu-container js_nav-item" >
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

             
                    <div class="collapse navbar-collapse nav-collapse">
					
					<!--div class="language-switcher">
					  <ul class="nav-lang">
                        <li><a class="active" href="#">EN</a></li>
					    <li><a href="#">DE</a></li>
						<li><a href="#">FR</a></li>
					  </ul>
					</div---> 
					
                        <div class="menu-container">
           
                            <ul class="nav navbar-nav ">
                            <?php

$omenusor=$db->prepare("SELECT * FROM omenu WHERE omenu_durum=:durum order by omenu_sira ASC");
$omenusor->execute(array(
  'durum'=>1
));
while($omenucek=$omenusor->fetch(PDO::FETCH_ASSOC))
{   ?>
                                <li class="js_nav-item nav-item"><a style="color:white;" class="nav-item-child nav-item-hover" href="<?php echo $omenucek["omenu_link"]; ?>"><?php echo $omenucek["omenu_ad"]; ?></a></li>

                                <?php
}
                        ?>
                                <div class="logo">
                                    <a class="logo-wrap" href="anasayfa">
                                        <img class="logo-img logo-img-main"  src="img/shnlogo.png" >
                                        <img class="logo-img logo-img-active" width="300" height="500" src="img/shnlogo.png">
                                    </a>
                                </div>
                                </ul>
                                <ul class="nav navbar-nav ">
                                <?php

$omenusor=$db->prepare("SELECT * FROM omenu WHERE omenu_durum=:durum order by omenu_sira ASC");
$omenusor->execute(array(
  'durum'=>2
));
while($omenucek=$omenusor->fetch(PDO::FETCH_ASSOC))
{   ?>
        
        <li class="js_nav-item nav-item"><a style="color:white;" class="nav-item-child nav-item-hover" href="<?php echo $omenucek["omenu_link"]; ?>"><?php echo $omenucek["omenu_ad"]; ?></a></li>

                                <?php
}
                        ?>
                        
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
     
            <style>
                li{
                    padding-right:10px;
                    margin-top:2px;
                

                }
                .menu-container{
                    margin-left:50px;
                 
                    
                }
                .logo{
                  
                    margin-top:0px;
                }
              a{
                font-family: Arial Black ;
                    font-weight:bold;
              }
              #body{
                background: black;
              }
              #dd{
            background: black;
           }
         
            </style>
			</header>