<?php
include('db_connect.php');
include('db_query.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>VEHICULE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>

        <style>
            
            h1{
                font-size: 80px;
                color: white;
                text-align: center;
                font-family: "Fjalla One";
                font-weight: bold;
                letter-spacing: 0.2em;
            }

            P{
                text-align: center;
                color: white;
                font-family: "ITC Conduite";
                font-size: 23.4px;
                outline: 1px solid #fff; width: 165px; margin-left: 600px;
            }


        </style>
    </head>

    <!-- Background color -->
    <body style="background-color:rgb(0,0,0);">
        <div class="uk-position-relative">
            <div class="uk-position-top">

                <!-- NAVBAR -->
    <nav class="uk-navbar-containerone" uk-navbar>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li><a href="index.php"><b>ACCEUIL</b></a></li>
                <li><a href="selectionofvehicles.php"><b>VOITURE</b></a></li>
                <li><a href="login.php"><b>DEMANDE D'ESSAI</b></a></li>
                <li><a href="contact.php"><b>CONTACT</b></a></li>
                <li><a href="services.php"><b>SERVICES</b></a></li>
            </ul>
        </div>

        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <img data-src="Logo.png" width="200" height="" alt="" uk-img>
            </ul>
        </div>

        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li>
                    <a href="#3" style= "font-size: 25px; color: #F9B090; font-family: Times New Roman; font-weight: 900;"></a>
                        <ul class="uk-iconnav">
                            <!-- <li><a style="color:white; padding-right:25px;" href="#" uk-tooltip="title: Search" uk-icon="icon: search" ></a></li> -->
                            <li>
                                <a class="" style="color:white; padding-right:25px; padding-bottom:30px;" href="/admin/login.php" uk-tooltip="title: Login" uk-icon="icon: user"></a>
                            </li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

                

                <!-- SWITCHES FOR VEHICLES -->
                <div class="uk-section uk-section-secondary" style="padding-top: 20px;">
                    <ul class="uk-subnav uk-subnav-pill uk-margin-left" uk-switcher>
                        <li><a href="#">BMW</a></li>
                        <li><a href="#">MERCEDES</a></li>
                        <li><a href="#">PORSCHE</a></li>
                        <li><a href="#">FERRARI</a></li>
                        <li><a href="#">ALPINE</a></li>
                        <li><a href="#">ALPHA ROMEO</a></li>
                        <li><a href="#">FORD</a></li>
                        <li><a href="#">RENAULT</a></li>
                    </ul>
                
                    

                    <!-- BMW PAGE -->
                    <ul class="uk-switcher uk-margin">
                        <li>
                            <div class="uk-container uk-container-expand">

                                <!-- SEARCH -->
                                <div class="uk-margin">
                                    <form class="uk-search uk-search-default uk-width-1-1">
                                        <span uk-search-icon></span>
                                        <input class="uk-search-input" type="search" placeholder="Search..." id="myInput" onkeyup="myFunction()" style="color:white">
                                    </form>
                                </div>

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
                                <table class="uk-table uk-table-justify uk-table-divider" id="myTable">
                                    <thead>
                                        <tr>
                                            <th style="margin-left: 5px; background-color:#1e87f0; color: white">&nbsp;PHOTOS</th>
                                            <th style="background-color:#1e87f0; color: white">DESCRIPTION</th>
                                            <th style="background-color: #1e87f0; color: white">OPTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php while ($rowsv = mysqli_fetch_assoc($infopicbmw)) { ?>
                                        <tr>
                                            <td class="uk-width-1-3 uk-margin-left" style="padding-right: 0px;"><?php echo '<img src="upload/'.$rowsv['image'].'" width="240px" height="50px", alt="image">'?></td>
                                            <td class="uk-text-break uk-align-left" style="color:white"><?php echo $rowsv['intro']; ?></td>
                                            <td><a href="vehicles.php?id=<?php echo $rowsv['id'];?>">View</a></td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </li>

                        <!-- MERCEDES -->
                        <li>
                            <div class="uk-container uk-container-expand" style="padding-bottom: 100px;">

                                <!-- SEARCH -->
                                <div class="uk-margin">
                                    <form class="uk-search uk-search-default uk-width-1-1">
                                        <span uk-search-icon></span>
                                        <input class="uk-search-input" type="search" placeholder="Search..." id="myInput1" onkeyup="myFunction1()" style="color:white">
                                    </form>
                                </div>

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
                                <table class="uk-table uk-table-justify uk-table-divider" id="myTable1">
                                    <thead>
                                        <tr>
                                            <th class="uk-width-small" style="margin-left: 5px; background-color:#1e87f0; color: white">&nbsp;PHOTOS</th>
                                            <th style="background-color:#1e87f0; color: white">DESCRIPTION</th>
                                            <th style="background-color:#1e87f0; color: white">OPTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php while ($rowsv = mysqli_fetch_assoc($infopicmercedes)) { ?>
                                        <tr>
                                            <td class="uk-width-1-3 uk-margin-left" style="padding-right: 0px;"><?php echo '<img src="upload/'.$rowsv['image'].'" width="240px" height="50px", alt="image">'?></td>
                                            <td class="uk-text-break uk-align-left" style="color:white"><?php echo $rowsv['intro']; ?></td>
                                            <td><a href="vehicles.php?id=<?php echo $rowsv['id'];?>">View</a></td>
                                        </tr>

                                    <?php } ?>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                               
                            </div>
                        </li>
                        

                        
                           

                            <!-- PORSCHE -->
                            <li>
                                <div class="uk-container uk-container-expand">
    
                                    <!-- SEARCH -->
                                    <div class="uk-margin">
                                        <form class="uk-search uk-search-default uk-width-1-1">
                                            <span uk-search-icon></span>
                                            <input class="uk-search-input" type="search" placeholder="Search..." id="myInput4" onkeyup="myFunction4()" style="color:white">
                                        </form>
                                    </div>
    
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
                                    <table class="uk-table uk-table-justify uk-table-divider" id="myTable4">
                                        <thead>
                                            <tr>
                                                <th class="uk-width-small" style="margin-left: 5px; background-color:#1e87f0; color: white">&nbsp;PHOTOS</th>
                                                <th style="background-color:#1e87f0; color: white">DESCRIPTION</th>
                                                <th style="background-color:#1e87f0; color: white">OPTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while ($rowsv = mysqli_fetch_assoc($infopicporsche)) { ?>
                                        <tr>
                                            <td class="uk-width-1-3 uk-margin-left" style="padding-right: 0px;"><?php echo '<img src="upload/'.$rowsv['image'].'" width="240px" height="50px", alt="image">'?></td>
                                            <td class="uk-text-break uk-align-left" style="color:white"><?php echo $rowsv['intro']; ?></td>
                                            <td><a href="vehicles.php?id=<?php echo $rowsv['id'];?>">View</a></td>
                                        </tr>

                                    <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </li>

                        <!-- FERRARI -->
                        <li>
                            <div class="uk-container uk-container-expand">
                            
                                <!-- SEARCH -->
                                <div class="uk-margin">
                                    <form class="uk-search uk-search-default uk-width-1-1">
                                        <span uk-search-icon></span>
                                        <input class="uk-search-input" type="search" placeholder="Search..." id="myInput5" onkeyup="myFunction5()" style="color:white">
                                    </form>
                                </div>

                                <script>
                                    function myFunction5() {
                                      // Declare variables
                                      var input, filter, table, tr, td, i, txtValue;
                                      input = document.getElementById("myInput5");
                                      filter = input.value.toUpperCase();
                                      table = document.getElementById("myTable5");
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
                        <table class="uk-table uk-table-justify uk-table-divider" id="myTable5">
                            <thead>
                                <tr>
                                    <th style="margin-left: 5px; background-color:#1e87f0; color: white">&nbsp;PHOTOS</th>
                                    <th style="background-color:#1e87f0; color: white">DESCRIPTION</th>
                                    <th style="background-color: #1e87f0; color: white">OPTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($rowsv = mysqli_fetch_assoc($infopicferrari)) { ?>
                                        <tr>
                                            <td class="uk-width-1-3 uk-margin-left" style="padding-right: 0px;"><?php echo '<img src="upload/'.$rowsv['image'].'" width="240px" height="50px", alt="image">'?></td>
                                            <td class="uk-text-break uk-align-left" style="color:white"><?php echo $rowsv['intro']; ?></td>
                                            <td><a href="vehicles.php?id=<?php echo $rowsv['id'];?>">View</a></td>
                                        </tr>

                                    <?php } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </li>

                <!-- ALPINE -->
                <li>
                    <div class="uk-container uk-container-expand" style="padding-bottom: 100px;">
                    
                        <!-- SEARCH -->
                        <div class="uk-margin">
                            <form class="uk-search uk-search-default uk-width-1-1">
                                <span uk-search-icon></span>
                                <input class="uk-search-input" type="search" placeholder="Search..." id="myInput6" onkeyup="myFunction6()" style="color:white">
                            </form>
                        </div>

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
                <table class="uk-table uk-table-justify uk-table-divider" id="myTable6">
                    <thead>
                        <tr>
                            <th style="margin-left: 5px; background-color:#1e87f0; color: white">&nbsp;PHOTOS</th>
                            <th style="background-color:#1e87f0; color: white">DESCRIPTION</th>
                            <th style="background-color: #1e87f0; color: white">OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($rowsv = mysqli_fetch_assoc($infopicalpine)) { ?>
                        <tr>
                            <td class="uk-width-1-3 uk-margin-left" style="padding-right: 0px;"><?php echo '<img src="upload/'.$rowsv['image'].'" width="240px" height="50px", alt="image">'?></td>
                            <td class="uk-text-break uk-align-left" style="color:white"><?php echo $rowsv['intro']; ?></td>
                            <td><a href="vehicles.php?id=<?php echo $rowsv['id'];?>">View</a></td>
                        </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </li>
               

        <!-- ALPHA ROMEO -->
        <li>
            <div class="uk-container uk-container-expand">
            
                <!-- SEARCH -->
                <div class="uk-margin">
                    <form class="uk-search uk-search-default uk-width-1-1">
                        <span uk-search-icon></span>
                        <input class="uk-search-input" type="search" placeholder="Search..." id="myInput7" onkeyup="myFunction7()" style="color:white">
                    </form>
                </div>

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
        <table class="uk-table uk-table-justify uk-table-divider" id="myTable7">
            <thead>
                <tr>
                    <th style="margin-left: 5px; background-color:#1e87f0; color: white">&nbsp;PHOTOS</th>
                    <th style="background-color:#1e87f0; color: white">DESCRIPTION</th>
                    <th style="background-color: #1e87f0; color: white">OPTIONS</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($rowsv = mysqli_fetch_assoc($infopicalpharomeo)) { ?>
                <tr>
                    <td class="uk-width-1-3 uk-margin-left" style="padding-right: 0px;"><?php echo '<img src="upload/'.$rowsv['image'].'" width="240px" height="50px", alt="image">'?></td>
                    <td class="uk-text-break uk-align-left" style="color:white"><?php echo $rowsv['intro']; ?></td>
                    <td><a href="vehicles.php?id=<?php echo $rowsv['id'];?>">View</a></td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>
</li>


        <!-- FORD-->
        <li>
            <div class="uk-container uk-container-expand" style="padding-bottom: 100px;">
            
                <!-- SEARCH -->
                <div class="uk-margin">
                    <form class="uk-search uk-search-default uk-width-1-1">
                        <span uk-search-icon></span>
                        <input class="uk-search-input" type="search" placeholder="Search..." id="myInput8" onkeyup="myFunction8()" style="color:white">
                    </form>
                </div>

                <script>
                    function myFunction8() {
                      // Declare variables
                      var input, filter, table, tr, td, i, txtValue;
                      input = document.getElementById("myInput8");
                      filter = input.value.toUpperCase();
                      table = document.getElementById("myTable8");
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
        <table class="uk-table uk-table-justify uk-table-divider" id="myTable8">
            <thead>
                <tr>
                    <th style="margin-left: 5px; background-color:#1e87f0; color: white">&nbsp;PHOTOS</th>
                    <th style="background-color:#1e87f0; color: white">DESCRIPTION</th>
                    <th style="background-color: #1e87f0; color: white">OPTIONS</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($rowsv = mysqli_fetch_assoc($infopicford)) { ?>
                <tr>
                    <td class="uk-width-1-3 uk-margin-left" style="padding-right: 0px;"><?php echo '<img src="upload/'.$rowsv['image'].'" width="240px" height="50px", alt="image">'?></td>
                    <td class="uk-text-break uk-align-left" style="color:white"><?php echo $rowsv['intro']; ?></td>
                    <td><a href="vehicles.php?id=<?php echo $rowsv['id'];?>">View</a></td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>
</li>
                         <!-- RENAULT-->
        <li>
            <div class="uk-container uk-container-expand" style="padding-bottom: 100px;">
            
                <!-- SEARCH -->
                <div class="uk-margin">
                    <form class="uk-search uk-search-default uk-width-1-1">
                        <span uk-search-icon></span>
                        <input class="uk-search-input" type="search" placeholder="Search..." id="myInput9" onkeyup="myFunction9()" style="color:white">
                    </form>
                </div>

                <script>
                    function myFunction9() {
                      // Declare variables
                      var input, filter, table, tr, td, i, txtValue;
                      input = document.getElementById("myInput9");
                      filter = input.value.toUpperCase();
                      table = document.getElementById("myTable9");
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
        <table class="uk-table uk-table-justify uk-table-divider" id="myTable9">
            <thead>
                <tr>
                    <th style="margin-left: 5px; background-color:#1e87f0; color: white">&nbsp;PHOTOS</th>
                    <th style="background-color:#1e87f0; color: white">DESCRIPTION</th>
                    <th style="background-color: #1e87f0; color: white">OPTIONS</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($rowsv = mysqli_fetch_assoc($infopicrenault)) { ?>
                <tr>
                    <td class="uk-width-1-3 uk-margin-left" style="padding-right: 0px;"><?php echo '<img src="upload/'.$rowsv['image'].'" width="240px" height="50px", alt="image">'?></td>
                    <td class="uk-text-break uk-align-left" style="color:white"><?php echo $rowsv['intro']; ?></td>
                    <td><a href="vehicles.php?id=<?php echo $rowsv['id'];?>">View</a></td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>
</li>

                    </ul>
                    

                   