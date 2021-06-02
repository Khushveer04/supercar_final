<?php
include("db_connect.php");
include("db_query_index.php");
include('header.php');

if(isset($_POST['update'])){
$id=$_POST['id'];
$para1=$_POST['para1'];
$para1 = str_replace("'","\'",$para1);
$para2=$_POST['para2'];
$para2 = str_replace("'","\'",$para2);
$para3=$_POST['para3'];
$para3 = str_replace("'","\'",$para3);
$Status=$_POST['Status'];


$result= mysqli_query($conn, "UPDATE services SET  para1='$para1', para2='$para2', para3='$para3' , Status='$Status' where id=$id ");
header("Location: services_admin.php");}

?>


<?php

if(isset($_GET['id'])) {
$id=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM services WHERE id=$id");
while( $row = mysqli_fetch_array($result)){

$id= $row['id'];
$para1= $row['para1'];
$para1 = str_replace("'","\'",$para1);
$para2=$row['para2'];
$para2 = str_replace("'","\'",$para2);
$para3=$row['para3'];
$para3 = str_replace("'","\'",$para3);
$Status=$row['Status'];
}
}

if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $services = mysqli_fetch_assoc(get_info_services($conn, $id));

    'id: ' . $id = $services['id'];
    'para1: ' . $name = $services['para1'];
    'para2: ' . $make = $services['para2'];
    'para3: ' . $model = $services['para3'];
    'Status: ' . $Status = $services['Status'];
    'photo: ' . $photo = $services['photo'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.css"/>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $(".datepicker").datepicker();
        });
        
        $( function() {
            $("input").checkboxradio();
        } );
    </script>

    <style>

        .datepicker{

        }

        .center {
            text-align: center;
            color: #4d545f;
            font-family: "Segoe UI";
            letter-spacing: 5px;
            font-size: 45px;
            font-weight: lighter;
        }

        #navcolor {
          background-color:#264653;
        }

        body,html {background-color: #e9ebef;}
    
   </style>

</head>
<body>


<div class="center">
  <p><B>MODIFIER SERVICES</B></p>
</div>

<form class="uk-form-horizontal uk-container" action="insert_services.php" method="post" enctype="multipart/form-data">


<H4 class="uk-margin uk-margin-left">FORMULAIRE MODIFIER SERVICE : </H4>
<p class= "uk-margin uk-margin-left"><u>DETAILS</u>

<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="photo"><b>Image actuelle</b></label>
            <div class="uk-form-controls">
                <?php echo '<img src="upload/'.$services['photo'].'" width="170px" height="170px", alt="photo">' ?>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="photo"><b>Mise a jour image</b></label>
            <div class="uk-form-controls">
                <label>Image</label>
                <input type="file" name="photo" id="photo" accept="image/x-png,image/gif,image/jpeg" class="form-control" value="<?php echo $photo; ?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="para1"><b>Paragraph 1</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="para1" name="para1" type="text" value="<?php echo $para1;?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="para2"><b>Paragraph 2</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="para2" name="para2" type="text" value="<?php echo $para2;?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="para3"><b>Paragraph 2</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="para3" name="para3" type="text" value="<?php echo $para3;?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="Status"><b>Statue</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="Status" name="Status" type="text" value="<?php echo $Status;?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="id"><b>ID</b></label>
            <div class="uk-form-controls">
                <input readonly class="uk-input" id="id" name="id" type="text" value="<?php echo $id;?>" required>
            </div>
        </div>

    <center><button class="uk-button uk-button-primary uk-margin-bottom" type="submit" value="submit">ENVOYER</button></center>
</div>

</form>
</body>
</html>