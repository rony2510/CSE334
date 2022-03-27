<?php
include('connection/db.php');
session_start();
if(isset($_SESSION['email']))
{

}
else
{
    header('location:admin_login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
  <?php  include('include/header.php'); ?>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="admin_dashboard.php">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        <a class="nav link px-3" href="" style="text-decoration:none color:white;"><?php echo $_SESSION['email']; ?></a>
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">

      <?php include('include/sidebar.php'); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href=""> Jobs</a></li>
           </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">All Jobs</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">

              </div>
             <a href="add-create-job.php"> <button class="btn btn-sm btn-outline-secondary">
                Create Jobs
              </button>
             </a>
            </div>
          </div>

          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Customer Email</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Country</th>
                <th>City</th>
                <th>Area</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $query=mysqli_query($conn,"SELECT * FROM all_jobs WHERE customer_email='{$_SESSION['email']}' ");
            while($row=mysqli_fetch_array($query))
            {
          ?>
             <tr>
               <td><?php echo $row['job_id']; ?></td>
                <td><?php echo $row['customer_email'];?></td>
                <td><?php echo $row['job_title'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['country'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><?php echo $row['area'];?></td>
                <td>
                  <div class="row">
                      <div class="btn-group">
                        <a href="job-edit.php?edit=<?php echo $row['job_id']; ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="job-delete.php?del=<?php echo $row['job_id']; ?>" class="btn btn-warning btn-sm ms-1"><i class="fa-solid fa-trash"></i></a>
                        <!-- <a href="#" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#" class="btn btn-warning btn-sm ms-1"><i class="fa-solid fa-trash"></i></a> -->
                      </div>
                  </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Customer Email</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Country</th>
                <th>City</th>
                <th>Area</th>
                <th>Action</th>
            </tr>
        </tfoot>
       </table>

        <!-- <div style="width: 60%; margin-left:20%; background-color: #F2F4F4">
           <div id="msg"></div>
            <form method="POST" action="customer-add.php" style="margin:3%; padding:3%;">
                <div class="form-group">
                    <label class="w-100">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter customer email">
                </div>
                <div class="form-group">
                    <label class="w-100">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <label class="w-100">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter customer username">
                </div>
                <div class="form-group">
                    <label class="w-100"></label>
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label class="w-100"></label>
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter last name">
                </div>
                <div class="form-group">
                    <label class="w-100"></label>
                   <select name="admin_type" id="admin_type" class="form-select">
                       <option>Select Status</option>
                       <option value="1">Super Admin</option>
                       <option value="2">Customer Admin</option>
                   </select>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-block btn-success" name="insert_save">Save</button>
                </div>
            </form>
        </div> -->

          <!-- <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
           <div class="table-responsive">

           </div> -->

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

<!-- data tables plugin -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>


</body>
</html>
