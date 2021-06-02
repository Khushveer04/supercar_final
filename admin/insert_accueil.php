<?php 
include('db_connect.php');

$id = '';


$id= $_POST['id'];
$titre_intro = $_POST['titre_intro'];
$link_photo = $_FILES["link_photo"]['name'];
$link_photo1 = $_FILES["link_photo1"]['name'];
$link_photo2 = $_FILES["link_photo2"]['name'];
$nouv_arriv_photo1 = $_FILES["nouv_arriv_photo1"]['name'];
$nouv_arriv_photo2 = $_FILES["nouv_arriv_photo2"]['name'];
$nouv_arriv_photo3 = $_FILES["nouv_arriv_photo3"]['name'];
$nouv_arriv_photo4 = $_FILES["nouv_arriv_photo4"]['name'];
$descrip_nouvelle = $_POST['descrip_nouvelle'];
$link_twitter = $_POST['link_twitter'];
$link_instagram = $_POST['link_instagram'];
$link_facebook = $_POST['link_facebook'];
$link_pinterest = $_POST['link_pinterest'];
$adresse = $_POST['adresse'];
$heures_ouverture = $_POST['heures_ouverture'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$link_map = $_POST['link_map'];




if (isset($id)) {

	if (mysqli_num_rows(checkcontact($conn, $id)) > 0) {

		$UPDATE_accueil = "UPDATE admin_accueil SET titre_intro= '$titre_intro', link_photo= '$link_photo', link_photo1= '$link_photo1', link_photo2= '$link_photo2',
                            nouv_arriv_photo1= '$nouv_arriv_photo1',nouv_arriv_photo2= '$nouv_arriv_photo2',nouv_arriv_photo3= '$nouv_arriv_photo3',nouv_arriv_photo4= '$nouv_arriv_photo4',
                            descrip_nouvelle= '$descrip_nouvelle', link_twitter= '$link_twitter', link_instagram= '$link_instagram', link_facebook= '$link_facebook',
                            link_pinterest= '$link_pinterest', adresse= '$adresse', heures_ouverture= '$heures_ouverture', telephone= '$telephone',
                            email= '$email', link_map= '$link_map'
						    WHERE id= '$id'";
	
		$UPDATE_accueil = mysqli_query($conn, $UPDATE_accueil);
        move_uploaded_file($_FILES["link_photo"]["tmp_name"], "upload/".$_FILES["link_photo"]["name"]);
        move_uploaded_file($_FILES["link_photo1"]["tmp_name"], "upload/".$_FILES["link_photo1"]["name"]);
        move_uploaded_file($_FILES["link_photo2"]["tmp_name"], "upload/".$_FILES["link_photo2"]["name"]);
        move_uploaded_file($_FILES["nouv_arriv_photo1"]["tmp_name"], "upload/".$_FILES["nouv_arriv_photo1"]["name"]);
        move_uploaded_file($_FILES["nouv_arriv_photo2"]["tmp_name"], "upload/".$_FILES["nouv_arriv_photo2"]["name"]);
        move_uploaded_file($_FILES["nouv_arriv_photo3"]["tmp_name"], "upload/".$_FILES["nouv_arriv_photo3"]["name"]);
        move_uploaded_file($_FILES["nouv_arriv_photo4"]["tmp_name"], "upload/".$_FILES["nouv_arriv_photo4"]["name"]);
        
        
        mysqli_close($conn);
        echo '<script language="javascript">';
        echo 'alert("Successfully updated !"); location.href="accueil.php"';
        echo '</script>';	

	}
	
}

function checkcontact($conn, $id) {
	$VEHICLE_IN_TB = "SELECT id
					FROM admin_accueil
					WHERE id = '$id'";
	return $VEHICLE_IN_TB =  mysqli_query($conn, $VEHICLE_IN_TB);
}

?>