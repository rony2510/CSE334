<?php
include('connection/db.php');

$del=$_GET['del'];
$query=mysqli_query($conn,"DELETE FROM company WHERE company_id='$del'");
if($query)
{
    echo "<script>alert('Record has been deleted')</script>";
    header('location:create-company.php');
}
else
{
    echo "<script>alert('Record has not deleted')</script>";
}

?>