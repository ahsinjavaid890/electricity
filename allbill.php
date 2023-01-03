<?php
include("include/connection.php");
?>
<!DOCTYPE html>
<html>
<?php include("include/head.php"); ?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2 class="text-center text-dark mt-5">All Bills</h2>
				<div class="card my-5">
					<div class="row">
						<div class="col-md-6">
							<a href="addgebcobill.php" class="btn btn-primary btn-block">Add Gepco Bill</a>
						</div>
						<div class="col-md-6">
							<a href="index.php" class="btn btn-primary btn-block">Add New Bill</a>
						</div>
						<div class="col-md-6 mt-3">
							<a href="allmeeter.php" class="btn btn-primary btn-block">All Meter</a>
						</div>
						<div class="col-md-6 mt-3">
							<a href="allbill.php" class="btn btn-success btn-block">All Bills</a>
						</div>
					</div>
					<div class="card-body cardbody-color p-lg-5">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Sr:</th>
									<th>Image</th>
									<th>Reading</th>
									<th>Meter No.</th>
									<th>Total Bill</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$count = 1;
								$query = "SELECT * FROM newbill 
						        INNER JOIN meeters ON newbill.meeters = meeters.id 
						        INNER JOIN gepcobill ON
						        gepcobill.id = newbill.gepcobill
						        ";
								$query_run = mysqli_query($conn, $query);
								if (mysqli_num_rows($query_run) > 1) {
									while ($row =  mysqli_fetch_assoc($query_run)) {
								?>
										<h2><?php echo $reading; ?></h2>
										<tr>
											<td><?php echo $count ?></td>
											<td><?php echo $row['reading']; ?></td>
											<td><?php echo $row['calculated_bill']; ?></td>
										</tr>
								<?php
										$count++;
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