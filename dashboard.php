<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: index.php"); // Redirect to login page if not logged in
  exit;
}
?>

<?php include('company/header.php'); ?>


<a href="logout.php" class="btn btn-danger">Logout</a>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>Select the Option to Perform CRUD Operation</h2>
      <div class="d-grid gap-2">
        <!-- Company Button -->
        <a href="company/company.php" class="btn btn-primary btn-lg mb-3">CRUD on Company Detail</a>
        
        <!-- Employee Button -->
        <a href="employee/employee.php" class="btn btn-success btn-lg">CRUD on Employee Detail</a>
      </div>
    </div>
  </div>
</div>

<?php include('company/footer.php'); ?>