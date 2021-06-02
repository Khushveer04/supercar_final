<?php
include('db_connect.php');

// CONTACT

if(isset($_GET["delete"])) {
	if ($_GET["delete"] == 'yes') {
		echo $ID = $_GET["id"];
		$CONTACT_STATUS =  mysqli_query($conn, "UPDATE contact
												SET Status = 'Inactive'
												WHERE id = '$ID'");
    }

    header("Location: contact_admin.php");
}

?>