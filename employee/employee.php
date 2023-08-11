<?php include('header.php'); ?>
<?php include('../dbconnection.php') ?>

<?php
// 	session_start();
// 	if(!$_SESSION['auth']){
// 		header('location:index.php')
// 	}
// ?>


<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: ../index.php"); // Redirect to login page if not logged in
  exit;
}
?>






<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-auto">
            <a href="e_insert_data.php" class="btn btn-primary">CREATE NEW EMPLOYEE</a>
        </div>
    </div>
</div>





<?php

if(isset($_GET['e_insert_msg'])){
	echo "<h6 >".htmlspecialchars($_GET['e_insert_msg'])."</h6>";
}

?>


<br><br>
<div class="box1">
<h2>Employee Detail</h2>
</div>
<?php

	if(isset($_GET['e_update_msg'])){
		echo "<h6>".htmlspecialchars($_GET['e_update_msg'])."</h6>";
	}

?>

<?php

	if(isset($_GET['e_delete_msg'])){
		echo "<h6>".htmlspecialchars($_GET['e_delete_msg'])."</h6>";
	}

?>
<table class="table table-hover table-">
	<thead>
		<tr>
			<th>Name</th>
			<th>Salary</th>
			<th>Date Of Birth</th>
			<th>Company</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$query = "select * from `Employee`";

			$result = mysqli_query($conn, $query);

			if(!$result){
				die("query Failed".mysqli_error());
			}
			else{
				while($row = mysqli_fetch_assoc($result)){
					?>
						<tr>
							<td> <?php echo $row['name']; ?> </td>
							<td> <?php echo $row['salary']; ?> </td>
							<td> <?php echo $row['dateOfBirth']; ?> </td>
							<td> <?php echo $row['company']; ?> </td>
							<td><a href="e_update_page.php?id=<?php echo $row['id']; ?> " class="btn btn-success">Update</a></td>
							<td><a href="e_delete_page.php?id=<?php echo $row['id']; ?> " class="btn btn-danger">Delete</a></td>
						</tr>

					<?php
				}
			}

		 ?>
	</tbody>
</table>



<?php include('footer.php'); ?>