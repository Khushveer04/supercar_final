<?php
// Initialize the session
session_start();
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Demande d'essai</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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

        body, html {background-color: #e9ebef;}

        .iconmore {
            fill: black;
            
        }
        </style>

    <script>
    $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd'});
    } );
    </script>
</head>
<body>
<h2 class="uk-modal-title uk-text-small uk-alert" style="text-align: left" uk-alert>Salut, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue dans la page de demande d'essai. Veuillez remplir le formulaire pour s'enregistrer a un essai routier. 
        <br><br> Vous pouvez aussi reinitialiser votre mot de passe ici: <a href="reset-password.php" class="btn btn-danger">REINITIALISER</a>
        ou de retourner a la page d'acceuil: <a href="logout.php" class="btn btn-danger">RETOUR</a></h2>

        <div class="uk-child-width-expand@s" uk-grid>
            <div class="uk-width-1-2">
                <div class="uk-container">
                <!-- <h2 class="uk-text-small uk-alert-danger" style="text-align: center" uk-alert>VEUILLEZ REMPLIR LE FORMULAIRE SI DESSOUS</h2> -->
                    <form class="uk-form-horizontal" action="send_schedule.php" method="post" name="form1">
                </div>
            </div>
        </div>

        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
        <div>
            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-margin-bottom uk-form-width-large">
                <label class="uk-form-label"><b>Civilité</b></label>
                <div class="uk-form-controls">
                <select class="uk-select uk-width-1-6" id="form-horizontal-select" name="civilite">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                </div>
            </div>

            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label"><b>Nom</b></label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-width-1-2" id="form-horizontal-text" name="nom" type="text" placeholder="Entrer votre nom" pattern="^[A-Za-z]+[A-Za-z]+" required>
                </div>
            </div>



            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label"  for="form-horizontal-text"><b>Prénom</b></label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-width-1-2" id="form-horizontal-text" name="prenom" type="text" placeholder="Entrer votre prénom" pattern="^[A-Za-z]+[A-Za-z]+" required>
                </div>
            </div>

            <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top">
            <label class="uk-form-label"><b>Email</b></label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-width-1-3" type="email" id="form-horizontal-text" name="email" placeholder="Entrer votre email" required>
                </div>
            </div>
        

        <div class="uk-margin uk-margin-left uk-margin-right uk-form-width-large">
        <label class="uk-form-label" type="selection" for="form-horizontal-select"><b>Sélectionez votre vehicule</b></label>
            <div class="uk-form-controls">
                
                <?php
                require "db_connect.php";
                $resultSet = $conn->query("SELECT make, model, couleur FROM info WHERE Status = 'active'");
                ?>

                <select class="uk-select uk-width-1-2" id="form-horizontal-select" name="selection" required name="info">
                <?php
                while($rows = $resultSet->fetch_assoc()){

                    $model = $rows['model'];
                    $make = $rows['make'];
                    $colour = $rows['couleur'];
                    echo "<option value='$model'>$make $model ($colour)";
                }
                ?>
                </select>
            </div>
        </div>


        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <label class="uk-form-label" for="schedule_date"><b>Date</b></label>
            <div class="uk-form-controls">
                <input class="uk-input datepicker uk-width-1-2" type="input" class="datepicker" placeholder="Selectionnez la date" id="datepicker" name="schedule_date" required>
            </div>
        </div>

        </div>

        <div>
        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top">
                <div class="uk-form-controls">
                <div class="uk-form-label"><b>Êtes vous agé de 18 ans et titulaire d'un permis de conduire</b></div>
            <div class="uk-form-controls uk-form-controls-text">
            
            <div class="uk-form-controls uk-form-controls-text">
            
            <label><input class="uk-radio uk-text-meta" type="radio" name="license" <?php if (isset($license) && $license=="oui") echo "checked";?>
            value="oui" required> Oui</label><br>
            
            <label><input class="uk-radio uk-text-meta" type="radio" name="license" <?php if (isset($license) && $license=="non") echo "checked";?>
            value="non" required> Non</label><br>
        </div>
        
            </div>
                </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top">
                <div class="uk-form-controls">
                <div class="uk-form-label"><b>Contactez moi par Email</b></div>
            <div class="uk-form-controls uk-form-controls-text">
            
                <label><input class="uk-radio" type="radio" name="c_email" <?php if (isset($c_email) && $c_email=="oui") echo "checked";?>
                value="oui" required> Oui</label><br>
                
                <label><input class="uk-radio" type="radio" name="c_email" <?php if (isset($c_email) && $c_email=="non") echo "checked";?>
                value="non" required> Non</label><br>
        
            </div>
                </div>
        </div>
        

        <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Contactez moi par Message</b></div>
            <div class="uk-form-controls uk-form-controls-text">
            
                
                <label><input class="uk-radio" type="radio" name="c_sms" <?php if (isset($c_sms) && $c_sms=="oui") echo "checked";?>
                value="oui" required> Oui</label><br>
                
                <label><input class="uk-radio" type="radio" name="c_sms" <?php if (isset($c_sms) && $c_sms=="non") echo "checked";?>
                value="non" required> Non</label><br>
            </div>
            </div>
        

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
            <div class="uk-form-label"><b>Contactez moi par Télephone</b></div>
            <div class="uk-form-controls uk-form-controls-text">
            
                <label><input class="uk-radio" type="radio" name="c_tel" <?php if (isset($c_tel) && $c_tel=="oui") echo "checked";?>
                value="oui" required> Oui</label><br>
                
                <label><input class="uk-radio" type="radio" name="c_tel" <?php if (isset($c_tel) && $c_tel=="non") echo "checked";?>
                value="non" required> Non</label><br>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="form-horizontal-text"><b>Numero télephone</b></label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-width-1-2" id="form-horizontal-text" name="num_tel" type="text" placeholder="Entrer votre numero télephone" pattern="^[+][0-9]{11}" required>
                </div>
        
                <br>
        <input type="hidden" name="Status" id="Status" value="Active">
        <button class="uk-button uk-button-secondary rounded mx-auto d-block" type="submit" value="SUBMIT" >ENVOYER</button>
        </div>
        
    </div>

    

    </form>
    </div>

</body>
</html>