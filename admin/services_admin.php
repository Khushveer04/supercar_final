<?php 
include_once("db_connect.php");
include('header.php');
$result='';

$result = mysqli_query($conn, "SELECT * FROM services");
?>

<!DOCTYPE html>
<html>
<head>
	<title>SERVICES</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>

        <style>

        .center {
          text-align: center;
          font-size: 35px;
        }

        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
          background-color:#E8E8E8;
        }

        p1 {
            font-size: 17px
        }

        #titlecolor {

          color: #4d545f;
          font-family: "Segoe UI";
          letter-spacing: 5px;
          font-size: 55px;
          font-weight: lighter;
         
        }

        #navcolor {
          background-color:#264653;
        }

        body,html {background-color: #e9ebef;}

        .iconmore {
            fill: black;
            
        }

        </style>


</head>

<body class="uk-height-viewport">

<div class="center" id="titlecolor">
  <p>SERVICES</p>
</div>

<div class="uk-container">
   

<table id="myTable" class="uk-table-edit uk-table-striped uk-form-horizontal uk-container uk-table-middle table-hover ">
    <thead>

    <?php 
        $COUNT = 0;
        while($rows = mysqli_fetch_array($result)) { ?>
        <?php $space= " ";
            $COUNT = $COUNT + 1;
            
            ?>

         <!-- EDIT -->
         <div uk-alert><p>Voici tous les informations dans la page service. Si vous voulez modifier, cliquer ici : <a href="edit_services.php?id=<?php echo $rows['id']; ?>" style="color:#2ab3a6" class="uk-icon-link uk-margin-small-right " uk-tooltip="Edit" uk-icon="file-edit"></a></div>
         


<dl class="uk-description-list uk-description-list-divider">
    <dt><b>Photo</b></dt>
    <dd><?php echo $rows['photo']; ?></dd>
    <dt><b>Paragraph 1</b></dt>
    <dd><?php echo $rows['para1']; ?></dd>
    <dt><b>Paragraph 2</b></dt>
    <dd><?php echo $rows['para2']; ?></dd>
    <dt><b>Paragraph 3:</b></dt>
    <dd><?php echo $rows['para3']; ?></dd>
</dl>

<?php } ?>
    </div>

</body>
</html>
