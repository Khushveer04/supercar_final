<!DOCTYPE html>
<html lang="fr">

<head>
    <title>HOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Varela Round', sans-serif;
        }

        .form-control {
            box-shadow: none;
            font-weight: normal;
            font-size: 13px;
        }

        .navbar {
            background: #fff;
            padding-left: 16px;
            padding-right: 16px;
            border-bottom: 1px solid #dfe3e8;
            border-radius: 0;
        }

        .nav-link img {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            margin: -8px 0;
            float: left;
            margin-right: 10px;
        }

        .navbar .navbar-brand {
            padding-left: 0;
            font-size: 20px;
            padding-right: 50px;
        }

        .navbar .navbar-brand b {
            color: #33cabb;
        }

        .navbar .form-inline {
            display: inline-block;
        }

        .navbar a {
            color: #888;
            font-size: 15px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding-right: 35px;
            border-color: #dfe3e8;
            border-radius: 4px !important;
            box-shadow: none
        }

        .search-box .input-group-text {
            min-width: 35px;
            border: none;
            background: transparent;
            position: absolute;
            right: 0;
            z-index: 9;
            padding: 7px;
            height: 100%;
        }

        .search-box i {
            color: #a0a5b1;
            font-size: 19px;
        }

        .navbar .sign-up-btn {
            min-width: 110px;
            max-height: 36px;
        }

        .navbar .dropdown-menu {
            color: #999;
            font-weight: normal;
            border-radius: 1px;
            border-color: #e5e5e5;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
        }

        .navbar a,
        .navbar a:active {
            color: #888;
            padding: 8px 20px;
            background: transparent;
            line-height: normal;
        }

        .navbar .navbar-form {
            border: none;
        }

        .navbar .action-form {
            width: 280px;
            padding: 20px;
            left: auto;
            right: 0;
            font-size: 14px;
        }

        .navbar .action-form a {
            color: #33cabb;
            padding: 0 !important;
            font-size: 14px;
        }

        .navbar .action-form .hint-text {
            text-align: center;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .navbar .btn-primary,
        .navbar .btn-primary:active {
            color: #fff;
            background: #33cabb !important;
            border: none;
        }

        .navbar .btn-primary:hover,
        .navbar .btn-primary:focus {
            color: #fff;
            background: #31bfb1 !important;
        }

        .navbar .social-btn .btn,
        .navbar .social-btn .btn:hover {
            color: #fff;
            margin: 0;
            padding: 0 !important;
            font-size: 13px;
            border: none;
            transition: all 0.4s;
            text-align: center;
            line-height: 34px;
            width: 47%;
            text-decoration: none;
        }

        .navbar .social-btn .facebook-btn {
            background: #507cc0;
        }

        .navbar .social-btn .facebook-btn:hover {
            background: #4676bd;
        }

        .navbar .social-btn .twitter-btn {
            background: #64ccf1;
        }

        .navbar .social-btn .twitter-btn:hover {
            background: #4ec7ef;
        }

        .navbar .social-btn .btn i {
            margin-right: 5px;
            font-size: 16px;
            position: relative;
            top: 2px;
        }

        .or-seperator {
            margin-top: 32px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
        }

        .or-seperator b {
            color: #666;
            padding: 0 8px;
            width: 30px;
            height: 30px;
            font-size: 13px;
            text-align: center;
            line-height: 26px;
            background: #fff;
            display: inline-block;
            border: 1px solid #e0e0e0;
            border-radius: 50%;
            position: relative;
            top: -15px;
            z-index: 1;
        }

        .navbar .action-buttons .dropdown-toggle::after {
            display: none;
        }

        .form-check-label input {
            position: relative;
            top: 1px;
        }

        @media (min-width: 1200px) {
            .form-inline .input-group {
                width: 300px;
                margin-left: 30px;
            }
        }

        @media (max-width: 768px) {
            .navbar .dropdown-menu.action-form {
                width: 100%;
                padding: 10px 15px;
                background: transparent;
                border: none;
            }

            .navbar .form-inline {
                display: block;
            }

            .navbar .input-group {
                width: 100%;
            }
        }

        #titlecolor {

            color: #4d545f;
            font-family: "Segoe UI";
            letter-spacing: 5px;
            font-size: 45px;
            font-weight: lighter;
            margin-top: 10px;

        }
    </style>
    <script>
        // Prevent dropdown menu from closing when click inside the form
        $(document).on("click", ".action-buttons .dropdown-menu", function(e) {
            e.stopPropagation();
        });
    </script>
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.php" class="navbar-brand">Super<b>Car</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link">Accueil</a>
                <a href="selectionofvehicles.php" class="nav-item nav-link">Voiture</a>
                <a href="login_c.php" class="nav-item nav-link">Demande d'essai</a>
                <a href="services.php" class="nav-item nav-link">Services</a>
                <a href="contact_c.php" class="nav-item nav-link">Contact</a>
            </div>

            <!-- <div class="navbar-nav ml-auto">
                    <a href="login_admin.php" class="nav-item nav-link">Admin</a>	
                </div> -->
        </div>
        </div>
    </nav>

    <div class="uk-container uk-padding">
        <div>
            <p><u>Supercar</u></p>
            Responsable du site: MultiSys
            <br>
            Adresse: MCCI Business School, Ebène
            <br>
            Telephone: +23056789549
        </div>
        <div>
            <br>
            <p><u>Le RGPD</u></p>
            Lors de la souscription aux services de ce site Web, MultiSys enregistre les données privées saisies. Multisys certifie que l'entreprise respecte strictement les directives du RGPD.
            Pour toute modification des informations ou des données collectées, veuillez contacter l'administrateur du site.
        </div>
    </div>

    
        <div style = "text-align: center;">
                <img src="upload/brabus_6.png" width="500" alt="voiture">
        </div>


    <div uk-alert uk-position-bottom>
        <p style="text-align: center;">Copyright © Supercar 2020</p>
        <p class="text-center"><a href="mention.php">Mentions légales</a></p>
    </div>

</body>

</html>