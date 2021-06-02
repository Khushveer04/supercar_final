<?php 

include('db_query_index.php');
include('db_connect.php');
include('header.php');

$id = '';


$titre_intro = '';
$intro = '';
$link_photo2 = '';
$nouv_arriv_photo1 = '';
$nouv_arriv_photo2 = '';
$nouv_arriv_photo3 = '';
$nouv_arriv_photo4 = '';
$descrip_nouvelle = '';
$link_twitter = '';
$link_instagram = '';
$link_facebook = '';
$link_pinterest = '';
$adresse = '';
$heures_ouverture = '';
$telephone = '';
$email = '';
$link_map = '';


if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $accueil = mysqli_fetch_assoc(get_accueil($conn, $id));

    'titre_intro: ' . $titre_intro = $accueil['titre_intro'];
    'intro: ' . $intro = str_replace("'","\'",$accueil['intro']);
    'link_photo1: ' . $link_photo1 = $accueil['link_photo1'];
    'link_photo2: ' . $link_photo2 = $accueil['link_photo2'];
    'nouv_arriv_photo1: ' . $nouv_arriv_photo1 = $accueil['nouv_arriv_photo1'];
    'nouv_arriv_photo2: ' . $nouv_arriv_photo2 = $accueil['nouv_arriv_photo2'];
    'nouv_arriv_photo3: ' . $nouv_arriv_photo3 = $accueil['nouv_arriv_photo3'];
    'nouv_arriv_photo4: ' . $nouv_arriv_photo4 = $accueil['nouv_arriv_photo4'];
    'descrip_nouvelle: ' . $descrip_nouvelle = $accueil['descrip_nouvelle'];
    'link_twitter: ' . $link_twitter = str_replace("'","\'",$accueil['link_twitter']);
    'link_instagram: ' . $link_instagram = str_replace("'","\'",$accueil['link_instagram']);
    'link_facebook: ' . $link_facebook = str_replace("'","\'",$accueil['link_facebook']);
    'link_pinterest: ' . $link_pinterest = str_replace("'","\'",$accueil['link_pinterest']);
    'adresse: ' . $adresse = $accueil['adresse'];
    'heures_ouverture: ' . $heures_ouverture = $accueil['heures_ouverture'];
    'telephone: ' . $telephone = $accueil['telephone'];
    'email: ' . $email = $accueil['email'];
    'link_map: ' . $link_map = str_replace("'","\'",$accueil['link_map']);
    
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.css"/>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $(".datepicker").datepicker();
        });
        
        $( function() {
            $("input").checkboxradio();
        } );
    </script>

    <style>

        .datepicker{

        }

        .center {
            text-align: center;
            color: #4d545f;
            font-family: "Segoe UI";
            letter-spacing: 5px;
            font-size: 45px;
            font-weight: lighter;
        }

        #navcolor {
          background-color:#264653;
        }

        body,html {background-color: #e9ebef;}
    
   </style>

</head>
<body>


<div class="center">
  <p><B>MISE A JOUR ACCUEIL</B></p>
</div>

<form class="uk-form-horizontal uk-container" action="insert_accueil.php" method="post" enctype="multipart/form-data">


<H4 class="uk-margin uk-margin-left">Formulaire mise a jour: </H4>
<p class= "uk-margin uk-margin-left"><u>Details du vehicule</u>

<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="titre_intro"><b>Titre</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="titre_intro" name="titre_intro" type="text" value="<?php echo $titre_intro = $accueil['titre_intro'];?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="id"><b>ID</b></label>
            <div class="uk-form-controls">
                <input readonly class="uk-input" id="id" name="id" type="text" value="<?php echo $id = $accueil['id'];?>" required>
            </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="link_photo"><b>Photo actuelle</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$accueil['link_photo'].'" width="170px" height="170px", alt="link_photo">'?>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="link_photo"><b>Photo</b></label>
            <div class="uk-form-controls">
            <input type="file" name="link_photo" id="link_photo" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $link_photo; ?>" required>
            </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="link_photo1"><b>Photo actuelle 1</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$accueil['link_photo1'].'" width="170px" height="170px", alt="link_photo1">' ?>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="link_photo1"><b>Photo1</b></label>
            <div class="uk-form-controls">
            <input type="file" name="link_photo1" id="link_photo1" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $link_photo1; ?>" required>
            </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="link_photo2"><b>Photo actuelle 2</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$accueil['link_photo2'].'" width="170px" height="170px", alt="link_photo2">' ?>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="link_photo2"><b>Photo2</b></label>
            <div class="uk-form-controls">
            <input type="file" name="link_photo2" id="link_photo2" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $link_photo2; ?>" required>
            </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="nouv_arriv_photo1"><b>Photo actuelle nouvelle arrivee 1</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$accueil['nouv_arriv_photo1'].'" width="170px" height="170px", alt="nouv_arriv_photo1">' ?>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="nouv_arriv_photo1"><b>Nouvelle Arrivee 1</b></label>
            <div class="uk-form-controls">
            <input type="file" name="nouv_arriv_photo1" id="nouv_arriv_photo1" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $nouv_arriv_photo1; ?>" required>
            </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="nouv_arriv_photo2"><b>Photo actuelle nouvelle arrivee 2</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$accueil['nouv_arriv_photo2'].'" width="170px" height="170px", alt="nouv_arriv_photo2">' ?>
            </div>
        </div>
    

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="nouv_arriv_photo2"><b>Nouvelle Arrivee2</b></label>
            <div class="uk-form-controls">
            <input type="file" name="nouv_arriv_photo2" id="nouv_arriv_photo2" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $nouv_arriv_photo2; ?>" required>
            </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="nouv_arriv_photo3"><b>Photo actuelle nouvelle arrivee 3</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$accueil['nouv_arriv_photo3'].'" width="170px" height="170px", alt="nouv_arriv_photo3">' ?>
            </div>
        </div>
    

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="nouv_arriv_photo3"><b>Nouvelle Arrivee 3</b></label>
            <div class="uk-form-controls">
            <input type="file" name="nouv_arriv_photo3" id="nouv_arriv_photo3" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $nouv_arriv_photo3; ?>" required>
            </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="nouv_arriv_photo4"><b>Photo actuelle nouvelle arrivee 4</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$accueil['nouv_arriv_photo4'].'" width="170px" height="170px", alt="nouv_arriv_photo4">' ?>
            </div>
        </div>
    

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="nouv_arriv_photo4"><b>Nouvelle Arrivee 4</b></label>
            <div class="uk-form-controls">
            <input type="file" name="nouv_arriv_photo4" id="nouv_arriv_photo4" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $nouv_arriv_photo4; ?>" required>
            </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
        <label class="uk-form-label" for="descrip_nouvelle"><b>Description Nouvelle</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="descrip_nouvelle" name="descrip_nouvelle" type="text" value="<?php echo $descrip_nouvelle = $accueil['descrip_nouvelle'];?>" required>
        </div>
    </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="link_twitter"><b>Twitter</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="link_twitter" name="link_twitter" type="text" value="<?php echo $link_twitter = $accueil['link_twitter'];?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="link_instagram"><b>Instagram</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="link_instagram" name="link_instagram" type="text" value="<?php echo $link_instagram = $accueil['link_instagram'];?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="link_facebook"><b>Facebook</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="link_facebook" name="link_facebook" type="text" value="<?php echo $link_facebook = $accueil['link_facebook'];?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="link_pinterest"><b>Pinterest</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="link_pinterest" name="link_pinterest" type="text" value="<?php echo $link_pinterest = $accueil['link_pinterest'];?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="adresse"><b>Adresse</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="adresse" name="adresse" type="text" value="<?php echo $adresse = $accueil['adresse'];?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="heures_ouverture"><b>Heures d'ouverture</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="heures_ouverture" name="heures_ouverture" type="text" value="<?php echo $heures_ouverture = $accueil['heures_ouverture'];?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="telephone"><b>Telephone</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="telephone" name="telephone" type="text" value="<?php echo $telephone = $accueil['telephone'];?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="email"><b>Courriel</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="email" name="email" type="email" value="<?php echo $email = $accueil['email'];?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="link_map"><b>Map</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="link_map" name="link_map" type="text" value="<?php echo $link_map = $accueil['link_map'];?>" required>
            </div>
        </div>
    
    
    
    <center><button class="uk-button uk-button-primary uk-margin-bottom" type="submit" value="submit">ENVOYER</button></center>
</div>



    

</form>
</body>
</html>