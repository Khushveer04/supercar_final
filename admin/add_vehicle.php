<?php
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>VEHICULE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    

    <script>
        $(function() {
            $(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
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

<div class="center" id="titlecolor">
  <p>AJOUT D'UN NOUVEAU VEHICULE</p>
</div>


<form class="uk-form-horizontal uk-container" action="insert.php" method="post" enctype="multipart/form-data">
<h4 class="uk-margin uk-margin-left">Veuillez remplir le formulaire: </h4>

<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>
    
    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-margin-bottom uk-form-width-large">
            <label class="uk-form-label" for="name"><b>Nom</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="name" name="name" type="text" placeholder="Inserez le nom">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-margin-bottom uk-form-width-large">
            <label class="uk-form-label" for="make"><b>Marque</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="make" name="make" type="text" placeholder="Inserez la marque">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="model"><b>Modele</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="model" name="model" type="text" placeholder="Inserez le modele">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image"><b>Image</b></label>
            <div class="uk-form-controls">
                <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image; ?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="type"><b>Type</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="type" name="type" type="text" placeholder="Inserez le type">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="annee"><b>Annee</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="annee" name="annee" type="text" placeholder="Inserez le message">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="couleur"><b>Couleur</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="couleur" name="couleur" type="text" placeholder="Inserez la couleur">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="nom_moteur"><b>Moteur</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="nom_moteur" name="nom_moteur" type="text" placeholder="Inserez le nom du moteur">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="transmission"><b>Transmission</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="transmission" name="transmission" type="text" placeholder="Inserez la transmission">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="cylindre"><b>Cylindre</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="cylindre" name="cylindre" type="text" placeholder="Inserez le nombre de cylindre">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="kilometrage"><b>Kilometrage</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="kilometrage" name="kilometrage" type="text" placeholder="Inserez le kilometrage">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="exterieur"><b>Exterieur</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="exterieur" name="exterieur" type="text" placeholder="Inserez l'exterieur">
            </div>
        </div>
        
        

    </div>
    </div>



    <div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_exterieur"><b>Image Exterieur</b></label>
            <div class="uk-form-controls">
                <input type="file" name="image_exterieur" id="image_exterieur" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_exterieur; ?>" >
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_exterieur2"><b>Image Exterieur2</b></label>
            <div class="uk-form-controls">
                <input type="file" name="image_exterieur2" id="image_exterieur2" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_exterieur2; ?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_exterieur3"><b>Image Exterieur3</b></label>
            <div class="uk-form-controls">
                <input type="file" name="image_exterieur3" id="image_exterieur3" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_exterieur3; ?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_exterieur4"><b>Image Exterieur4</b></label>
            <div class="uk-form-controls">
                <input type="file" name="image_exterieur4" id="image_exterieur4" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_exterieur4; ?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="interieur"><b>Interieur</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="interieur" name="interieur" type="text" placeholder="Inserez l'interieur" >
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_interieur"><b>Image Interieur</b></label>
            <div class="uk-form-controls">
                <input type="file" name="image_interieur" id="image_interieur" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_interieur; ?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="moteur"><b>Moteur</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="moteur" name="moteur" type="text" placeholder="Inserez les details du moteur">
            </div>
        </div>
        
        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_moteur"><b>Image moteur</b></label>
            <div class="uk-form-controls">
                <input type="file" name="image_moteur" id="image_moteur" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_moteur; ?>">
            </div>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="intro"><b>Intro</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="intro" name="intro" type="text" placeholder="Inserez l'introduction">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="capacite"><b>Capacite</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="capacite" name="capacite" type="text" placeholder="Inserez la capacite">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="jante"><b>Jante</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="jante" name="jante" type="text" placeholder="Inserez la jante">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="interieur_couleur"><b>Couleur interieur</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="interieur_couleur" name="interieur_couleur" type="text" placeholder="Inserez la couleur">
            </div>
        </div>
        
        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="prix"><b>Prix</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="prix" name="prix" type="text" placeholder="Inserez le prix">
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Status</b></div>
            <div class="uk-form-controls">
                <div class id="Status" name="Status">
                    <label><input class="uk-radio" type="radio" value="Active" name="Status"> Active</label><br>
                    <label><input class="uk-radio" type="radio" value="Inactive" name="Status"> Inactive</label>
                </div>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="Date" name="Date"><b>Date</b></label>
        <div class="uk-form-controls">
            <input class="uk-input datepicker" type="text" class="datepicker" placeholder="Entrez la date" id="Date" name="Date">
        </div>
    </div>

    <button class="uk-button uk-button-primary uk-margin uk-margin-xlarge-left uk-margin-bottom" type="submit" value="SUBMIT">Envoyer</button>
        
        

</div>