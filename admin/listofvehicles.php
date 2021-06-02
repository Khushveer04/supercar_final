<?php
session_start();
?>

<?php 
include('db_connect.php');
include('db_query_index.php');
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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

<body>


<?php
include('header.php');
?>

<div class="center" id="titlecolor">
  <p>ADMINISTRATION</p>
</div>

<form class="uk-container">
<h4 class="uk-modal-title uk-text-small uk-alert" style="text-align: center" uk-alert>Salut <?php echo htmlspecialchars($_SESSION["admin_username"]);?><br>Bienvenue sur la page administrateur. Toutes les différentes options se trouvent dans la barre de sélection en haut à gauche.</h5>
    <input class="form-control uk-input uk-width-1-1" id="myInput" type="text" onkeyup="myFunction()" placeholder="Recherche...">
</form>

<div class="uk-container">
<div class="table-responsive"> <br>
    <table class="table" id="myTable">
        <thead  style="background-color:#50d0ae;">
            <tr>
            <th scope="col" style="color:white">ID</th>
            <th scope="col" style="color:white">NOM</th>
            <th scope="col" style="color:white">MARQUE</th>
            <th scope="col" style="color:white">MODELE</th>
            <th scope="col" style="color:white">IMAGE</th>
            <th scope="col" style="color:white">OUTILS</th>
        </tr>
    </thead>
    <tbody>

    <script>
		function myFunction() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[1,2];
					if (td) {
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(filter) > -1) {
							tr[i].style.display = "";
						} 
							else {
								tr[i].style.display = "none";
							}
					}       
			}
		}
	</script>

        <?php 
        $COUNT = 0;
        while ($row = mysqli_fetch_assoc($info)) { ?>


        <tr>
            <?php $space= " ";
            $COUNT = $COUNT + 1;
            
            ?>
            <td><?php echo $COUNT ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['make']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo '<img src="upload/'.$row['image'].'" width="170px" height="170px", alt="image">'?></td>

            <td>
            
                 <!-- MORE ICON -->
                <a href="#modal" class="uk-icon-link uk-margin-small-right" style="color:#011627" uk-tooltip="More info" uk-icon="info" uk-toggle="target: #A<?php echo $row['id'];?>"></a>

                <!-- MORE MODAL -->
                <div id="A<?php echo $row['id'];?>" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body ">
                        <h3 class="uk-text-warning">INFORMATION DU VEHICULE</h3>
                        <h5 class="uk-text-success">STATUE: <?php echo $row['Status']; ?></h3>
                        
                        <ul class="uk-list uk-list-divider">
                        <li> <span class="uk-text-uppercase"><b> Sommaire: </b><span class="uk-text-uppercase"><br><?php echo $row['intro']; ?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Photo principal: </b><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$row['image'].'" width="170px" height="170px", alt="image">'?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Marque: </b><span class="uk-text-uppercase"><?php echo $row['make']; ?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Modele: </b><span class="uk-text-uppercase"><?php echo $row['model']; ?></span></span></li>
                            <li><span class="uk-text-uppercase"><b> Type: </b><span class="uk-text-uppercase"><?php echo $row['type']; ?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Annee: </b><span class="uk-text-uppercase"><?php echo $row['annee']; ?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Couleur: </b><span class="uk-text-uppercase"><?php echo $row['couleur']; ?></span></span></li>
                            <li><span class="uk-text-uppercase"><b> Moteur: </b><span class="uk-text-uppercase"><?php echo $row['nom_moteur']; ?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Transmisson: </b><span class="uk-text-uppercase"><?php echo $row['transmission']; ?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Cylindre: </b><span class="uk-text-uppercase"><?php echo $row['cylindre']; ?></span></span></li>
                            <li><span class="uk-text-uppercase"><b> Capacite: </b><span class="uk-text-uppercase"><?php echo $row['capacite']; ?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Jante: </b><span class="uk-text-uppercase"><?php echo $row['jante']; ?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Interieur: </b><span class="uk-text-uppercase"><?php echo $row['interieur_couleur']; ?></span></span></li>
                            <li><span class="uk-text-uppercase"><b> Kilometrage: </b><span class="uk-text-uppercase"><?php echo $row['kilometrage']; ?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Exterieur: </b><span class="uk-text-uppercase"><?php echo $row['exterieur']; ?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Photo exterieur: </b><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$row['image_exterieur'].'" width="170px" height="170px", alt="image">'?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Photo exterieur2: </b><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$row['image_exterieur2'].'" width="170px" height="170px", alt="image">'?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Photo exterieur3: </b><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$row['image_exterieur3'].'" width="170px" height="170px", alt="image">'?></span></span></li>
                            <li> <span class="uk-text-uppercase"><b> Photo exterieur4: </b><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$row['image_exterieur4'].'" width="170px" height="170px", alt="image">'?></span></span></li>
                            <li><span class="uk-text-uppercase"><b> Interieur: </b><span class="uk-text-uppercase"><?php echo $row['interieur']; ?></span></span></li>
                            <li><span class="uk-text-uppercase"><b> Photo interieur: </b><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$row['image_interieur'].'" width="170px" height="170px", alt="image">'?></span></span></li>
                            <li><span class="uk-text-uppercase"><b> Moteur: </b><span class="uk-text-uppercase"><?php echo $row['moteur']; ?></span></span></li>
                            <li><span class="uk-text-uppercase"><b> Photo moteur: </b><span class="uk-text-uppercase"><br><?php echo '<img src="upload/'.$row['image_moteur'].'" width="170px" height="170px", alt="image">'?></span></span></li>
                        </ul>
                    </div>
                </div>
                <!-- EDIT -->
                <a href="edit.php?id=<?php echo $row['id']; ?>" style="color:#2ab3a6" class="uk-icon-link uk-margin-small-right " uk-tooltip="Edit" uk-icon="file-edit"></a>

                <!-- DELETE -->
                <a href="#modal-delete-<?php  echo $row['id']; ?>" style="color:#e93148" class="uk-icon-link" uk-tooltip="Delete" uk-icon="trash" uk-toggle></a>

                <div id="modal-delete-<?php  echo $row['id']; ?>" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                            <button class="uk-modal-close-default" type="button" uk-close></button>

                                <p>Voulez vous supprimer la voiture <?php echo $row["name"]; ?>?</p>

                                <div class="uk-text-right">
                                    <button class="uk-button uk-button-default uk-modal-close" id="Save" type="button">NON</button>
                                    <a class="uk-button uk-button-danger" id="Delete" type="button" href="listofvehicles.php?delete=yes&id=<?php  echo $row['id']; ?>">SUPPRIMER</a>
                                </div>
                        </div>
                </div>
        </tr>

    <?php } ?>
    </div>
   


        
    </tbody>

</table>
</body>
</html>
