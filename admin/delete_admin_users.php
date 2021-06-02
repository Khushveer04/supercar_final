<?php
include_once 'db_connect.php';

$id =$_GET['id'];
$result = mysqli_query($conn, "DELETE FROM users_admin WHERE id=$id");

echo '<script language="javascript">';
echo 'alert("Successfully updated !"); location.href="admin_profile.php"';
echo '</script>';
mysqli_close($conn);
?>