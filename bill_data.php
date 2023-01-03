<?php
include("include/connection.php");
session_start();
if (isset($_POST['bill_button'])) {
	$billmonth = $_POST['billmonth'];
	$meter = $_POST['meter'];
	$reading = $_POST['reading'];

	$costquery = "SELECT perUnitCost FROM gepcobill WHERE `id`='$billmonth'";
	$costquery_run = mysqli_query($conn,$costquery);
    $row = mysqli_fetch_assoc($costquery_run);
	 $costperUnit = $row['perUnitCost'];
   
	 $calculated_bill = $costperUnit * $reading;
    $reading_img = $_FILES['reading_img'];
	$filename = $reading_img['name'];
	$filetmp = $reading_img['tmp_name'];
	$fileext = explode('.', $filename);
	$filecheck = strtolower(end($fileext));
	$fileextstored = array('png', 'jpg', 'jpeg');
	if (in_array($filecheck, $fileextstored)) {
		$destinationfile = 'upload/' . $filename;
		move_uploaded_file($filetmp, $destinationfile);
	}
	$query = "INSERT INTO `newbill`(`gepcobill`,`meeters`,`reading_img`,`reading`,`calculated_bill`) VALUES ('$billmonth','$meter','$destinationfile','$reading','$calculated_bill')";
	$query_run =  mysqli_multi_query($conn, $query);
	if ($query_run) {
		$_SESSION['status'] = "New Bill Submitted Successfully!";
		header("location:index.php");
	}
}