<?php
include('connection/db.php');
session_start();
session_unset();
header('location:admin_login.php');

$query=mysqli_query($conn, "SELECT * FROM admin_login WHERE admin_email='{$_SESSION['email']}' AND admin_type='2' ");
if($query)
{
    header('location:http://localhost/project/CSE334/');
}
else
{
    header('location:admin_login.php');
}
?>



