<html>
<head>
    <title>Add Data</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>
 
<body>
<?php

include ("db_connect.php");

$civilite="";
$nom="";
$prenom="";
$email="";
$num_tel="";
$selection="";
$c_email="";
$c_sms="";
$c_tel="";
$license="";
$schedule_date="";
$Status="";


$civilite=$_POST["civilite"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$num_tel=$_POST["num_tel"];
$selection=$_POST["selection"];
$c_email=$_POST["c_email"];
$c_sms=$_POST["c_sms"];
$c_tel=$_POST["c_tel"];
$license=$_POST["license"];
$schedule_date=$_POST["schedule_date"];
$Status=$_POST["Status"];


$ajouter = "INSERT into schedule (civilite,nom,prenom,email,num_tel,selection,c_email,c_sms,c_tel,license,schedule_date,Status)
			VALUES ('$civilite','$nom','$prenom','$email','$num_tel','$selection','$c_email','$c_sms','$c_tel','$license','$schedule_date','$Status')";
mysqli_query($conn, $ajouter);
			
mysqli_close($conn);

echo '<script language="javascript">';
echo 'alert("Successfully sent !"); location.href="listofvehicles.php"';
echo '</script>';		
?>

</body>
</html>