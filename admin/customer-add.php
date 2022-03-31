<?php
session_start();
include('connection/db.php');
if(isset($_POST['insert_save']))
{
   $email=$_POST['email'];
  $password=$_POST['password'];
  $username=$_POST['username'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $admin_type=$_POST['admin_type'];

 $query="INSERT INTO admin_login (admin_email, admin_pass, admin_username, fname, lname, admin_type) VALUES ('$email', '$password', '$username', '$fname', '$lname', '$admin_type')";
 $query_run=mysqli_query($conn,$query);



 if($query_run)
 {
     echo "Data has successfully inserted";
    header('location:customers.php');
 }
 else
 {
     echo "Something went wrong";
 }
}


if(isset($_POST['update_save']))
{
    $id=$_POST['edit_id'];
    $email=$_POST['edit_email'];
    $password=$_POST['edit_password'];
    $username=$_POST['edit_username'];
    $fname=$_POST['edit_fname'];
    $lname=$_POST['edit_lname'];
    $admin_type=$_POST['edit_admin_type'];

$query=mysqli_query($conn,"UPDATE admin_login SET admin_email='$email', admin_pass='$password', admin_username='$username', fname='$fname', lname='$lname', admin_type='$admin_type' WHERE id='$id' ");
if($query)
{
    echo "<script>alert('Record has been updated')</script>";
    header('location:customers.php');
}
else
{
    echo "<script>alert('Record has not updated')</script>";
}
}

if(isset($_POST['company_save']))
{
   $company=$_POST['company'];
   $description=$_POST['description'];
   $admin=$_POST['admin'];
   //$admin_type=$_POST['admin_type'];

 $query="INSERT INTO company (company, description, admin) VALUES ('$company', '$description', '$admin')";
 $query_run=mysqli_query($conn,$query);

if($query_run)
 {
     echo "Data has successfully inserted";
    header('location:create-company.php');
 }
 else
 {
     echo "Something went wrong";
 }
}


if(isset($_POST['update_company']))
{
    $id=$_POST['edit_id'];
    $company=$_POST['edit_company'];
    $description=$_POST['edit_description'];
    $admin=$_POST['admin'];
    //$admin_type=$_POST['edit_admin_type'];

$query=mysqli_query($conn,"UPDATE company SET company='$company', description='$description', admin='$admin' WHERE company_id='$id' ");
if($query)
{
    echo "<script>alert('Record has been updated')</script>";
    header('location:create-company.php');
}
else
{
    echo "<script>alert('Record has not updated')</script>";
}
}


if(isset($_POST['job_save']))
{
    $login=$_SESSION['email'];
    $job_title=$_POST['job_title'];
   $description=$_POST['description'];
   $country=$_POST['country'];
   $city=$_POST['city'];
   $area=$_POST['area'];
   $category=$_POST['category'];
   $keyword=$_POST['keyword'];
   //$admin_type=$_POST['admin_type'];

 $query="INSERT INTO `all_jobs`(`customer_email`, `job_title`, `description`, `country`, `city`, `area`, `category`, `keyword`)
            VALUES ('$login', '$job_title', '$description', '$country', '$city', '$area', '$category', '$keyword')";
 $query_run=mysqli_query($conn,$query);

if($query_run)
 {
     echo "Data has successfully inserted";
    header('location:create-job.php');
 }
 else
 {
     echo "Something went wrong";
 }
}


if(isset($_POST['update_job']))
{
    $id=$_POST['id'];
    $job_title=$_POST['job_title'];
    $description=$_POST['description'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $area=$_POST['area'];
    //$admin_type=$_POST['edit_admin_type'];

$query=mysqli_query($conn,"UPDATE all_jobs SET job_title='$job_title', description='$description', country='$country', city='$city', area='$area' WHERE job_id='$id' ");
if($query)
{
    echo "<script>alert('Record has been updated')</script>";
    header('location:create-job.php');
}
else
{
    echo "<script>alert('Record has not updated')</script>";
}
}



if(isset($_POST['category_save']))
{
   $category=$_POST['category'];
   $description=$_POST['description'];
   //$admin_type=$_POST['admin_type'];

 $query="INSERT INTO job_category(category, description) VALUES('$category', '$description')";
 $query_run=mysqli_query($conn,$query);

if($query_run)
 {
     echo "Data has successfully inserted";
    header('location:category.php');
 }
 else
 {
     echo "Something went wrong";
 }
}


if(isset($_POST['update_category']))
{
    $id=$_POST['edit_id'];
    $category=$_POST['edit_category'];
    $description=$_POST['edit_description'];
    //$admin_type=$_POST['edit_admin_type'];

$query=mysqli_query($conn,"UPDATE job_category SET category='$category', description='$description' WHERE id='$id' ");
if($query)
{
    echo "<script>alert('Record has been updated')</script>";
    header('location:category.php');
}
else
{
    echo "<script>alert('Record has not updated')</script>";
}
}

?>