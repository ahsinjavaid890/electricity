<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include("include/head.php"); ?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<h2 class="text-center text-dark mt-5">Add New Bill</h2>
				<div class="card my-5">
					<div class="row">
						<div class="col-md-6">
							<a href="addgebcobill.php" class="btn btn-success btn-block">Add Gepco Bill</a>
						</div>
						<div class="col-md-6">
							<a href="index.php" class="btn btn-primary btn-block">Add New Bill</a>
						</div>
						<div class="col-md-6 mt-3">
							<a href="allmeeter.php" class="btn btn-primary btn-block">All Meter</a>
						</div>
						<div class="col-md-6 mt-3">
							<a href="allbill.php" class="btn btn-primary btn-block">All Bills</a>
						</div>
					</div>
					<form action="addGepcoBill_data.php" method="post" enctype="multipart/form-data" class="card-body cardbody-color p-lg-5">
						<?php
						if (isset($_SESSION['status'])) {
						?>
							<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php echo $_SESSION['status']; ?>
							</div>
						<?php

							session_unset();
						}
						?>
						<div class="mb-3">
							<label>Year</label>
							<select required class="form-control" name="year">
								<option value="">Select Year</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
							</select>
						</div>
						<div class="mb-3">
							<label>Month</label>
							<select required class="form-control" name="month">
								<option value="">Select Month</option>
								<option value="January">January</option>
								<option value="February">February</option>
								<option value="March">March</option>
								<option value="April">April</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">August</option>
								<option value="September">September</option>
								<option value="October">October</option>
								<option value="November">November</option>
								<option value="December">December</option>
							</select>
						</div>
						<div class="mb-3">
							<label>Bill Image</label>
							<input name="bill_image" style="height: 45px;" required type="file" class="form-control" id="Username" accept="image/png, image/gif, image/jpeg" aria-describedby="emailHelp" placeholder="User Name">
						</div>
						<div class="mb-3">
							<label>Total Units</label>
							<input name="total_units" required type="text" class="form-control" placeholder="Reading">
						</div>
						<div class="mb-3">
							<label>Total Bill</label>
							<input name="total_bil" required type="text" class="form-control" placeholder="Total">
						</div>
						<div class="text-center"><button type="submit" name="submit_bill" class="btn btn-color px-5 mb-5 w-100">Submit</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>