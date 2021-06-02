<?php 

include('db_query_index.php');
include('db_connect.php');
include('header.php');

$id = '';


$nom = '';
$email = '';
$message = '';
$Status = '';


if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $contact = mysqli_fetch_assoc(get_info_contact($conn, $id));

    'nom: ' . $nom = $contact['nom'];
    'email: ' . $email = $contact['email'];
    'message: ' . $message = $contact['message'];
    'Status: ' . $Status = $contact['Status'];
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
  <p><B>MODIFICATION CONTACT</B></p>
</div>

<form class="uk-form-horizontal uk-container" action="update_contact.php" method="post" enctype="multipart/form-data">


<H4 class="uk-margin uk-margin-left">FORMULAIRE MISE A JOUR: </H4>
<p class= "uk-margin uk-margin-left"><u>DETAILS DU VEHICULE</u>

<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>

    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom uk-hidden">
            <label class="uk-form-label" for="id"><b>ID</b></label>
            <div class="uk-form-controls">
                <input readonly class="uk-input" id="id" name="id" type="text" value="<?php echo $id = $contact['id'];?>" required>
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top  uk-margin-bottom">
            <label class="uk-form-label" for="nom"><b>Titre</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="nom" name="nom" type="text" value="<?php echo $nom = $contact['nom'];?>">
            </div>
        </div>

        <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="email"><b>Courriel</b></label>
            <div class="uk-form-controls">
                <input class="uk-input" id="email" name="email" type="text" value="<?php echo $email = $contact['email'];?>">
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

    </div>


    <div>


    <div class="uk-margin uk-margin-left uk-margin-right uk-margin-top uk-form-width-large">
        <label class="uk-form-label" for="message"><b>Message</b></label>
        <div class="uk-form-controls">
            <input class="uk-input" id="message" name="message" type="text" value="<?php echo $message = $contact['message'];?>">
        </div>
    </div>
    
    
    <button class="uk-button uk-button-primary uk-margin-bottom" type="submit" value="submit">Envoyer</button>
</div>



    

</form>
</body>
</html>