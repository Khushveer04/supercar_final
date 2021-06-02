<?php 

include('db_query_index.php');
include('db_connect.php');
include('header.php');

$id = '';


$name = '';
$make = '';
$model = '';
$Status = '';
$Date = '';
$image = '';
$type = '';
$annee = '';
$couleur = '';
$nom_moteur = '';
$transmission = '';
$cylindre = '';
$capacite = '';
$jante = '';
$prix = '';
$interieur_couleur = '';
$kilometrage = '';
$exterieur = '';
$image_exterieur = '';
$image_exterieur2 = '';
$image_exterieur3 = '';
$image_exterieur4 = '';
$interieur = '';
$image_interieur = '';
$moteur = '';
$image_moteur = '';
$intro = '';


if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $info = mysqli_fetch_assoc(get_info($conn, $id));

    'name: ' . $name = $info['name'];
    'make: ' . $make = $info['make'];
    'model: ' . $model = $info['model'];
    'Status: ' . $Status = $info['Status'];
    'Date: ' . $Date = $info['Date'];
    'image: ' . $image = $info['image'];
    'intro: ' . $intro = str_replace("'","\'",$info['intro']);
    'type: ' . $type = $info['type'];
    'annee: ' . $annee = $info['annee'];
    'couleur: ' . $couleur = $info['couleur'];
    'nom_moteur: ' . $nom_moteur = $info['nom_moteur'];
    'transmission: ' . $transmission = $info['transmission'];
    'cylindre: ' . $cylindre = $info['cylindre'];
    'capacite: ' . $capacite = $info['capacite'];
    'jante: ' . $jante = $info['jante'];
    'interieur_couleur: ' . $interieur_couleur = $info['interieur_couleur'];
    'kilometrage: ' . $kilometrage = $info['kilometrage'];
    'exterieur: ' . $exterieur = str_replace("'","\'",$info['exterieur']);
    'image_exterieur: ' . $image_exterieur = $info['image_exterieur'];
    'image_exterieur2: ' . $image_exterieur2 = $info['image_exterieur2'];
    'image_exterieur3: ' . $image_exterieur3 = $info['image_exterieur3'];
    'image_exterieur4: ' . $image_exterieur4 = $info['image_exterieur4'];
    'interieur: ' . $interieur = str_replace("'","\'",$info['interieur']);
    'prix: ' . $prix = $info['prix'];
    'image_interieur: ' . $image_interieur = $info['image_interieur'];
    'moteur: ' . $moteur = str_replace("'","\'",$info['moteur']);
    'image_moteur: ' . $image_moteur = $info['image_moteur'];
}
?>





<!DOCTYPE html>
<html lang="fr">
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

.center {
  text-align: center;
  font-size: 35px;
}

.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  background-color:#E8E8E8;
}

p1 {
    font-size: 17px
}

#titlecolor {

  color: #4d545f;
  font-family: "Segoe UI";
  letter-spacing: 5px;
  font-size: 55px;
  font-weight: lighter;
 
}

#navcolor {
  background-color:#264653;
}

body,html {background-color: #e9ebef;}

.iconmore {
    fill: black;
    
}

</style>


</head>

<body class="uk-height-viewport">

<div class="center" id="titlecolor">
  <p>MISE A JOUR VEHICULE</p>
</div>

<form class="uk-form-horizontal uk-container" action="update_vehicle.php" method="post" enctype="multipart/form-data">


<H4 class="uk-margin uk-margin-left">Formulaire mise a jour : </H4>
<p class= "uk-margin uk-margin-left"><u>Détails du vehicule</u>

<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="name"><b>Titre</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="name" name="name" type="text" value="<?php echo $name = $info['name'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large uk-hidden">
        <label class="uk-form-label" for="id"><b>ID</b></label>
            <div class="uk-form-controls">
                <input readonly class="uk-input" id="id" name="id" type="text" value="<?php echo $id = $info['id'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="make"><b>Marque</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="make" name="make" type="text" value="<?php echo $make = $info['make'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="model"><b>Modele</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="model" name="model" type="text" value="<?php echo $model = $info['model'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="intro"><b>Intro</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="intro" name="intro" type="text" value="<?php echo $intro = $info['intro'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image"><b>Photo actuelle</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$info['image'].'" width="170px" height="170px", alt="image">'?>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image"><b>Mise a jour photo</b></label>
            <div class="uk-form-controls">
                <label>Image</label>
                <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image; ?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="type"><b>Type</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="type" name="type" type="text" value="<?php echo $type = $info['type'];?>">
            </div>
        </div>


        <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Statue</b></div>
        <div class="uk-form-controls">
            <div class id="Status" name="Status">

            <?php if($Status == 'YES') { ?>
                <label><input class="uk-radio" type="radio" value="Active" name="Status" > Active</label><br>
                <label><input class="uk-radio" type="radio" value="Inactive" name="Status" checked> Inactive</label>
                <?php } else { ?>
                    <label><input class="uk-radio" type="radio" value="Active" name="Status" checked> Active</label><br>
                <label><input class="uk-radio" type="radio" value="Inactive" name="Status" > Inactive</label>
                <?php } ?>

            </div>
        </div>
    </div>


    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="Date" name="Date"><b>Date</b></label>
        <div class="uk-form-controls">
            <input class="uk-input datepicker" type="text" class="datepicker" value="<?php echo $Date = $info['Date'];?>" id="Date" name="Date">
        </div>
    </div>




    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="annee"><b>Année</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="annee" name="annee" type="text" value="<?php echo $annee = $info['annee'];?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="couleur"><b>Couleur</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="couleur" name="couleur" type="text" value="<?php echo $couleur = $info['couleur'];?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="nom_moteur"><b>Nom moteur</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="nom_moteur" name="nom_moteur" type="text" value="<?php echo $nom_moteur = $info['nom_moteur'];?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="transmission"><b>Transmission</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="transmission" name="transmission" type="text" value="<?php echo $transmission = $info['transmission'];?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-form-width-large">
        <label class="uk-form-label" for="cylindre" name="cylindre"><b>Cylindre</b></label>
          <div class="uk-form-controls">
            <input class="uk-input" id="cylindre" name="cylindre" type="text" value="<?php echo $cylindre = $info['cylindre'];?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="capacite"><b>Capacite</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="capacite" name="capacite" type="text" value="<?php echo $capacite = $info['capacite'];?>">
        </div>
    </div>
    

      <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="jante"><b>Jante</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="jante" name="jante" type="text" value="<?php echo $jante = $info['jante'];?>">
        </div>
    </div>
    

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="interieur_couleur"><b>Couleur interieur</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="interieur_couleur" name="interieur_couleur" type="text" value="<?php echo $interieur_couleur = $info['interieur_couleur'];?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="kilometrage"><b>Kilometrage</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="kilometrage" name="kilometrage" type="text" value="<?php echo $kilometrage = $info['kilometrage'];?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="prix"><b>Prix</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="prix" name="prix" type="text" value="<?php echo $prix = $info['prix'];?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="exterieur"><b>Exterieur</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="exterieur" name="exterieur" type="text" value="<?php echo $exterieur = $info['exterieur'];?>">
        </div>
    </div>
    



    </div>


    <div>


    
    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_exterieur"><b>Photo actuelle exterior</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$info['image_exterieur'].'" width="170px" height="170px", alt="image_exterieur">' ?>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="image_exterieur"><b>Mise a jour image exterior</b></label>
        <div class="uk-form-controls">
            <label>Image</label>
            <input type="file" name="image_exterieur" id="image_exterieur" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_exterieur; ?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_exterieur2"><b>Photo actuelle exterior2</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$info['image_exterieur2'].'" width="170px" height="170px", alt="image_exterieur2">' ?>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="image_exterieur2"><b>Mise a jour photo exterior2</b></label>
        <div class="uk-form-controls">
            <label>Image</label>
            <input type="file" name="image_exterieur2" id="image_exterieur2" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_exterieur2; ?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_exterieur3"><b>Photo actuelle exterior3</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$info['image_exterieur3'].'" width="170px" height="170px", alt="image_exterieur3">' ?>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="image_exterieur3"><b>Mise a jour photo exterior3</b></label>
        <div class="uk-form-controls">
            <label>Image</label>
            <input type="file" name="image_exterieur3" id="image_exterieur3" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_exterieur3; ?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_exterieur4"><b>Photo actuelle exterior4</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$info['image_exterieur4'].'" width="170px" height="170px", alt="image_exterieur4">' ?>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="image_exterieur4"><b>Mise a jour photo exterior4</b></label>
        <div class="uk-form-controls">
            <label>Image</label>
            <input type="file" name="image_exterieur4" id="image_exterieur4" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_exterieur4; ?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="interieur"><b>Interieur</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="interieur" name="interieur" type="text" value="<?php echo $interieur = $info['interieur'];?>">
        </div>
    </div>


   <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_interieur"><b>Photo actuelle interieur</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$info['image_interieur'].'" width="170px" height="170px", alt="image_interieur">' ?>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="image_interieur"><b>Mise a jour photo interieur</b></label>
        <div class="uk-form-controls">
            <label>Image</label>
            <input type="file" name="image_interieur" id="image_interieur" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_interieur; ?>">
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="moteur"><b>Moteur</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="moteur" name="moteur" type="text" value="<?php echo $moteur = $info['moteur'];?>">
        </div>
    </div>
    

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="image_moteur"><b>Photo actuelle moteur</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$info['image_moteur'].'" width="170px" height="170px", alt="image_moteur">' ?>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="image_moteur"><b>Mise a jour image moteur</b></label>
        <div class="uk-form-controls">
            <label>Image</label>
            <input type="file" name="image_moteur" id="image_moteur" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $image_moteur; ?>">
        </div>
    </div>
    
    <button class="uk-button uk-button-primary uk-margin-bottom" type="submit" value="submit">Envoyer</button>
</div>



    

</form>
</body>
</html>


