<?php
include('connection/db.php');

$del=$_GET['del'];
$query=mysqli_query($conn,"DELETE FROM admin_login WHERE id='$del'");
if($query)
{
    echo "<script>alert('Record has been deleted')</script>";
    header('location:customers.php');
}
else
{
    echo "<script>alert('Record has not deleted')</script>";
}

?>