<?php
include("include/connection.php");
session_start();
if (isset($_POST['submit_bill'])) {
	$year = $_POST['year'];
	$month = $_POST['month'];
	$units = $_POST['total_units'];
	$img = $_FILES['bill_image'];
	$filename = $img['name'];
	$filetmp = $img['tmp_name'];
	$fileext = explode('.', $filename);
	$filecheck = strtolower(end($fileext));
	$fileextstored = array('png', 'jpg', 'jpeg');
	if (in_array($filecheck, $fileextstored)) {
		$destinationfile = 'upload/' . $filename;
		move_uploaded_file($filetmp, $destinationfile);
	}
	$query = "INSERT INTO `gepcobill`( `year`, `month`, `bill_image`, `total_units`) VALUES ('$year','$month','$destinationfile','$units')";
	$query_run =  mysqli_multi_query($conn, $query);
	if ($query_run) {
		$_SESSION['status'] = "Bill Submitted Successfully!";
		header("location:addgebcobill.php");
	}
}
?>