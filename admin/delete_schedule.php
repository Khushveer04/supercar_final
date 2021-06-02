<?php
include('db_connect.php');

// schedule

if(isset($_GET["delete"])) {
	if ($_GET["delete"] == 'yes') {
		echo $ID = $_GET["id"];
		$CONTACT_SCHEDULE =  mysqli_query($conn, "UPDATE schedule
												SET Status = 'Inactive'
												WHERE id = '$ID'");
    }

    header("Location: schedule.php");
}

?>