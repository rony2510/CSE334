<?php
    include('connection/db.php');
    if(isset($_POST['submit'])) {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $dob=$_POST['dob'];
        $file=$_FILES['file']['name'];
       // $name = md5(rand());
       // $files1=$email.".".$file;

        $tmp_name=$_FILES['file']['tmp_name'];
        $id_job=$_POST['id_job'];
        $job_seeker=$_POST['job_seeker'];
       // $phone=$_POST['phone'];

        move_uploaded_file($_FILES["file"]["tmp_name"],'files/'.$file);

        $query=mysqli_query($conn,"insert into job_apply(fname,lname,dob,file,id_job,job_seeker)values('$fname','$lname','$dob','$file','$id_job','$job_seeker')");

        if ($query) {
           // header('location:index.php');
        }else{
            echo '<script>Not</script>';
        }

    }
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cover Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <link href="cover.css" rel="stylesheet">
    <style>
        /*
 * Globals
 */


/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
}


/*
 * Base structure
 */

body {
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}


/*
 * Header
 */

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

        </style>
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <!-- <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Cover</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header> -->

  <main class="px-3">
    <h1>Cover your page.</h1>
    <?php
    include('connection/db.php');
    if(isset($_POST['submit'])) {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $dob=$_POST['dob'];
        $file=$_FILES['file']['name'];
       // $name = md5(rand());
       // $files1=$email.".".$file;

        $tmp_name=$_FILES['file']['tmp_name'];
        $id_job=$_POST['id_job'];
        $job_seeker=$_POST['job_seeker'];
       // $phone=$_POST['phone'];

        move_uploaded_file($_FILES["file"]["tmp_name"],'files/'.$file);

        $query=mysqli_query($conn,"insert into job_apply(fname,lname,dob,file,id_job,job_seeker)values('$fname','$lname','$dob','$file','$id_job','$job_seeker')");

        if ($query) {
            ?>
               <p class="lead">Your Form Successfully added.</p>
            <?php
        }else{
            echo '<script>Not</script>';
        }

    }
?>

    <p class="lead">
      <a href="job-single.php" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Back</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>

  </body>
</html>
