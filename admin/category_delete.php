<?php
include('connection/db.php');

$id=$_GET['del'];
$query=mysqli_query($conn,"DELETE FROM job_category WHERE id='$id'");
if($query)
{
    echo "<script>alert('Record has been deleted')</script>";
    header('location:category.php');
}
else
{
    echo "<script>alert('Record has not deleted')</script>";
}

?>