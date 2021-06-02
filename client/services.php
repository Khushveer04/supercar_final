<?php 
include('db_query.php');
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
          font-size: 45px;
          font-weight: lighter;
         
        }

        #navcolor {
          background-color:#ced4da;
        }

        body {background-color: #e9ebef;}

        .iconmore {
            fill: black;
            
        }

       

        </style>


</head>

<body class="uk-height-viewport">

<?php include('headerc.php'); ?>

<body>
    
    <div class="uk-section">
        <div class="uk-container">

        <div class="center" id="titlecolor">
            <p>SERVICES</p>
        </div>
    
            <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                <div>
                    <?php while ($rows = mysqli_fetch_assoc($info_services)) { ?>
                        <center style="padding-bottom:40px;"><?php echo '<img src="upload/'.$rows['photo'].'" width="440px" height="70px", alt="image">'?></center>
                    <?php } ?>
                </div>
            </div>       

            <h2 class="uk-modal-title uk-text-small uk-text-normal uk-alert" uk-alert><?php echo $para1;echo "<br><br>";echo $para2;echo "<br><br>";echo $para3; ?></h2>
    </div>
    <div uk-alert>
            <p style= "text-align: center;">Copyright © Supercar 2020</p>
            <p  class="text-center"><a href="mention.php">Mentions légales</a></p>
        </div>
    </body>
    </html>