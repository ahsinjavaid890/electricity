<?php
include("include/connection.php");
$meterid = $_GET['id'];
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
								    <th>Image</th>
									<th>Reading</th>
									<th>Meter No.</th>
									<th>Month</th>
									<th>Year</th>
									<th>Total Bill</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query = "SELECT * FROM newbill INNER JOIN meeters ON newbill.meeters = meeters.id INNER JOIN gepcobill ON newbill.gepcobill = gepcobill.id WHERE meeters = $meterid";
								$query_run = mysqli_query($conn, $query);
								if ($query_run->num_rows > 0) {
									while ($row = $query_run->fetch_assoc()) {
								?>
										<tr>
											<td><img width="50px" height="50px" src="<?php echo $row['reading_img'] ?>"></td>
											<td><?php echo $row['reading']; ?></td>
											<td><?php echo $row['meeters'] ?></td>
											<td><?php echo $row['month']?></td>
											<td><?php echo $row['year']?></td>
											<td><?php echo $row['calculated_bill']; ?></td>
                                            <td><a href="pdf.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-success">Download</a></td>
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