<?php
include('header.php');
include('db_connect.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>CONTACT</title>
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

    <script>
        $(function() {
            $(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
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

<div class="center" id="titlecolor">
  <p>AJOUT D'UN CONTACT</p>
</div>

<form class="uk-form-horizontal uk-container" action="insert_contact.php" method="post">
<h4 class="uk-margin uk-margin-left">Veuillez remplir le formulaire si dessous:</h4>

<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-margin-bottom uk-form-width-large">
            <label class="uk-form-label" for="nom"><b>Nom</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="nom" name="nom" type="text" placeholder="Inserez le nom" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="email"><b>Courriel</b></label>
            <div class="uk-form-controls">
                <input class="uk-input"  type="email" id="email" name="email" type="text" placeholder="Inserez le courriel" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="message"><b>Message</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" type="text" id="message" name="message" type="text" placeholder="Inserez le message" required>
            </div>
        </div>

    

    </div>


    <div>

    <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Statue</b></div>
            <div class="uk-form-controls">
                <div class id="Status" name="Status">
                    <label><input class="uk-radio" type="radio" value="Active" name="Status" required> Active</label><br>
                    <label><input class="uk-radio" type="radio" value="Inactive" name="Status" required> Inactive</label>
                </div>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="date" name="date"><b>Date</b></label>
        <div class="uk-form-controls">
            <input class="uk-input datepicker" type="text" class="datepicker" placeholder="Selectionnez la date" id="date" name="date" required>
        </div>
    </div>

    <button class="uk-button uk-button-primary uk-margin uk-margin-xlarge-left uk-margin-bottom" type="submit" value="SUBMIT">ENVOYER</button><br>
        
    </form>  

</div>




</body>
</html>