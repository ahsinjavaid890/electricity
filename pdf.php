<?php
require('vendor/autoload.php');
include("include/connection.php");
$bill_id = $_GET['id'];

<<<<<<< HEAD
$query = "SELECT * FROM newbill INNER JOIN meeters ON newbill.meeters = meeters.id INNER JOIN gepcobill ON newbill.gepcobill = gepcobill.id WHERE newbill.id = $bill_id";
=======
echo $query = "SELECT * FROM newbill INNER JOIN meeters ON newbill.meeters = meeters.id INNER JOIN gepcobill ON newbill.gepcobill = gepcobill.id WHERE newbill.id = 19";
>>>>>>> 95a99f091742cd5dee80751315ef7d24eb06564e
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
	$html='<style>
	*{
		box-sizing: border-box;
		padding: 0;
		margin: 0;
	}
	
	.bill {
		text-align: center;
		padding: 5px 10px;
	}
	.CName {
		text-align: center;
		padding: 1px ;
	}
	
	table td:first-child{
		font-weight: bold;
	}
	.address , .contact{
		text-align: center;
	
	}
	.read{
		font-weight: bold;
	}
	#customers {
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 99%;
		margin: 10px 10px 10px 10px;
	  }
	  
	  #customers td, #customers th {
		border: 1px solid #ddd;
		padding: 5px;
	  }
	  
	  #customers tr:nth-child(even){background-color: #f2f2f2;}
	  
	  #customers tr:hover {background-color: #ddd;}
	  
	  #customers th {
		padding-top: 5px;
		padding-bottom: 5px;
		text-align: left;
		background-color: #04AA6D;
		color: white;
	  }
	</style>
	<h1 class="CName">Electricity Bill</h1>
	<h4 class="address">Flat No. '.$row['meeternumber'].'</h4>

	<table id="customers">
  <tr>
    <th style="width: 20%;">Name</th>
    <th>Detail</th>
    
  </tr>
  <tr>
    <td>Consumer Name</td>
    <td>'.$row['customername'].' </td>
   
  </tr>
  <tr>
    <td>Meter No.</td>
    <td>'.$row['meeternumber'].' </td>
   
  </tr>
  

    
 
</table>

<table id="customers">
  <tr>
    <th style="width: 20%;">Bill</th>
    <th>Detail</th>
  </tr>
  <tr>
    <td>Bill No.</td>
    <td>'.$row['id'].'</td>
  </tr>
  <tr>
    <td>Bill Date</td>
    <td>'.$row['created_at'].'</td>
  </tr>
  <tr>
    <td>Billing Month</td>
    <td>'.$row['month'].'</td>
  </tr>
  <tr>
    <td>Billing Year</td>
    <td>'.$row['year'].'</td>
    </tr>
</table>

<table id="customers">
  <tr>
    <th colspan="3">ENERY CHARGES</th>
  </tr>
  <tr >
    <td rowspan="2">Current</td>
    <td class="read">Reading</td>
    <td>'.$row['reading'].'</td>
  </tr>
  <tr>
    <td >Date</td>
    <td>'.$row['created_at'].'</td>
    
   
  </tr>
  <tr>
    <td colspan="2">Unit Price</td>
    <td>'.$row['perUnitCost'].'</td>
    
   
  </tr>
  <tr>
    <td colspan="2">Total Bill</td>
    <td>'.$row['calculated_bill'].'</td>
    
    </tr>
  
 
</table>
	<table class="table">';
		$html.='<tr><td></td><td> </td><td>  </td> <td> </td></tr>';

			$html.='<tr><td></td><td></td>
      <td></td>
      <td></td>
      </tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file=time().'.pdf';
$mpdf->output($file,'D');
?>