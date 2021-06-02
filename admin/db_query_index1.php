<?php
include('db_connect.php');

//INDEX

$info = mysqli_query($conn, "SELECT * FROM info
                             WHERE Status = 'Active'");

if(isset($_GET["delete"])) {
	if ($_GET["delete"] == 'yes') {
		echo $ID = $_GET["id"];
		$AGENT_STATUS =  mysqli_query($conn, "UPDATE info
												SET Status = 'Inactive'
												WHERE id = '$ID'");
    }

    header("Location: listofvehicles.php");
}


function get_info($conn, $id) {
		
	$info = mysqli_query($conn, "SELECT * FROM info
								WHERE id = '$id'");
	return $info;
							
}

//CONTACT

$contact = mysqli_query($conn, "SELECT * FROM contact
                             WHERE Status = 'Active'");

function get_info_contact($conn, $id) {
		
	$contact = mysqli_query($conn, "SELECT * FROM contact
								WHERE id = '$id'");
	return $contact;
							
}

//SCHEDULE

$schedule = mysqli_query($conn, "SELECT * FROM schedule
                             WHERE Status = 'Active'");

function get_info_schedule($conn, $id) {
		
	$schedule = mysqli_query($conn, "SELECT * FROM schedule
								WHERE id = '$id'");
	return $schedule;
							
}


//ACCUEIL

$accueil = mysqli_query($conn, "SELECT * FROM admin_accueil
                             WHERE Status = 'Active'");


function get_accueil($conn, $id) {
		
	$accueil = mysqli_query($conn, "SELECT * FROM admin_accueil
								WHERE id = '$id'");
	return $accueil;
							
}

// services

$services = mysqli_query($conn, "SELECT * FROM services
                             WHERE Status = 'Active'");

function get_info_services($conn, $id) {
		
	$services = mysqli_query($conn, "SELECT * FROM services
								WHERE id = '$id'");
	return $services;
							
}

//PROFILE

$admin_profile = mysqli_query($conn, "SELECT * FROM accounts");

function get_info_admin_profile($conn, $id) {
		
	$admin_profile = mysqli_query($conn, "SELECT * FROM accounts
								WHERE id = '$id'");
	return $admin_profile;
							
}


//Laptop total
$cars_for_sale =  mysqli_query($conn,"SELECT COUNT(*) AS carsn
                                    FROM info
									WHERE `status` = 'active'");
$cars_for_sale = mysqli_fetch_assoc($cars_for_sale)['carsn'];

$cars_sold =  mysqli_query($conn,"SELECT COUNT(*) AS carss
                                    FROM info
									WHERE `status` = 'inactive'");
$cars_sold = mysqli_fetch_assoc($cars_sold)['carss'];
						
$message_contact =  mysqli_query($conn,"SELECT COUNT(*) AS messages
                                    FROM contact
									WHERE `status` = 'active'");
$message_contact = mysqli_fetch_assoc($message_contact)['messages'];

$demande =  mysqli_query($conn,"SELECT COUNT(*) AS essai
                                    FROM schedule
									WHERE `status` = 'active'");
$demande = mysqli_fetch_assoc($demande)['essai'];

$demande_termine =  mysqli_query($conn,"SELECT COUNT(*) AS demande
                                    FROM schedule
									WHERE `status` = 'inactive'");
$demande_termine = mysqli_fetch_assoc($demande_termine)['demande'];

$log_user =  mysqli_query($conn,"SELECT COUNT(*) AS user
                                    FROM users");
$log_user = mysqli_fetch_assoc($log_user)['user'];

$admin =  mysqli_query($conn,"SELECT COUNT(*) AS adminuser
                                    FROM users_admin");
$admin = mysqli_fetch_assoc($admin)['adminuser'];

$bmw_stock =  mysqli_query($conn,"SELECT COUNT(*) AS bmwstock
                                    FROM info
									WHERE `make` = 'bmw'");
$bmw_stock = mysqli_fetch_assoc($bmw_stock)['bmwstock'];

$mercedes_stock =  mysqli_query($conn,"SELECT COUNT(*) AS mercedesstock
                                    FROM info
									WHERE `make` = 'mercedes'");
$mercedes_stock = mysqli_fetch_assoc($mercedes_stock)['mercedesstock'];

$porsche_stock =  mysqli_query($conn,"SELECT COUNT(*) AS porschestock
                                    FROM info
									WHERE `make` = 'porsche'");
$porsche_stock = mysqli_fetch_assoc($porsche_stock)['porschestock'];

$alpine_stock =  mysqli_query($conn,"SELECT COUNT(*) AS alpinestock
                                    FROM info
									WHERE `make` = 'alpine'");
$alpine_stock = mysqli_fetch_assoc($alpine_stock)['alpinestock'];

$ferrari_stock =  mysqli_query($conn,"SELECT COUNT(*) AS ferraristock
                                    FROM info
									WHERE `make` = 'ferrari'");
$ferrari_stock = mysqli_fetch_assoc($ferrari_stock)['ferraristock'];

$ford_stock =  mysqli_query($conn,"SELECT COUNT(*) AS fordstock
                                    FROM info
									WHERE `make` = 'ford'");
$ford_stock = mysqli_fetch_assoc($ford_stock)['fordstock'];

$renault_stock =  mysqli_query($conn,"SELECT COUNT(*) AS renaultstock
                                    FROM info
									WHERE `make` = 'renault'");
$renault_stock = mysqli_fetch_assoc($renault_stock)['renaultstock'];



?>