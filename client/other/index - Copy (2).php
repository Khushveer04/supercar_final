<?php
include('db_connect.php');
include('db_query.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HOME</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>

        <style>
            
            h1{
                font-size: 80px;
                color: white;
                text-align: center;
                font-family: "Fjalla One";
                font-weight: bold;
                letter-spacing: 0.2em;
            }

            P{
                text-align: center;
                color: white;
                font-family: "ITC Conduite";
                font-size: 23.4px;
                outline: 1px solid #fff; width: 165px; margin-left: 600px;
            }


        </style>




    </head>
<body>
    <!-- NAVBAR -->
    <nav class="uk-navbar-containerone" uk-navbar>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li><a href="index.php"><b>ACCEUIL</b></a></li>
                <li><a href="selectionofvehicles.php"><b>VOITURE</b></a></li>
                <li><a href="login.php"><b>DEMANDE D'ESSAI</b></a></li>
                <li><a href="contact.php"><b>CONTACT</b></a></li>
                <li><a href="services.php"><b>SERVICES</b></a></li>
            </ul>
        </div>

        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li><a href="index.php"><b>SUPERCAR</b></a></li>
            </ul>
        </div>

        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li>
                    <a href="#3" style= "font-size: 25px; color: #F9B090; font-family: Times New Roman; font-weight: 900;"></a>
                        <ul class="uk-iconnav">
                            <!-- <li><a style="color:white; padding-right:25px;" href="#" uk-tooltip="title: Search" uk-icon="icon: search" ></a></li> -->
                            <li>
                                <a class="" style="color:white; padding-right:25px; padding-bottom:30px;" href="/admin/login.php" uk-tooltip="title: Login as admin" uk-icon="icon: user"></a>
                            </li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
   

<div class="uk-section uk-section-secondary uk-padding-remove-top">
    <br>
    <div class="uk-container">

        <div class="uk-child-width-1-1@s" uk-grid>
            <div>
                <div class="uk-card uk-card-primary uk-card-body uk-width-1-1">
                    <h3 class="uk-card-title"><?php echo $titre_intro; ?></h3>
                    <label><?php echo $intro; ?></label>
                </div>
            </div>
        </div>
        <br>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 5:2; animation: push">

        <?php while ($row = mysqli_fetch_assoc($info)) { ?>

            <ul class="uk-slideshow-items">
                <li>
                    <video src="upload/vid2.mp4" alt="" uk-cover>
                </li>
                <li>
                    <span class="uk-text-uppercase"><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$row['link_photo1'].'" width="1470px" height="70px", alt="image">'?></span></span></li>
                <li>
                    <span class="uk-text-uppercase"><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$row['link_photo2'].'" width="1470px" height="70px", alt="image">'?></span></span></li>
                </li>
            </ul>
        <?php } ?>
        
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        
        </div>
    </div>
</div>

    <div class="uk-section uk-section-secondary uk-padding-remove-top" id="scroll">
        <div class="uk-container">
            <h2 style= "font-family: Fjalla One; text-align: center; font-size: 38.7px;">NOUVELLES ARRIVEE</h2><br>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

            <?php while ($rows = mysqli_fetch_assoc($infopic)) { ?>

                <ul class="uk-slider-items uk-grid">
                    <li class="uk-width-1-3">
                        
                        <span class="uk-text-uppercase"><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$rows['nouv_arriv_photo1'].'" width="440px" height="70px", alt="image">'?></span></span>
                        
                    </li>
                    <li class="uk-width-1-3">
                        
                        <span class="uk-text-uppercase"><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$rows['nouv_arriv_photo2'].'" width="440px" height="70px", alt="image">'?></span></span>
                        
                    </li>
                    <li class="uk-width-1-3">
                        
                        <span class="uk-text-uppercase"><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$rows['nouv_arriv_photo3'].'" width="440px" height="70px", alt="image">'?></span></span>
                       
                    </li>
                    <li class="uk-width-1-3">
                        
                        <span class="uk-text-uppercase"><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$rows['nouv_arriv_photo4'].'" width="440px" height="70px", alt="image">'?></span></span>
                        
                    </li>
                    <li class="uk-width-1-3">
                        
                        <span class="uk-text-uppercase"><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$rows['nouv_arriv_photo1'].'" width="440px" height="70px", alt="image">'?></span></span>
                        
                    </li>
                </ul>

                <?php } ?>
            
               <br><br>
               <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
               <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                <div class="uk-position-bottom-center uk-position-small">
                    <ul class="uk-dotnav">
                        <li uk-slider-item="0"><a href="#">Item 1</a></li>
                        <li uk-slider-item="1"><a href="#">Item 2</a></li>
                        <li uk-slider-item="2"><a href="#">Item 3</a></li>
                        <li uk-slider-item="3"><a href="#">Item 1</a></li>
                        <li uk-slider-item="4"><a href="#">Item 2</a></li>
                    </ul>
                </div>
            </div>

            <div class="uk-child-width-1-2@s" uk-grid>
               
                <div class="uk-panel uk-panel-box uk-text-truncate uk-text-muted">Les nouvelles vehicules disponible sont:<br><br><label><?php echo $descrip_nouvelle; ?><label> <br><br> Les reservations sont ouverts.</div>
            
        </div>
    </div> 

        <br><br>
        <hr class="uk-divider-icon">


        <div class="uk-section uk-section-secondary">
            <div class="uk-container">

            <h2 style= "font-family: Fjalla One; text-align: center; font-size: 38.7px;">Rejoignez-nous !</h2>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                    
                    <li>
                        <img src="3.jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill" href="<?php echo $link_twitter; ?>" uk-icon="twitter" style="background-color: rgb(30, 155, 238); color:white;margin-bottom: 4px;">TWITTER&nbsp;</a></div>
                    </li>
                    <li>
                        <img src="2.jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill" href="<?php echo $link_instagram; ?>" uk-icon="instagram" style="background-color: rgb(238, 30, 117); color:white;margin-bottom: 4px;">INSTAGRAM&nbsp;</a></div>
                    </li>
                    <li>
                        <img src="33.jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill" href="<?php echo $link_facebook; ?>" uk-icon="facebook" style="background-color: rgb(30, 85, 238); color:white;margin-bottom: 4px;">FACEBOOK&nbsp;</a></div>
                    </li>
                    <li>
                        <img src="3 (2).jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill" href="<?php echo $link_pinterest; ?>" uk-icon="pinterest" style="background-color: rgb(30, 155, 238); color:white;margin-bottom: 4px;">Pinterest&nbsp;</a></div>
                    </li>
                </ul>
            
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
    
            </div>            
        </div>
        <br><br>
        <hr class="uk-divider-icon">

        <div class="uk-section uk-section-secondary">
            <div class="uk-container">
               

        <h2 style= "font-family: Fjalla One; text-align: center; font-size: 38.7px; padding-bottom: 0px;">MAP</h2><br>

        <div class="uk-align-left">
            <h4 style= "font-family: Helvetica; font-size: 28px;"> PASSEZ NOUS VOIR </h4>
            <!-- <label style= "font-family: ITC Conduit; font-size: 20px;">
                Adresse : Ebene <br><br>
                Heure d'ouverture:<br>
                Mon - Fri: 9AM à 4:30PM<br>
                Sat & Sun: Fermer<br><br>
                Telephone: +230 57034165<br><br>
                Email: khushveer0411@gmail.com
            </label> -->
            <dl class="uk-description-list uk-description-list-divider">
                <dt style="color:#fff">Adresse:</dt>
                <dd><?php echo $adresse; ?></dd>
                <dt style="color:#fff">Heure d'ouverture:</dt>
                <dd><?php echo $heures_ouverture; ?></dd>
                <dt style="color:#fff">Telephone:</dt>
                <dd><?php echo $telephone; ?></dd>
                <dt style="color:#fff">Email:</dt>
                <dd><?php echo $email; ?></dd>
            </dl>

        </div>
    
        <iframe src="<?php echo $link_map; ?>" class="uk-align-right" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            
            </div>
        </div> 
</body>
</html>

        