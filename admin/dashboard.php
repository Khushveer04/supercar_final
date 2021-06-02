<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="dist/Chart.js"></script>

    <style>

        .center {
          text-align: center;
          font-size: 35px;
        }
   
        #titlecolor {

        color: #4d545f;
        font-family: "Segoe UI";
        letter-spacing: 5px;
        font-size: 55px;
        font-weight: lighter;

        }

        body,html {background-color: #e9ebef;}

    </style>

</head>

<body>

<?php 
include('header.php'); 
include('db_query_index.php');
?>

<div class="uk-container uk-padding-small">

<div class="center" id="titlecolor">
  <p>TABLEAU DE BORD</p>
</div>


   

    <div class="uk-child-width-expand@s uk-text-center " uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body" style="background-color: #343a40;">
                <div class= uk-child-width-expand@s>
                    <div style="color: white;">NOMBRE DE VOITURES EN VENTE: <?php echo $cars_for_sale; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-child-width-expand@s uk-text-center " uk-grid>

<!-- ADDITIONAL SCREEN CARD-->
<div>
    <div class="uk-card uk-card-default uk-card-body" style="background-color: #008bc3;">
        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
            <div style="color: white;">Mercedes<hr class="uk-divider-small"><?php echo $mercedes_stock; ?></div>
            
        </div>
    </div>
</div>

<!-- KEYBOARD CARD -->
<div>
    <div class="uk-card uk-card-default uk-card-body" style="background-color: #e71d36;">
        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
            <div style="color: white;">Porsche<hr class="uk-divider-small"><?php echo $porsche_stock; ?></div>
        </div>
    </div>
</div>

<!-- PHONE CARD -->
<div>
    <div class="uk-card uk-card-default uk-card-body" style="background-color: #473c3d;">
        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
            <div style="color: white;">Ferrari<hr class="uk-divider-small"><?php echo $ferrari_stock; ?></div>
        </div>
    </div>
</div>

<!-- HEADSET CARD -->
<div>
    <div class="uk-card uk-card-default uk-card-body" style="background-color: #415364;">
        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
            <div style="color: white;">Alpine<hr class="uk-divider-small"><?php echo $alpine_stock; ?></div>
        </div>
    </div>
</div>

<div>
    <div class="uk-card uk-card-default uk-card-body" style="background-color: #daa520;">
        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
            <div style="color: white;">BMW<hr class="uk-divider-small"><?php echo $bmw_stock; ?></div>
        </div>
    </div>
</div>

<div>
    <div class="uk-card uk-card-default uk-card-body" style="background-color: #415364;">
        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
            <div style="color: white;">FORD<hr class="uk-divider-small"><?php echo $ford_stock; ?></div>
        </div>
    </div>
</div>

        <!-- LAPTOP CARD -->
<div>
    <div class="uk-card uk-card-default uk-card-body" style="background-color: #258b63;">
        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
        <div style="color: white;">Renault<hr class="uk-divider-small"><?php echo $renault_stock;?></div>
        </div>
    </div>
</div>
</div>



<div class="uk-child-width-expand@s uk-text-center " uk-grid>

<!-- ADDITIONAL SCREEN CARD-->
<div>
    <div class="uk-card uk-card-default uk-card-body" style="background-color: #343a40;">
        <div class= uk-child-width-expand@s>
        <div style="color: white;">NOTIFICATIONS</div>
        </div>
    </div>
</div>
</div>

<div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body" style="background-color: #e75858;">
                <div class="uk-child-width-expand@s">
                    <div style="color: white;">Message recu<hr class="uk-divider-small"><?php echo $message_contact; ?></div>
                </div>
            </div>
        </div>

         
         <div>
            <div class="uk-card uk-card-default uk-card-body" style="background-color: #545f66;">
                <div class="uk-child-width-expand@s">
                    <div style="color: white;">Demande d'essai<hr class="uk-divider-small"><?php echo $demande; ?></div>
                </div>
            </div>
        </div>
    

        <div>
            <div class="uk-card uk-card-default uk-card-body" style="background-color: #008bc3;">
                <div class="uk-child-width-expand@s">
                    <div style="color: white;">Demande termine<hr class="uk-divider-small"><?php echo $demande_termine; ?></div>
                    
                </div>
            </div>
        </div>

        <div>
            <div class="uk-card uk-card-default uk-card-body" style="background-color: #258b63;">
                <div class="uk-child-width-expand@s">
                    <div style="color: white;">Logger<hr class="uk-divider-small"><?php echo $log_user; ?></div>
                </div>
            </div>
        </div>

        <div>
            <div class="uk-card uk-card-default uk-card-body" style="background-color: #473c3d;">
                <div class="uk-child-width-expand@s">   
                    <div style="color: white;">ADMIN<hr class="uk-divider-small"><?php echo $admin; ?></div>
                </div>
            </div>
        </div>
        </div>


        <div class="uk-child-width-expand@s uk-text-center " uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body" style="background-color: #343a40;">
                <div class= uk-child-width-expand@s>
                    <div style="color: white;">NOMBRE DE VOITURES VENDU: <?php echo $cars_sold; ?></div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>