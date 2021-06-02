<?php
session_start();

unset($_SESSION["admin_loggedin"]);
unset($_SESSION["admin_id"]);
unset($_SESSION["admin_username"]); 

header('Location: index.php');
exit;
?>