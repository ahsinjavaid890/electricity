<!DOCTYPE html>
<html>
<head>
  <title>Electricity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
	    <div class="row">
	      <div class="col-md-6 offset-md-3">
	      	
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
	      			<a href="allmeeter.php" class="btn btn-primary btn-block">All Meeter</a>
	      		</div>
	      		<div class="col-md-6 mt-3">
	      			<a href="allbill.php" class="btn btn-primary btn-block">All Bills</a>
	      		</div>
	      	</div>
	          <form class="card-body cardbody-color p-lg-5">
	          	<div class="mb-3">
	            <label>Year</label>
	              <select required class="form-control" name="meeter">
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
	              <select required class="form-control" name="meeter">
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
	              <input style="height: 45px;" required type="file" class="form-control" id="Username" aria-describedby="emailHelp"
	                placeholder="User Name">
	            </div>
	            <div class="mb-3">
	            	<label>Total Units</label>
	              <input required type="text" class="form-control" id="password" placeholder="Reading">
	            </div>
	            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Submit</button></div>
	          </form>
	        </div>
	      </div>
	    </div>
	  </div>
</body>
</html>