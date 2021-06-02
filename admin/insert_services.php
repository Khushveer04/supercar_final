<?php 
include('db_connect.php');

$id = '';
$para1 = '';
$para2 = '';
$para3 = '';
$Status = '';

$id=$_POST['id'];
$para1=$_POST['para1'];
$para2=$_POST['para2'];
$para3=$_POST['para3'];
$Status=$_POST['Status'];
$photo = $_FILES["photo"]['name'];



if (isset($id)) {

	if (mysqli_num_rows(checkcontact($conn, $id)) > 0) {

		$UPDATE_CONTACT = "UPDATE services SET  para1='$para1', para2='$para2', para3='$para3' , Status='$Status', photo='$photo' where id='$id'";
	
		$UPDATE_CONTACT = mysqli_query($conn, $UPDATE_CONTACT);
        move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/".$_FILES["photo"]["name"]);
        
        mysqli_close($conn);
        echo '<script language="javascript">';
        echo 'alert("Successfully updated !"); location.href="services_admin.php"';
        echo '</script>';

	}
}

function checkcontact($conn, $id) {
	$VEHICLE_IN_TB = "SELECT id
					FROM services
					WHERE id = '$id'";
	return $VEHICLE_IN_TB =  mysqli_query($conn, $VEHICLE_IN_TB);
}

?>