<?php 
include('db_query.php');


// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

?>


<?php include('headerc.php'); ?>

<div class="uk-section">
    <div class="uk-container">

        <div class="uk-child-width-1-1@s" uk-grid>
            <div>
                <div class="uk-card uk-card-secondary uk-card-body uk-width-1-1">
                    <h3 class="uk-card-title"><?php echo $titre_intro; ?></h3>
                    <p><?php echo $intro; ?></p>
                </div>
            </div>
        </div>
        <br>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 5:2; animation: push">

        <?php while ($row = mysqli_fetch_assoc($info)) { ?>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo '<img src="upload/'.$row['link_photo'].'" class="d-block w-100" alt="Image">' ?>
                </div>
                <div class="carousel-item">
                    <?php echo '<img src="upload/'.$row['link_photo1'].'" class="d-block w-100" alt="Image">' ?>
                </div>
                <div class="carousel-item">
                    <?php echo '<img src="upload/'.$row['link_photo2'].'" class="d-block w-100" alt="Image">' ?>
                </div>
            </div>
            <a class="carousel-control-prev" style="color:black" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
            
        <?php } ?>
        
        </div>
    </div>
</div>

<hr style="background-color:#dee2e6" class="uk-divider-icon">


    <div class="uk-section uk-padding-remove-top" id="scroll">
        <div class="uk-container">
        <div class="center" id="titlecolor">
            <p>NOUVELLE ARRIVÉE</p>
        </div>
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

                <!-- <div class="uk-position-bottom-center uk-position-small">
                    <ul class="uk-dotnav">
                        <li uk-slider-item="0"><a href="#">Item 1</a></li>
                        <li uk-slider-item="1"><a href="#">Item 2</a></li>
                        <li uk-slider-item="2"><a href="#">Item 3</a></li>
                        <li uk-slider-item="3"><a href="#">Item 1</a></li>
                        <li uk-slider-item="4"><a href="#">Item 2</a></li>
                    </ul>
                </div> -->
            </div>

            <div class="uk-child-width-1-2@s" uk-alert>
                <div class="uk-panel uk-panel-box uk-text-truncate">Les reservations sont ouvertes:<p><?php echo $descrip_nouvelle; ?></div>
            </div>
    </div> 

        <br><br>
        <hr style="background-color:#dee2e6" class="uk-divider-icon">


        <div class="uk-section">
            <div class="uk-container">
            <div class="center" id="titlecolor">
                <p>Rejoignez-nous !</p><br>
            </div>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                    
                    <li>
                        <img src="upload/2002.jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill" href="<?php echo $link_twitter; ?>" uk-icon="twitter" style="background-color: rgb(30, 155, 238); color:white;margin-bottom: 4px;">TWITTER&nbsp;</a></div>
                    </li>
                    <li>
                        <img src="upload/pors.jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill" href="<?php echo $link_instagram; ?>" uk-icon="instagram" style="background-color: rgb(238, 30, 117); color:white;margin-bottom: 4px;">INSTAGRAM&nbsp;</a></div>
                    </li>
                    <li>
                        <img src="upload/ferra.jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill" href="<?php echo $link_facebook; ?>" uk-icon="facebook" style="background-color: rgb(30, 85, 238); color:white;margin-bottom: 4px;">FACEBOOK&nbsp;</a></div>
                    </li>
                    <li>
                        <img src="upload/musta.jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill" href="<?php echo $link_pinterest; ?>" uk-icon="pinterest" style="background-color: rgb(30, 155, 238); color:white;margin-bottom: 4px;">Pinterest&nbsp;</a></div>
                    </li>
                </ul>
            
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
    
            </div>            
        </div>
        <br><br>
        <hr style="background-color:#dee2e6" class="uk-divider-icon">

        <div class="uk-section">
            <div class="uk-container">
               

        <div class="center" id="titlecolor">
            <p>Coordonnées</p><br>
        </div>

        <div class="uk-align-left">
        <div class="center" id="titlecolor" style="font-size: 30px;">
            <p>PASSEZ NOUS VOIR</p>
        </div>
            <!-- <label style= "font-family: ITC Conduit; font-size: 20px;">
                Adresse : Ebene <br><br>
                Heure d'ouverture:<br>
                Mon - Fri: 9AM à 4:30PM<br>
                Sat & Sun: Fermer<br><br>
                Telephone: +230 57034165<br><br>
                Email: khushveer0411@gmail.com
            </label> -->
            <dl class="uk-description-list uk-description-list-divider">
                <dt style="color:black">Adresse:</dt>
                <dd><?php echo $adresse; ?></dd>
                <dt style="color:black">Heure d'ouverture:</dt>
                <dd><?php echo $heures_ouverture; ?></dd>
                <dt style="color:black">Telephone:</dt>
                <dd><?php echo $telephone; ?></dd>
                <dt style="color:black">Email:</dt>
                <dd><?php echo $email; ?></dd>
            </dl>

        </div>
    
        <div>
            <iframe src="<?php echo $link_map; ?>" class="uk-align-right" width="290" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
            
            </div>
        </div> 
        <div uk-alert>
            <p style= "text-align: center;">Copyright © Supercar 2020</p>
            <p  class="text-center"><a href="mention.php">Mentions légales</a></p>
        </div>
</body>
</html>

