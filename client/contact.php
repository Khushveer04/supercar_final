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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
          margin-top:10px;
         
        }

        #navcolor {
          background-color:#ced4da;
        }

        body,html {background-color: #e9ebef;}

        .iconmore {
            fill: black;
            
        }

        </style>

        <script>
           $(function() {
            $(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
        });
        </script>

</head>

<body class="uk-height-viewport">

<?php include('headerc.php'); ?>

        <div class="uk-container">

        <div class="center" id="titlecolor">
            <p>CONTACTEZ-NOUS</p>
        </div>
            <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                <div>
                    <form class="uk-form-horizontal uk-margin-large" action="contact_add.php" method="post" name="form1" >

                        <div class="uk-margin">
                            <div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="nom" style="color:black"><b>NOM</b></label><input class="uk-input" id="nom" name="nom" type="text" placeholder="Inserez votre nom" pattern="^([a-zA-Z]{2,}\s[a-zA-Z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)" required>
                                </div>
                            </div>

                            <div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="email" style="color:black"><b>EMAIL</b></label><input class="uk-input" id="email" name="email" type="email" placeholder="Inserez votre courriel" required>
                                </div>
                            </div>
                            
                            <input type="hidden" name="Status" id="Status" value="Active">

                            <div>
                                <label class="uk-form-label" for="form-horizontal-text" style="color:black"><b>MESSAGE</b></label>
                                <div class="uk-margin">
                                    <textarea class="uk-textarea" rows="5" name="message" type="text" placeholder="Entrez le message ici" required></textarea>
                                </div>
                                <br>
                                <button class="uk-button uk-button-secondary rounded mx-auto d-block" type="submit" >ENVOYER</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>   
            <div uk-alert>
            <p style= "text-align: center;">Copyright © Supercar 2020</p>
            <p  class="text-center"><a href="mention.php">Mentions légales</a></p>
        </div>    
    </body>
    </html>