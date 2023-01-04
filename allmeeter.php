<?php
include("include/connection.php");
?>
<!DOCTYPE html>
<html>
<?php include("include/head.php"); ?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<h2 class="text-center text-dark mt-5">All Meter</h2>
				<div class="card my-5">
					<div class="row">
						<div class="col-md-6">
							<a href="addgebcobill.php" class="btn btn-primary btn-block">Add Gepco Bill</a>
						</div>
						<div class="col-md-6">
							<a href="index.php" class="btn btn-primary btn-block">Add New Bill</a>
						</div>
						<div class="col-md-6 mt-3">
							<a href="allmeeter.php" class="btn btn-success btn-block">All Meter</a>
						</div>
						<div class="col-md-6 mt-3">
							<a href="allbill.php" class="btn btn-primary btn-block">All Bills</a>
						</div>
					</div>
					<div class="card-body cardbody-color p-lg-5" id="fetchmessage">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Meter Number</th>
									<th>Consumer Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query = "SELECT * FROM meeters";
								$query_run = mysqli_query($conn, $query);
								if (mysqli_num_rows($query_run) > 1) {
									while ($row =  mysqli_fetch_assoc($query_run)) {
								?>
										<tr>
											<td><?php echo $row['meeternumber'] ?></td>
											<td><?php echo $row['customername'] ?></td>
											<td><a href="viewbill.php?id=<?php echo $row['id']?>" class="viewbutton btn btn-success btn-sm">View Bills</a></td>
										</tr>
								<?php
									}
								}
								?>

							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>

	
</body>

</html>