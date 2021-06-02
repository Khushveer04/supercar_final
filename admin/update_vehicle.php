<?php 
include('db_connect.php');

$id = '';
$name = '';
$make = '';
$model = '';
$image='';
$Status = '';
$Date = '';
$type = '';
$annee = '';
$couleur = '';
$nom_moteur = '';
$transmission = '';
$cylindre = '';
$capacite = '';
$jante = '';
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
$prix = '';

$id = $_POST['id'];
$name = $_POST['name'];
$make = $_POST['make'];
$model = $_POST['model'];
$Status = $_POST['Status'];
$Date = $_POST['Date'];
$image = trim($_FILES["image"]['name']);
$type = $_POST['type'];
$annee = $_POST['annee'];
$couleur = $_POST['couleur'];
$nom_moteur = $_POST['nom_moteur'];
$transmission = $_POST['transmission'];
$cylindre = $_POST['cylindre'];
$capacite = $_POST['capacite'];
$jante = $_POST['jante'];
$interieur_couleur = $_POST['interieur_couleur'];
$kilometrage = $_POST['kilometrage'];
$exterieur = $_POST['exterieur'];
$exterieur = str_replace("'","\'",$exterieur);
$image_exterieur = $_FILES["image_exterieur"]['name'];
$image_exterieur2 = $_FILES["image_exterieur2"]['name'];
$image_exterieur3 = $_FILES["image_exterieur3"]['name'];
$image_exterieur4 = $_FILES["image_exterieur4"]['name'];
$interieur = $_POST['interieur'];
$interieur = str_replace("'","\'",$interieur);
$image_interieur = $_FILES["image_interieur"]['name'];
$moteur = $_POST['moteur'];
$moteur = str_replace("'","\'",$moteur);
$image_moteur = $_FILES["image_moteur"]['name'];
$intro = $_POST['intro'];
$intro = str_replace("'","\'",$intro);
$prix = $_POST['prix'];



if (isset($id)) {

	if (mysqli_num_rows(checkcontact($conn, $id)) > 0) {

		$UPDATE_VEHICLE = "UPDATE info SET name= '$name', make= '$make', model= '$model', Status= '$Status', Date= '$Date',
 						 image='$image', type= '$type', annee='$annee', couleur= '$couleur', nom_moteur='$nom_moteur', transmission='$transmission',
 						 cylindre='$cylindre', capacite= '$capacite', jante='$jante', interieur_couleur= '$interieur_couleur', kilometrage='$kilometrage',
						 exterieur= '$exterieur', image_exterieur='$image_exterieur', image_exterieur2='$image_exterieur2', image_exterieur3='$image_exterieur3',
 						 image_exterieur4='$image_exterieur4', interieur= '$interieur', moteur= '$moteur', image_interieur= '$image_interieur',
						image_moteur= '$image_moteur', intro='$intro', prix='$prix'
 						 WHERE id= '$id'";
	
		$UPDATE_VEHICLE = mysqli_query($conn, $UPDATE_VEHICLE);
        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image_exterieur"]["tmp_name"], "upload/".$_FILES["image_exterieur"]["name"]);
		move_uploaded_file($_FILES["image_exterieur2"]["tmp_name"], "upload/".$_FILES["image_exterieur2"]["name"]);
		move_uploaded_file($_FILES["image_exterieur3"]["tmp_name"], "upload/".$_FILES["image_exterieur3"]["name"]);
		move_uploaded_file($_FILES["image_exterieur4"]["tmp_name"], "upload/".$_FILES["image_exterieur4"]["name"]);
		move_uploaded_file($_FILES["image_interieur"]["tmp_name"], "upload/".$_FILES["image_interieur"]["name"]);
		move_uploaded_file($_FILES["image_moteur"]["tmp_name"], "upload/".$_FILES["image_moteur"]["name"]);
        
        echo '<script language="javascript">';
        echo 'alert("Successfully updated !"); location.href="listofvehicles.php"';
        echo '</script>';
	}
}

function checkcontact($conn, $id) {
	$VEHICLE_IN_TB = "SELECT id
					FROM info
					WHERE id = '$id'";
	return $VEHICLE_IN_TB =  mysqli_query($conn, $VEHICLE_IN_TB);
}

?>
