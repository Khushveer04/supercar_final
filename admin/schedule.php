<?php 
include('db_query_index.php');
include('header.php');
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

<body class="uk-height-viewport">

<div class="center" id="titlecolor">
  <p>DEMANDE D'ESSAI</p>
</div>

<form class="uk-container">
    <input class="form-control uk-input uk-width-1-1" id="myInput" type="text" onkeyup="myFunction()" placeholder="Recherche">
</form>

<div class="uk-container">
<div class="table-responsive"> <br>
    <table class="table" id="myTable">
        <thead  style="background-color:#50d0ae;">
        <tr>
            <th style="color: white">ID</th>
            <th style="color: white">Civilite</th>
            <th style="color: white">Nom</th>
            <th style="color: white">Prenom</th>
            <th style="color: white">Courriel</th>
            <th style="color: white">Date</th>
            <th style="color: white">Outils</th>
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
				td = tr[i].getElementsByTagName("td")[1];
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
        while ($row = mysqli_fetch_assoc($schedule)) { ?>


        <tr>
            <?php $space= " ";
            $COUNT = $COUNT + 1;
            
            ?>
            <td><?php echo $COUNT ?></td>
            <td><?php echo $row['civilite']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['schedule_date']; ?></td>

            <td>
            
            <!-- MORE ICON -->
           <a href="#modal" class="uk-icon-link uk-margin-small-right" style="color:#011627" uk-tooltip="More info" uk-icon="info" uk-toggle="target: #A<?php echo $row['id'];?>"></a>

           <!-- MORE MODAL -->
           <div id="A<?php echo $row['id'];?>" uk-modal>
               <div class="uk-modal-dialog uk-modal-body ">
                   <h3 class="uk-text-warning">DETAILS DEMANDE D'ESSAI</h3>
                   <ul class="uk-list uk-list-divider">
                   <li> <span class="uk-text-uppercase"><b> Numero Telephone: </b><span class="uk-text-uppercase"><?php echo $row['num_tel']; ?></span></span></li>
                       <li> <span class="uk-text-uppercase"><b> Selection: </b><span class="uk-text-uppercase"><?php echo $row['selection']; ?></span></span></li>
                       <li> <span class="uk-text-uppercase"><b> Courriel: </b><span class="uk-text-uppercase"><?php echo $row['c_email']; ?></span></span></li>
                       <li><span class="uk-text-uppercase"><b> Contacter par SMS: </b><span class="uk-text-uppercase"><?php echo $row['c_sms']; ?></span></span></li>
                       <li> <span class="uk-text-uppercase"><b> Contacter par TEL: </b><span class="uk-text-uppercase"><?php echo $row['c_tel']; ?></span></span></li>
                       <li> <span class="uk-text-uppercase"><b> Licence: </b><span class="uk-text-uppercase"><?php echo $row['license']; ?></span></span></li>
                   </ul>
               </div>
           </div>

                <!-- EDIT -->
                <a href="edit_schedule.php?id=<?php echo $row['id']; ?>" style="color:#2ab3a6" class="uk-icon-link uk-margin-small-right " uk-tooltip="Edit" uk-icon="file-edit"></a>

                <!-- DELETE -->
                <a href="#modal-delete-<?php  echo $row['id']; ?>" style="color:#e93148" class="uk-icon-link" uk-tooltip="Delete" uk-icon="trash" uk-toggle></a>

                <div id="modal-delete-<?php  echo $row['id']; ?>" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                            <button class="uk-modal-close-default" type="button" uk-close></button>

                                <p>Voulez vous supprimer l'essai de Mr/Mme <?php echo $row["nom"];?>?</p>

                                <div class="uk-text-right">
                                    <button class="uk-button uk-button-default uk-modal-close" id="Save" type="button">NON</button>
                                    <a class="uk-button uk-button-danger" id="Delete" type="button" href="delete_schedule.php?delete=yes&id=<?php  echo $row['id']; ?>">SUPPRIMER</a>
                                </div>
                        </div>
                </div>
        </tr>
        </div>
        </div>

    <?php } ?>



        
    </tbody>

</table>
</body>
</html>
