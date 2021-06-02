<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["admin_loggedin"]) && $_SESSION["admin_loggedin"] === true){
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='listofvehicles.php';
    </script>");
    exit;
}
 
// Include config file
require_once "db_connect.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Veuillez entrer un nom";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Veuillez entrer un mot de passe";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users_admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["admin_loggedin"] = true;
                            $_SESSION["admin_id"] = $id;
                            $_SESSION["admin_username"] = $username;                            
                            
                            // Redirect user to welcome page
                            echo ("<script LANGUAGE='JavaScript'>
                                window.location.href='listofvehicles.php';
                                </script>");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Le mot de passe entrer n'est pas valide";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "Aucun compte trouvé avec ce nom d'utilisateur.";
                }
            } else{
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('listofvehicles.php');
                </script>");
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

        body,html {background-color: #e9ebef;}

        .iconmore {
            fill: black;
            
        }
        </style>
</head>

<body>
<div class="col text-center">
    <h2 class="uk-modal-title uk-text-small uk-alert-danger" uk-alert>VOUS DEVEZ VOUS CONNECTER POUR AVOIR LES ACCES D'ADMINISTRATEUR</h2>
        <div class="uk-container">
            <div class="center" id="titlecolor">
                <p>Connexion</p>
            </div>
            <label>Veuillez entrer le nom et le mot de passe</label><br><br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="uk-form <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Nom utilisateur</label><br>
                    <input type="text" name="username" class="form-control uk-input uk-form-width-medium" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Mot de passe</label><br>
                    <input type="password" name="password" class="form-control uk-input uk-form-width-medium">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="uk-button uk-button-primary uk-align-center" value="Login">
                </div>
            </form>
        </div>
</div>  
</html>
