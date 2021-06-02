<?php 

include('db_query_index.php');
include('db_connect.php');
include('header.php');

$id = '';


$civilite = '';
$nom = '';
$prenom = '';
$email = '';
$num_tel = '';
$selection = '';
$c_email = '';
$c_sms = '';
$c_tel = '';
$license = '';
$schedule_date = '';
$Status = '';


if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $schedule = mysqli_fetch_assoc(get_info_schedule($conn, $id));

    'nom: ' . $nom = $schedule['nom'];
    'civilite: ' . $civilite = $schedule['civilite'];
    'prenom: ' . $prenom = $schedule['prenom'];
    'email: ' . $email = $schedule['email'];
    'num_tel: ' . $num_tel = $schedule['num_tel'];
    'selection: ' . $selection = $schedule['selection'];
    'c_email: ' . $c_email = $schedule['c_email'];
    'c_sms: ' . $c_sms = $schedule['c_sms'];
    'c_tel: ' . $c_tel = $schedule['c_tel'];
    'license: ' . $license = $schedule['license'];
    'schedule_date: ' . $schedule_date = $schedule['schedule_date'];
    'Status: ' . $Status = $schedule['Status'];
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


<div class="center">
  <p><B>MISE A JOUR DEMANDE D'ESSAI</B></p>
</div>

<form class="uk-form-horizontal uk-container" action="update_schedule.php" method="post" enctype="multipart/form-data">


<H4 class="uk-margin uk-margin-left">FORMULAIRE MISE A JOUR : </H4>
<p class= "uk-margin uk-margin-left"><u>DETAILS DEMANDE D'ESSAI</u>

<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="civilite"><b>Civilite</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="civilite" name="civilite" type="text" value="<?php echo $civilite = $schedule['civilite'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large uk-hidden">
        <label class="uk-form-label" for="id"><b>ID</b></label>
            <div class="uk-form-controls">
                <input readonly class="uk-input" id="id" name="id" type="text" value="<?php echo $id = $schedule['id'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="nom"><b>Nom</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="nom" name="nom" type="text" value="<?php echo $nom = $schedule['nom'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="prenom"><b>Prenom</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="prenom" name="prenom" type="text" value="<?php echo $prenom = $schedule['prenom'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="email"><b>Courriel</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="email" name="email" type="text" value="<?php echo $email = $schedule['email'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="num_tel"><b>Numero Telephone</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="num_tel" name="num_tel" type="text" value="<?php echo $num_tel = $schedule['num_tel'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Statue</b></div>
        <div class="uk-form-controls">
            <div class id="Status" name="Status">

            <?php if($Status == 'YES') { ?>
                <label><input class="uk-radio" type="radio" value="Active" name="Status" > Active</label><br>
                <label><input class="uk-radio" type="radio" value="Inactive" name="Status" checked> Inactive</label>
                <?php } else { ?>
                    <label><input class="uk-radio" type="radio" value="Active" name="Status" checked> Active</label><br>
                <label><input class="uk-radio" type="radio" value="Inactive" name="Status" > Inactive</label>
                <?php } ?>

            </div>
        </div>
    </div>


    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="schedule_date" name="schedule_date"><b>Date</b></label>
        <div class="uk-form-controls">
            <input class="uk-input datepicker" type="text" class="datepicker" value="<?php echo $schedule_date = $schedule['schedule_date'];?>" id="schedule_date" name="schedule_date">
        </div>
    </div>

    </div>


    <div>

    <div class="uk-margin uk-margin-left uk-margin-right">
    <label class="uk-form-label" type="selection" for="form-horizontal-select"><b>Sélectionez votre vehicule</b></label>
            <div class="uk-form-controls">
                
            <?php
                require "db_connect.php";
                $resultSet = $conn->query("SELECT make, model, couleur FROM info WHERE Status = 'active'");
                ?>

                <select class="uk-select uk-width-1-1" id="form-horizontal-select" name="selection" required name="info">
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


     <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Contact par mail</b></div>
        <div class="uk-form-controls">
            <div class id="c_email" name="c_email">

            <?php if($schedule['c_email'] == 'YES') { ?>
                <label><input class="uk-radio" type="radio" value="YES" name="c_email" checked> Yes</label><br>
                <label><input class="uk-radio" type="radio" value="NO" name="c_email"> No</label>
                <?php } else { ?>
                    <label><input class="uk-radio" type="radio" value="YES" name="c_email"> Yes</label><br>
                <label><input class="uk-radio" type="radio" value="NO" name="c_email" checked> No</label>
                <?php } ?>

            </div>
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Contact par sms</b></div>
        <div class="uk-form-controls">
            <div class id="c_sms" name="c_sms">

            <?php if($schedule['c_sms'] == 'YES') { ?>
                <label><input class="uk-radio" type="radio" value="YES" name="c_sms" checked> Yes</label><br>
                <label><input class="uk-radio" type="radio" value="NO" name="c_sms"> No</label>
                <?php } else { ?>
                    <label><input class="uk-radio" type="radio" value="YES" name="c_sms"> Yes</label><br>
                <label><input class="uk-radio" type="radio" value="NO" name="c_sms" checked> No</label>
                <?php } ?>

            </div>
        </div>
    </div>

    <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>Contact par Telephone</b></div>
        <div class="uk-form-controls">
            <div class id="c_tel" name="c_tel">

            <?php if($schedule['c_tel'] == 'YES') { ?>
                <label><input class="uk-radio" type="radio" value="YES" name="c_tel" checked> Yes</label><br>
                <label><input class="uk-radio" type="radio" value="NO" name="c_tel"> No</label>
                <?php } else { ?>
                    <label><input class="uk-radio" type="radio" value="YES" name="c_tel"> Yes</label><br>
                <label><input class="uk-radio" type="radio" value="NO" name="c_tel" checked> No</label>
                <?php } ?>

            </div>
        </div>
    </div>


    <div class="uk-margin uk-margin-left uk-margin-right">
        <div class="uk-form-label"><b>License</b></div>
        <div class="uk-form-controls">
            <div class id="license" name="license">

            <?php if($schedule['license'] == 'YES') { ?>
                <label><input class="uk-radio" type="radio" value="YES" name="license" checked> Oui</label><br>
                <label><input class="uk-radio" type="radio" value="NO" name="license"> Non</label>
                <?php } else { ?>
                    <label><input class="uk-radio" type="radio" value="YES" name="license"> Oui</label><br>
                <label><input class="uk-radio" type="radio" value="NO" name="license" checked> Non</label>
                <?php } ?>

            </div>
        </div>
    </div>


    <button class="uk-button uk-button-primary uk-margin-bottom" type="submit" value="submit">Envoyer</button>
</div>



    

</form>
</body>
</html>