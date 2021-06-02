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
  <p>GÉRER LES UTILISATEURS ADMIN</p>
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
            <th style="color: white">Nom Utilisateur</th>
            <th style="color: white">Mot de passe</th>
            <th style="color: white">Date de creation</th>
            <th style="color: white">Outil</th>
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
        while ($row = mysqli_fetch_assoc($admin_profile)) { ?>


        <tr>
            <?php $space= " ";
            $COUNT = $COUNT + 1;
            
            ?>
            <td><?php echo $COUNT ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['created_at']; ?></td>

            <td>

               <!-- DELETE -->
               <a href="#modal-delete-<?php  echo $row['id']; ?>" style="color:#e93148" class="uk-icon-link" uk-tooltip="Delete" uk-icon="trash" uk-toggle></a>

                <div id="modal-delete-<?php  echo $row['id']; ?>" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                        <button class="uk-modal-close-default" type="button" uk-close></button>

                            <p>Voulez vous vraiment supprimer l'utilisateur <?php echo $row["username"];?> ?</p>

                            <div class="uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" id="Save" type="button">NON</button>
                                <a class="uk-button uk-button-danger" id="Delete" type="button" href="delete_admin_users.php?delete=yes&id=<?php echo $row['id']; ?>">SUPPRIMER</a>
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
