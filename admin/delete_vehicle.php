<?php
include('db_connect.php');

// index

if(isset($_GET["delete"])) {
	if ($_GET["delete"] == 'yes') {
		echo $ID = $_GET["id"];
		$CONTACT_INDEX =  mysqli_query($conn, "UPDATE info
												SET Status = 'Inactive'
												WHERE id = '$ID'");
    }

    header("Location: listofvehicles.php");
}

?>