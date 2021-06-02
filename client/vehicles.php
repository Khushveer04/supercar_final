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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
          font-size: 30px;
          font-weight: lighter;
         
        }

        #titlecolora {

        color: #4d545f;
        font-family: "Segoe UI";
        letter-spacing: 5px;
        font-size: 28px;
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

<body> 
<?php include('headerc.php'); ?>   
    <div class="uk-container uk-container-medium uk-margin-top">
    
        <center>
            <div style="background-color: white;"><p id="titlecolor"><?php echo $name;?></p></div>
        </center>
        
        <?php while ($row = mysqli_fetch_assoc($infovehicule)) { ?>

        <div class="uk-child-width-1-2@s" uk-alert>
            <div class="uk-panel uk-panel-box uk-text-truncate">Le prix est: <?php echo $row['prix']; ?></div>
        </div>
        
        <p id="titlecolora">SOMMAIRE</p>
        <p><?php echo $row['intro'];?></p>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo '<img src="upload/'.$row['image'].'" class="d-block w-100" alt="Image">' ?>
                </div>
            </div>
        </div>

        <?php } ?>

        <div class="table-responsive"> <br>
            <table class="table">
                <thead  style="background-color:#50d0ae;">
                    <tr>
                    <th scope="col" style="color:white">Marque</th>
                    <th scope="col" style="color:white">Modèle</th>
                    <th scope="col" style="color:white">Type</th>
                    <th scope="col" style="color:white">Ann&eacutee</th>
                    <th scope="col" style="color:white">Couleur</th>
                    <th scope="col" style="color:white">Moteur</th>
                    <th scope="col" style="color:white">Transmission</th>
                    <th scope="col" style="color:white">Cylindre</th>
                    <th scope="col" style="color:white">Capacit&eacute</th>
                    <th scope="col" style="color:white">Jante</th>
                    <th scope="col" style="color:white">Interieur</th>
                    <th scope="col" style="color:white">Kilom&eacutetrage</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $make; ?></td>
                    <td><?php echo $model; ?></td>
                    <td><?php echo $type; ?></td>
                    <td><?php echo $annee; ?></td>
                    <td><?php echo $couleur; ?></td>
                    <td><?php echo $nom_moteur; ?></td>
					<td><?php echo $transmission; ?></td>
                    <td><?php echo $cylindre; ?></td>
                    <td><?php echo $capacite; ?></td>
                    <td><?php echo $jante; ?></td>
                    <td><?php echo $interieur_couleur; ?></td>
                    <td><?php echo $kilometrage; ?></td>
                </tr>
            </tbody>
        </table>
        </div>

        <p id="titlecolora">
            EXT&EacuteRIEUR
        </p>
        <p><?php echo $exterieur; ?></p>

        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
        <?php while ($rowsp = mysqli_fetch_assoc($infopicvehicle)) { ?>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo '<img src="upload/'.$rowsp['image_exterieur'].'" class="d-block w-100" alt="Image">' ?>
                </div>
                <div class="carousel-item">
                    <?php echo '<img src="upload/'.$rowsp['image_exterieur2'].'" class="d-block w-100" alt="Image">' ?>
                </div>
                <div class="carousel-item">
                    <?php echo '<img src="upload/'.$rowsp['image_exterieur3'].'" class="d-block w-100" alt="Image">' ?>
                </div>
                <div class="carousel-item">
                    <?php echo '<img src="upload/'.$rowsp['image_exterieur4'].'" class="d-block w-100" alt="Image">' ?>
                </div>
            </div>
            <?php } ?>

            <a class="carousel-control-prev" style="color:black" href="#carouselExampleControls1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <p id="titlecolora"> INT&EacuteRIEUR </p>
        <p><?php echo $interieur; ?></p>

        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
        <?php while ($rowsp2 = mysqli_fetch_assoc($infopicvehicle2)) { ?>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo '<img src="upload/'.$rowsp2['image_interieur'].'" class="d-block w-100" alt="Image">' ?>
                </div>
            </div>
            <?php } ?>
        
        </div>
        <p id="titlecolora"> MOTEUR </p>
        <p><?php echo $moteur; ?></p>

        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
        <?php while ($rowm = mysqli_fetch_assoc($infopicm)) { ?>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo '<img src="upload/'.$rowm['image_moteur'].'" class="d-block w-100" alt="Image">' ?>
                </div>
            </div>
            <?php } ?>
        
        </div>
        <br>
        <div class="uk-child-width-1-1@s" uk-grid>
            <div>
                <div class="uk-card uk-card-secondary uk-card-body uk-width-1-1">
                    <label>Pour plus de detail, veuillez nous contacter ou rendez nous visite !</label>
                </div>
            </div>
        </div>
        <br>
    </div>

</body>
</html>