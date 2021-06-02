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
          font-size: 45px;
          font-weight: lighter;
          margin-top:10px;
         
        }

        #navcolor {
          background-color:#ced4da;
        }

        body {background-color: #e9ebef;}

        .iconmore {
            fill: black;
            
        }

        .table th {
            background-color:#50d0ae;
            
        }
        </style>


</head>

<body class="uk-height-viewport">

<?php include('headerc.php'); ?>

<div class="center" id="titlecolor">
  <p>SHOWROOM</p>
</div>

<div class="uk-container" style="padding-top: 5px;">
    <ul class="uk-subnav uk-subnav-pill" uk-switcher>
        <li><a href="#">BMW</a></li>
        <li><a href="#">MERCEDES</a></li>
        <li><a href="#">PORSCHE</a></li>
        <li><a href="#">FERRARI</a></li>
        <li><a href="#">ALPINE</a></li>
        <li><a href="#">FORD</a></li>
        <li><a href="#">RENAULT</a></li>
    </ul>

              

    <!-- BMW PAGE -->
    <ul class="uk-switcher uk-margin">
        <li>
            <div class="uk-container uk-container-expand">

            <form class="uk-container">
                <input class="form-control uk-input uk-width-1-1" id="myInput" type="text" onkeyup="myFunction()" placeholder="Recherche">
            </form>

            <script>
                function myFunction() {
                    // Declare variables
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
                        } else {
                        tr[i].style.display = "none";
                        }
                    }
                    }
                }
            </script>

            <!-- TABLE -->
            <div class="table-responsive"> <br>
                <table class="table" id="myTable">
                    <thead  style="background-color:#50d0ae;">
                    <tr>
                        <th scope="col" style="color:white">PHOTO</th>
                        <th scope="col" style="color:white">MODÈLE</th>
                        <th scope="col" style="color:white">ANNÉE</th>
                        <th scope="col" style="color:white">TRANSMISSION</th>
                        <th scope="col" style="color:white">PRIX</th>
                        <th scope="col" style="color:white">OPTION</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                $COUNT = 0;
                while ($row = mysqli_fetch_assoc($infobmw)) { ?>


                        <tr>
                            <td><?php echo '<img src="upload/'.$row['image'].'" width="170px" height="170px", alt="image">'?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['annee']; ?></td>
                            <td><?php echo $row['transmission']; ?></td>
                            <td><?php echo $row['prix']; ?></td>
                            <td><a href="vehicles.php?id=<?php echo $row['id'];?>">VOIR</a></td>
                        </tr>

                <?php } ?>

                    </tbody>
                </table>
            </div>
            </div>
            
        </li>

        <!-- MERCEDES -->
        <li>
            <div class="uk-container uk-container-expand" style="padding-bottom: 100px;">

            <form class="uk-container">
                <input class="form-control uk-input uk-width-1-1" id="myInput1" type="text" onkeyup="myFunction1()" placeholder="Recherche">
            </form>

            <script>
                function myFunction1() {
                    // Declare variables
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput1");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable1");
                    tr = table.getElementsByTagName("tr");
                
                    for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        } else {
                        tr[i].style.display = "none";
                        }
                    }
                    }
                }
            </script>

                <!-- TABLE -->
                <div class="table-responsive"> <br>
                <table class="table" id="myTable1">
                    <thead  style="background-color:#50d0ae;">
                    <tr>
                        <th scope="col" style="color:white">PHOTO</th>
                        <th scope="col" style="color:white">MODÈLE</th>
                        <th scope="col" style="color:white">ANNÉE</th>
                        <th scope="col" style="color:white">TRANSMISSION</th>
                        <th scope="col" style="color:white">PRIX</th>
                        <th scope="col" style="color:white">OPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $COUNT = 0;
                    while ($row = mysqli_fetch_assoc($infomercedes)) { ?>

                        <tr>
                            <td><?php echo '<img src="upload/'.$row['image'].'" width="170px" height="170px", alt="image">'?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['annee']; ?></td>
                            <td><?php echo $row['transmission']; ?></td>
                            <td><?php echo $row['prix']; ?></td>
                            <td><a href="vehicles.php?id=<?php echo $row['id'];?>">VOIR</a></td>
                        </tr>

                    <?php } ?>
                </tbody>
                </table>
            </div>
        </li>

        <!-- PORSCHE -->
        <li>
            <div class="uk-container uk-container-expand" style="padding-bottom: 100px;">

            <form class="uk-container">
                <input class="form-control uk-input uk-width-1-1" id="myInput2" type="text" onkeyup="myFunction2()" placeholder="Recherche">
            </form>

            <script>
                function myFunction2() {
                    // Declare variables
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput2");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable2");
                    tr = table.getElementsByTagName("tr");
                
                    for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        } else {
                        tr[i].style.display = "none";
                        }
                    }
                    }
                }
            </script>

                <!-- TABLE -->
                <div class="table-responsive"> <br>
                <table class="table" id="myTable2">
                    <thead  style="background-color:#50d0ae;">
                    <tr>
                        <th scope="col" style="color:white">PHOTO</th>
                        <th scope="col" style="color:white">MODÈLE</th>
                        <th scope="col" style="color:white">ANNÉE</th>
                        <th scope="col" style="color:white">TRANSMISSION</th>
                        <th scope="col" style="color:white">PRIX</th>
                        <th scope="col" style="color:white">OPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $COUNT = 0;
                    while ($row = mysqli_fetch_assoc($infoporsche)) { ?>

                        <tr>
                            <td><?php echo '<img src="upload/'.$row['image'].'" width="170px" height="170px", alt="image">'?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['annee']; ?></td>
                            <td><?php echo $row['transmission']; ?></td>
                            <td><?php echo $row['prix']; ?></td>
                            <td><a href="vehicles.php?id=<?php echo $row['id'];?>">VOIR</a></td>
                        </tr>

                    <?php } ?>
                </tbody>
                </table>
            </div>
        </li>

        <!-- FERRARI -->
        <li>
            <div class="uk-container uk-container-expand" style="padding-bottom: 100px;">

            <form class="uk-container">
                <input class="form-control uk-input uk-width-1-1" id="myInput3" type="text" onkeyup="myFunction3()" placeholder="Recherche">
            </form>

            <script>
                function myFunction3() {
                    // Declare variables
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput3");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable3");
                    tr = table.getElementsByTagName("tr");
                
                    for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        } else {
                        tr[i].style.display = "none";
                        }
                    }
                    }
                }
            </script>

                <!-- TABLE -->
                <div class="table-responsive"> <br>
                <table class="table" id="myTable3">
                    <thead  style="background-color:#50d0ae;">
                    <tr>
                        <th scope="col" style="color:white">PHOTO</th>
                        <th scope="col" style="color:white">MODÈLE</th>
                        <th scope="col" style="color:white">ANNÉE</th>
                        <th scope="col" style="color:white">TRANSMISSION</th>
                        <th scope="col" style="color:white">PRIX</th>
                        <th scope="col" style="color:white">OPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $COUNT = 0;
                    while ($row = mysqli_fetch_assoc($infoferrari)) { ?>

                        <tr>
                            <td><?php echo '<img src="upload/'.$row['image'].'" width="170px" height="170px", alt="image">'?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['annee']; ?></td>
                            <td><?php echo $row['transmission']; ?></td>
                            <td><?php echo $row['prix']; ?></td>
                            <td><a href="vehicles.php?id=<?php echo $row['id'];?>">VOIR</a></td>
                        </tr>

                    <?php } ?>
                </tbody>
                </table>
            </div>
        </li>
        
        <!-- ALPINE -->
        <li>
            <div class="uk-container uk-container-expand" style="padding-bottom: 100px;">

            <form class="uk-container">
                <input class="form-control uk-input uk-width-1-1" id="myInput4" type="text" onkeyup="myFunction4()" placeholder="Recherche">
            </form>

            <script>
                function myFunction4() {
                    // Declare variables
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput4");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable4");
                    tr = table.getElementsByTagName("tr");
                
                    for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        } else {
                        tr[i].style.display = "none";
                        }
                    }
                    }
                }
            </script>

                <!-- TABLE -->
                <div class="table-responsive"> <br>
                <table class="table" id="myTable4">
                    <thead  style="background-color:#50d0ae;">
                    <tr>
                        <th scope="col" style="color:white">PHOTO</th>
                        <th scope="col" style="color:white">MODÈLE</th>
                        <th scope="col" style="color:white">ANNÉE</th>
                        <th scope="col" style="color:white">TRANSMISSION</th>
                        <th scope="col" style="color:white">PRIX</th>
                        <th scope="col" style="color:white">OPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $COUNT = 0;
                    while ($row = mysqli_fetch_assoc($infoalpine)) { ?>

                        <tr>
                            <td><?php echo '<img src="upload/'.$row['image'].'" width="170px" height="170px", alt="image">'?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['annee']; ?></td>
                            <td><?php echo $row['transmission']; ?></td>
                            <td><?php echo $row['prix']; ?></td>
                            <td><a href="vehicles.php?id=<?php echo $row['id'];?>">VOIR</a></td>
                        </tr>

                    <?php } ?>
                </tbody>
                </table>
            </div>
        </li>

          <!-- FORD -->
          <li>
            <div class="uk-container uk-container-expand" style="padding-bottom: 100px;">

            <form class="uk-container">
                <input class="form-control uk-input uk-width-1-1" id="myInput6" type="text" onkeyup="myFunction6()" placeholder="Recherche">
            </form>

            <script>
                function myFunction6() {
                    // Declare variables
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput6");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable6");
                    tr = table.getElementsByTagName("tr");
                
                    for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        } else {
                        tr[i].style.display = "none";
                        }
                    }
                    }
                }
            </script>

                <!-- TABLE -->
                <div class="table-responsive"> <br>
                <table class="table" id="myTable6">
                    <thead  style="background-color:#50d0ae;">
                    <tr>
                        <th scope="col" style="color:white">PHOTO</th>
                        <th scope="col" style="color:white">MODÈLE</th>
                        <th scope="col" style="color:white">ANNÉE</th>
                        <th scope="col" style="color:white">TRANSMISSION</th>
                        <th scope="col" style="color:white">PRIX</th>
                        <th scope="col" style="color:white">OPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $COUNT = 0;
                    while ($row = mysqli_fetch_assoc($infoford)) { ?>

                        <tr>
                            <td><?php echo '<img src="upload/'.$row['image'].'" width="170px" height="170px", alt="image">'?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['annee']; ?></td>
                            <td><?php echo $row['transmission']; ?></td>
                            <td><?php echo $row['prix']; ?></td>
                            <td><a href="vehicles.php?id=<?php echo $row['id'];?>">VOIR</a></td>
                        </tr>

                    <?php } ?>
                </tbody>
                </table>
            </div>
        </li>

         <!-- RENAULT -->
         <li>
            <div class="uk-container uk-container-expand" style="padding-bottom: 100px;">

            <form class="uk-container">
                <input class="form-control uk-input uk-width-1-1" id="myInput7" type="text" onkeyup="myFunction7()" placeholder="Recherche">
            </form>

            <script>
                function myFunction7() {
                    // Declare variables
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput7");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable7");
                    tr = table.getElementsByTagName("tr");
                
                    for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        } else {
                        tr[i].style.display = "none";
                        }
                    }
                    }
                }
            </script>

                <!-- TABLE -->
                <div class="table-responsive"> <br>
                <table class="table" id="myTable7">
                    <thead  style="background-color:#50d0ae;">
                    <tr>
                        <th scope="col" style="color:white">PHOTO</th>
                        <th scope="col" style="color:white">MODÈLE</th>
                        <th scope="col" style="color:white">ANNÉE</th>
                        <th scope="col" style="color:white">TRANSMISSION</th>
                        <th scope="col" style="color:white">PRIX</th>
                        <th scope="col" style="color:white">OPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $COUNT = 0;
                    while ($row = mysqli_fetch_assoc($inforenault)) { ?>

                        <tr>    
                            <td><?php echo '<img src="upload/'.$row['image'].'" width="170px" height="170px", alt="image">'?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['annee']; ?></td>
                            <td><?php echo $row['transmission']; ?></td>
                            <td><?php echo $row['prix']; ?></td>
                            <td><a href="vehicles.php?id=<?php echo $row['id'];?>">VOIR</a></td>
                        </tr>

                    <?php } ?>
                </tbody>
                </table>
            </div>
        </li>
        </div>
        <div uk-alert>
            <p style= "text-align: center;">Copyright © Supercar 2020</p>
            <p  class="text-center"><a href="mention.php">Mentions légales</a></p>
        </div>

</body>
</html>
