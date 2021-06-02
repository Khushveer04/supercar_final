<?php 
include('db_connect.php');

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
$prix= '';

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
$image_exterieur = $_FILES["image_exterieur"]['name'];
$image_exterieur2 = $_FILES["image_exterieur2"]['name'];
$image_exterieur3 = $_FILES["image_exterieur3"]['name'];
$image_exterieur4 = $_FILES["image_exterieur4"]['name'];
$interieur = $_POST['interieur'];
$image_interieur = $_FILES["image_interieur"]['name'];
$moteur = $_POST['moteur'];
$image_moteur = $_FILES["image_moteur"]['name'];
$intro = $_POST['intro'];
$prix = $_POST['prix'];




		$INSERT_VEHICLE = "INSERT into info (name, make, model, Status, Date,
 						 image, type, annee, couleur, nom_moteur, transmission, cylindre, capacite, jante, interieur_couleur, kilometrage,
 						 exterieur, image_exterieur, image_exterieur2, image_exterieur3, image_exterieur4, interieur, moteur, image_interieur,
						image_moteur, intro, prix)
 						 VALUES('$name','$make','$model','$Status','$Date','$image','$type','$annee','$couleur','$nom_moteur','$transmission','$cylindre','$capacite','$jante',
 						 '$interieur_couleur','$kilometrage','$exterieur','$image_exterieur','$image_exterieur2','$image_exterieur3','$image_exterieur4',
 						 '$interieur','$moteur','$image_interieur','$image_moteur','$intro', '$prix')";
	
		$INSERT_VEHICLE = mysqli_query($conn, $INSERT_VEHICLE);
		move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
 		move_uploaded_file($_FILES["image_exterieur"]["tmp_name"], "upload/".$_FILES["image_exterieur"]["name"]);
 		move_uploaded_file($_FILES["image_exterieur2"]["tmp_name"], "upload/".$_FILES["image_exterieur2"]["name"]);
 		move_uploaded_file($_FILES["image_exterieur3"]["tmp_name"], "upload/".$_FILES["image_exterieur3"]["name"]);
		move_uploaded_file($_FILES["image_exterieur4"]["tmp_name"], "upload/".$_FILES["image_exterieur4"]["name"]);
 		move_uploaded_file($_FILES["image_interieur"]["tmp_name"], "upload/".$_FILES["image_interieur"]["name"]);
 		move_uploaded_file($_FILES["image_moteur"]["tmp_name"], "upload/".$_FILES["image_moteur"]["name"]);

		mysqli_close($conn);
        echo '<script language="javascript">';
        echo 'alert("Successfully created !"); location.href="listofvehicles.php"';
        echo '</script>';	

?>