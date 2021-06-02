<?php 
include('db_connect.php');

$id = '';
$nom = '';
$email = '';
$message = '';
$Status = '';
$date = '';


$id = $_POST['id'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];
$Status = $_POST['Status'];
$date = $_POST['date'];


if (isset($id)) {

	if (mysqli_num_rows(checkcontact($conn, $id)) > 0) {

		$UPDATE_CONTACT = "UPDATE contact SET  nom='$nom', email='$email', message='$message' , Status='$Status', date='$date' where id='$id'";
	
		$UPDATE_CONTACT = mysqli_query($conn, $UPDATE_CONTACT);
        
        mysqli_close($conn);
        echo '<script language="javascript">';
        echo 'alert("Successfully updated !"); location.href="contact_admin.php"';
        echo '</script>';

	}
}

function checkcontact($conn, $id) {
	$VEHICLE_IN_TB = "SELECT id
					FROM contact
					WHERE id = '$id'";
	return $VEHICLE_IN_TB =  mysqli_query($conn, $VEHICLE_IN_TB);
}

?>
