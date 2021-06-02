<?php
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>DEMANDE D'ESSAI</title>
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
  <p>NOUVELLE DEMANDE D'ESSAI</p>
</div>

<form class="uk-form-horizontal uk-container" action="insert_schedule.php" method="post">
<h4 class="uk-margin uk-margin-left">Veuillez remplir le formulaire si dedssous: </h4>

<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="civilite"><b>Civilite</b></label>
            <div class="uk-form-controls">
                <select class="uk-select uk-width-1-3" id="form-horizontal-select" name="civilite">
                    <option value="Mr" required>Mr</option>
                    <option value="Mme" required>Mme</option>
                </select>
                </div>
            </div>


        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-margin-bottom uk-form-width-large">
            <label class="uk-form-label" for="nom"><b>Nom</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="nom" name="nom" type="text" placeholder="Inserez le nom" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="prenom"><b>Prenom</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="prenom" name="prenom" type="text" placeholder="Inserez le prenom" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="email"><b>Courriel</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="email" name="email" type="email" placeholder="Inserez le courriel" required>
            </div>
        </div>

        
        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="num_tel"><b>Numero Telephone</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="num_tel" name="num_tel" type="number" placeholder="Inserez le numero telephone" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-form-width-large">
        <label class="uk-form-label" type="selection" for="form-horizontal-select"><b>Sélectionez votre vehicule</b></label>
            <div class="uk-form-controls">
                
                <?php
                require "db_connect.php";
                $resultSet = $conn->query("SELECT model FROM info WHERE Status = 'active'");
                ?>

                <select class="uk-select uk-width-1-1" id="form-horizontal-select" name="selection" required name="info">
                <?php
                while($rows = $resultSet->fetch_assoc()){

                    $model = $rows['model'];
                    echo "<option value='$model'>$model";
                }
                ?>
                </select>
            </div>
        </div>



    </div>

    <div>

    <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Contact par mail</b></div>
            <div class="uk-form-controls">
                <div class id="c_email" name="c_email">
                    <label><input class="uk-radio" type="radio" value="Oui" name="c_email" required> Oui</label><br>
                    <label><input class="uk-radio" type="radio" value="Non" name="c_email" required> Non</label>
                </div>
            </div>
        </div>

       

    <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Contact par sms</b></div>
            <div class="uk-form-controls">
                <div class id="c_sms" name="c_sms">
                    <label><input class="uk-radio" type="radio" value="Oui" name="c_sms" required> Oui</label><br>
                    <label><input class="uk-radio" type="radio" value="Non" name="c_sms" required> Non</label>
                </div>
            </div>
        </div>

       

    <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Contact par telephone</b></div>
            <div class="uk-form-controls">
                <div class id="c_tel" name="c_tel">
                    <label><input class="uk-radio" type="radio" value="Oui" name="c_tel" required> Oui</label><br>
                    <label><input class="uk-radio" type="radio" value="Non" name="c_tel" required> Non</label>
                </div>
            </div>
        </div>

    <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Permit</b></div>
            <div class="uk-form-controls">
                <div class id="license" name="license">
                    <label><input class="uk-radio" type="radio" value="Oui" name="license" required> Oui</label><br>
                    <label><input class="uk-radio" type="radio" value="Non" name="license" required> Non</label>
                </div>
            </div>
        </div>

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
            <label class="uk-form-label" for="schedule_date"><b>Date</b></label>
            <div class="uk-form-controls">
                <input class="uk-input datepicker" type="text" class="datepicker" placeholder="Sélectionez la date" id="datepicker" name="schedule_date" required>
            </div>
        </div>

    <button class="uk-button uk-button-primary uk-margin uk-margin-xlarge-left uk-margin-bottom" type="submit" value="SUBMIT">ENVOYER</button>
        
        

</div>


</form>

</body>
</html>