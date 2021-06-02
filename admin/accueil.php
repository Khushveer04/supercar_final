<?php 
include('db_query_index.php');
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>ACCUEIL</title>
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
  <p>ACCUEIL</p>
</div>

<div class="uk-container">
   

<table id="myTable" class="uk-table-edit uk-table-striped uk-form-horizontal uk-container uk-table-middle table-hover ">
    <thead>

    <?php 
        $COUNT = 0;
        while ($row = mysqli_fetch_assoc($accueil)) { ?>
        <?php $space= " ";
            $COUNT = $COUNT + 1;
            
            ?>

         <!-- EDIT -->
         <div uk-alert><p>Voici tous les contenus de la page d'accueil. Si vous voulez modifier, cliquez ici : <a href="edit_accueil.php?id=<?php echo $row['id']; ?>" style="color:#2ab3a6" class="uk-icon-link uk-margin-small-right " uk-tooltip="Edit" uk-icon="file-edit"></a></div>
         


<dl class="uk-description-list uk-description-list-divider">
    <dt><b>ID</b></dt>
    <dd><?php echo $COUNT; ?></dd>
    <dt><b>Titre</b></dt>
    <dd><?php echo $row['titre_intro']; ?></dd>
    <dt><b>Intro</b></dt>
    <dd><?php echo $row['intro']; ?></dd>
    <dt><b>Photo slide:</b></dt>
    <dd><?php echo $row['link_photo']; ?></dd>
    <dt><b>Photo slide1:</b></dt>
    <dd><?php echo $row['link_photo1']; ?></dd>
    <dt><b>Photo slide2:</b></dt>
    <dd><?php echo $row['link_photo2']; ?></dd>
    <dt><b>Nouvelle Arrivee1:</b></dt>
    <dd><?php echo $row['nouv_arriv_photo1']; ?></dd>
    <dt><b>Nouvelle Arrivee2:</b></dt>
    <dd><?php echo $row['nouv_arriv_photo2']; ?></dd>
    <dt><b>Nouvelle Arrivee3:</b></dt>
    <dd><?php echo $row['nouv_arriv_photo3']; ?></dd>
    <dt><b>Nouvelle Arrivee4:</b></dt>
    <dd><?php echo $row['nouv_arriv_photo4']; ?></dd>
    <dt><b>Description</b></dt>
    <dd><?php echo $row['descrip_nouvelle']; ?></dd>
    <dt><b>Lien Twitter:</b></dt>
    <dd><?php echo $row['link_twitter']; ?></dd>
    <dt><b>Lien Instagram:</b></dt>
    <dd><?php echo $row['link_instagram']; ?></dd>
    <dt><b>Lien Facebook:</b></dt>
    <dd><?php echo $row['link_facebook']; ?></dd>
    <dt><b>Lien Pinterest:</b></dt>
    <dd><?php echo $row['link_pinterest']; ?></dd>
    <dt><b>Adresse:</b></dt>
    <dd><?php echo $row['adresse']; ?></dd>
    <dt><b>Heure d'ouverture:</b></dt>
    <dd><?php echo $row['heures_ouverture']; ?></dd>
    <dt><b>Telephone:</b></dt>
    <dd><?php echo $row['telephone']; ?></dd>
    <dt><b>Email</b></dt>
    <dd><?php echo $row['email']; ?></dd>
    <dt><b>Lien Map:</b></dt>
    <dd>
        <div class="uk-textarea"><?php echo $row['link_map']; ?></div>
    </dd>
</dl>


               

    <?php } ?>

        


        

    </div>

</body>
</html>
