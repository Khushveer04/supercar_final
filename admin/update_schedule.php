<?php 
include('db_connect.php');

$id= '';
$civilite = '';
$nom = '';
$prenom = '';
$email = '';
$num_tel = '';
$selection = '';
$c_email = '';
$c_sms = '';
$c_tel = '';
$license = '';
$schedule_date = '';
$Status = '';

$id = $_POST['id'];
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$Status = $_POST['Status'];
$schedule_date = $_POST['schedule_date'];
$num_tel = $_POST['num_tel'];
$selection = $_POST['selection'];
$c_email = $_POST['c_email'];
$c_sms = $_POST['c_sms'];
$c_tel = $_POST['c_tel'];
$license = $_POST['license'];

if (isset($id)) {

	if (mysqli_num_rows(checkcontact($conn, $id)) > 0) {

		$UPDATE_SCHEDULE = "UPDATE schedule SET civilite='$civilite', nom= '$nom', email= '$email', prenom= '$prenom', Status= '$Status', schedule_date= '$schedule_date',
                            num_tel= '$num_tel', selection= '$selection', c_email= '$c_email', c_sms= '$c_sms', c_tel= '$c_tel',
                            license= '$license'
						 WHERE id= '$id'";
	
		$UPDATE_SCHEDULE = mysqli_query($conn, $UPDATE_SCHEDULE);
        
        mysqli_close($conn);
        echo '<script language="javascript">';
        echo 'alert("Successfully updated !"); location.href="schedule.php"';
        echo '</script>';

	}
}

function checkcontact($conn, $id) {
	$VEHICLE_IN_TB = "SELECT id
					FROM schedule
					WHERE id = '$id'";
	return $VEHICLE_IN_TB =  mysqli_query($conn, $VEHICLE_IN_TB);
}

?>
