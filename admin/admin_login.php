<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin Login</title>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" id="admin_login" name="admin_login" method="POST" action="admin_login.php">
      <img class="mb-4" src="img/logo.jpeg" alt="" width="102" height="102">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit">Sign In </button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
    </form>
    <!-- ctrl+/ <script src="js/admin_login.js"></script> -->

  </body>
</html>

<?php
  include('connection/db.php');
  if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $query=mysqli_query($conn,"SELECT * FROM admin_login WHERE admin_email='$email' AND admin_pass='$pass'");
    if($query)
    {
        if(mysqli_num_rows($query)>0)
    {
        $_SESSION['email']=$email;
       header('location:admin_dashboard.php');
    }
    else
    {
        echo "<script>alert('Email/password is wrong. Please Try again')</script>";
    }
    }
}
 ?>