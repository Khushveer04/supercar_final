<?php
// Include config file
require_once "db_connect.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Veuillez entrer un nom utilisateur.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users_admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Le nom est est deja prise";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 3){
        $password_err = "Le mot de passe doit au minimum 4 characteres";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Veuillez confirmer le mot de passe";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Mot de passe pas identique";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users_admin (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='admin_profile.php';
                 </script>");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
          margin-top:50px;
         
        }

        #navcolor {
          background-color:#ced4da;
        }

        html,body {background-color: #e9ebef;}

        .iconmore {
            fill: black;
            
        }
        </style>
</head>

<body>
<div class="col text-center">
    <h2 class="uk-modal-title uk-text-small uk-alert-danger" uk-alert>REMPLISSEZ LE FORMULAIRE POUR LA CREATION D'UN NOUVEAU UTILISATEUR</h2>
    <div class="uk-container">
    <div class="center" id="titlecolor">
        <p>CREATION</p>
    </div>
        <p class="text-center">Veuillez remplir se formulaire pu cree un compte.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
            <div class="uk-form <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <p class="uk-form-label uk-text-bold text-center" for="form-stacked-text">Nom utilisateur</p>
                <input type="text" name="username" class="form-control uk-input uk-form-width-medium" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <p class="uk-form-label uk-text-bold text-center" for="form-stacked-text">Mot de passe</p>
                <input type="password" name="password" class="form-control uk-input uk-form-width-medium" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <p class="uk-form-label uk-text-bold text-center" for="form-stacked-text">Confirmation mot de passe</p>
                <input type="password" name="confirm_password" class="form-control uk-input uk-form-width-medium" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="ENVOYER">
                <input type="reset" class="btn btn-default" value="REINITIALISER">
            </div>
            <a href="listofvehicles.php" class="btn btn-light">RETOUR</a>
        </form>
    </div>
</div>

</html>