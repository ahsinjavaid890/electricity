<?php
include("include/connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<?php include("include/head.php"); ?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">

				<h2 class="text-center text-dark mt-5">Add New Bill</h2>
				<div class="card my-5">
					<div class="row">
						<div class="col-md-6">
							<a href="addgebcobill.php" class="btn btn-primary btn-block">Add Gepco Bill</a>
						</div>
						<div class="col-md-6">
							<a href="index.php" class="btn btn-success btn-block">Add New Bill</a>
						</div>
						<div class="col-md-6 mt-3">
							<a href="allmeeter.php" class="btn btn-primary btn-block">All Meter</a>
						</div>
						<div class="col-md-6 mt-3">
							<a href="allbill.php" class="btn btn-primary btn-block">All Bills</a>
						</div>
					</div>
					<form action="bill_data.php" method="post" enctype="multipart/form-data" class="card-body cardbody-color p-lg-5">
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
							<label>Select Bill Month</label>
							<select required class="form-control" name="billmonth">
								<option value="">Select Bill Month</option>
								<?php
								$month_query = "SELECT * FROM gepcobill";
								$run_monthquery = mysqli_query($conn, $month_query);
								while ($row = mysqli_fetch_assoc($run_monthquery)) {
								?>
									<option value="<?php echo $row["month"]?>"><?php echo $row["month"] . "(" . $row["year"] . ")" ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="mb-3">
							<label>Select Meter</label>
							<select required class="form-control" name="meter">
								<option value="">Select Meter</option>
								<?php
								$meter_query = "SELECT * FROM meeters";
								$run_meterquery = mysqli_query($conn, $meter_query);
								while ($row1 = mysqli_fetch_assoc($run_meterquery)) {
								?>
									<option value="<?php echo $row1["meeternumber"]?>"><?php echo $row1["meeternumber"] . "(" . $row1["customername"] . ")" ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="mb-3">
							<label>Reading Image</label>
							<input style="height: 45px;" required type="file" class="form-control" 
							name="reading_img" accept="image/png, image/gif, image/jpeg"  aria-describedby="emailHelp" placeholder="User Name">
						</div>
						<div class="mb-3">
							<label>Enter Reading</label>
							<input name="reading" required type="text" class="form-control"placeholder="Reading">
						</div>
						<div class="text-center"><button type="submit" name="bill_button" class="btn btn-color px-5 mb-5 w-100">Submit</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>