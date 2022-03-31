<?php
session_start();
include('connection/db.php');
if(isset($_SESSION['email']))
{

}
else
{
    header('location:admin_login.php');
}
$id=$_GET['edit'];
$query=mysqli_query($conn, "SELECT * FROM company WHERE company_id='$id' ");
while($row=mysqli_fetch_array($query))
{
    $company=$row['company'];
    $description=$row['description'];
    $admin=$row['admin'];
    //$admin_type=$row['admin_type'];
}
?>
<!doctype html>
<html lang="en">
  <head>
  <?php  include('include/header.php'); ?>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="admin_dashboard.php">Company Name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
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
            <li class="breadcrumb-item"><a href="create-company.php"> Company</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#"> Update Company</a></li>
           </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Company</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">

              </div>
             <a href="add-company.php"> <button class="btn btn-sm btn-outline-secondary">
                Add Company
              </button>
             </a>
            </div>
          </div>

        <div style="width: 60%; margin-left:20%; background-color: #F2F4F4">
           <div id="msg"></div>
            <form method="POST" action="customer-add.php" style="margin:3%; padding:3%;">
                <div class="form-group">
                    <label class="w-100">Company Name</label>
                    <input type="text" name="edit_company" id="edit_company" value="<?php echo $company; ?>" class="form-control" placeholder="Enter Company Name">
                </div>
                <div class="form-group">
                    <label class="w-100">Description</label>
                    <textarea type="text" name="edit_description" id="edit_description" class="form-control" cols="30" rows="10" placeholder="Enter company description"><?php echo $description; ?></textarea>
                </div>
                <div class="form-group">
                    <label class="w-100">Company Admin</label>
                    <select name="admin" id="admin" class="form-control">
                       <?php
                       $sql=mysqli_query($conn,"SELECT * FROM admin_login WHERE admin_type='2' ");
                          while($row=mysqli_fetch_array($sql))
                          {
                            ?>
                              <option value="<?php echo $row['admin_email']; ?>"><?php echo $row['admin_email'];?></option>
                            <?php
                          }
                       ?>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label class="w-100">Admin Type</label>
                   <select name="edit_admin_type" id="admin_type" value="<?php echo $admin_type; ?>" class="form-select">
                       <option>Select Status</option>
                       <option value="1">Super Admin</option>
                       <option value="2">Customer Admin</option>
                   </select>
                </div> -->
                <input type="hidden" name="edit_id" id="id" value="<?php echo $_GET['edit'];  ?>">
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-block btn-success" name="update_company">Update</button>
                </div>
            </form>
        </div>

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