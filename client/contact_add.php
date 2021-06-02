<html>
<head>
    <title>Add Contact</title>
</head>
 
<body>
<?php

include ("db_connect.php");

$nom="";
$email="";
$message="";
$Status="";


$nom=$_POST["nom"];
$email=$_POST["email"];
$message=$_POST["message"];
$Status=$_POST["Status"];

$CR_CONTACT = "INSERT INTO contact (nom, email, message, Status) VALUES ('$nom', '$email', '$message', '$Status')";

$CR_CONTACT = mysqli_query($conn, $CR_CONTACT);

mysqli_close($conn);
echo '<script language="javascript">';
echo 'alert("Successfully sent !"); location.href="index.php"';
echo '</script>';	
			

?>
<br>
</body>
</html>