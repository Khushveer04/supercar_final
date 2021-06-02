<?php 
include('db_connect.php');


$nom = '';
$email = '';
$message = '';
$Status = '';

$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];
$Status = $_POST['Status'];

$insert_contact = "INSERT into contact (nom, email, message, Status)
			VALUES ('$nom','$email','$message','$Status')";

$insert_contact = mysqli_query($conn, $insert_contact);
			
mysqli_close($conn);
 echo ("<script LANGUAGE='JavaScript'>
    window.location.href='contact_admin.php';
     </script>");

?>