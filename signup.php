<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sign Up Here</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

<main class="form-signin">
  <form method="POST" action="">
    <img class="mb-4" src="img/logo.jpeg" alt="" height="70px">
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

    <div class="form-floating mt-3">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mt-2">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mt-2">
      <input type="fname" name="fname" class="form-control" id="fname" placeholder="first name">
      <label for="floatingPassword">First Name</label>
    </div>
    <div class="form-floating mt-2">
      <input type="lname" name="lname" class="form-control" id="lname" placeholder="last name">
      <label for="floatingPassword">Last Name</label>
    </div>
    <div class="form-floating mt-2">
      <input type="number" name="phone" class="form-control" id="phone" placeholder="phone number">
      <label for="floatingPassword">Phone Number</label>
    </div>

    <button type="submit" name="submit" class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign Up</button>
    <a href="job-post.php">Login Here</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


<?php
include('connection/db.php');
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $query=mysqli_query($conn,"INSERT INTO job_seeker(email,password,fname,lname,phone) VALUES('$email', '$password', '$fname', '$lname', '$phone') ");
    if($query)
    {
        echo "<script>alert('Now you can login!')</script>";
        header('location:job-post.php');
    }
    else
    {
        echo "<script>alert('Something went wrong!')</script>";
    }
}
?>
