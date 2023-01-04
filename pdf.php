<?php
require('vendor/autoload.php');
include("include/connection.php");
$bill_id = $_GET['id'];

echo $query = "SELECT * FROM newbill INNER JOIN meeters ON newbill.meeters = meeters.id INNER JOIN gepcobill ON newbill.gepcobill = gepcobill.id WHERE newbill.id = 19";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
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
	<h1 class="CName">Gepco</h1>
	<h4 class="address">Peoples Colony</h4>
	<h4 class="contact">+92 35 478 754</h4>

	<table id="customers">
  <tr>
    <th style="width: 20%;">Name</th>
    <th>Detail</th>
    
  </tr>
  <tr>
    <td>Name</td>
    <td> </td>
   
  </tr>
  <tr>
    <td>Phone</td>
    <td> </td>
   
  </tr>
  <tr>
    <td>Email</td>
    <td> </td>
   
  </tr>
  <tr>
    <td>Period</td>
    <td> </td>
    
 
</table>

<table id="customers">
  <tr>
    <th style="width: 20%;">Bill</th>
    <th>Detail</th>
    
  </tr>
  <tr>
    <td>Bill No.</td>
    <td></td>
   
  </tr>
  <tr>
    <td>Bill Date</td>
    <td></td>
   
  </tr>
  <tr>
    <td>Bill Due Date</td>
    <td></td>
   
  </tr>
  <tr>
    <td>Bill Month</td>
    <td></td>
   
  </tr>
  <tr>
    <td>Other Charges</td>
    <td></td>
    </tr>
  <tr>
    <td>Sanction Load(KW)</td>
    <td></td>
    </tr>
 
</table>

<table id="customers">
  <tr>
    <th colspan="3">ENERY CHARGES</th>
  </tr>
  <tr >
    <td rowspan="2">Current</td>
    <td class="read">Reading</td>
    <td> </td>
  </tr>
  <tr>
    <td >Date</td>
    <td></td>
    
   
  </tr>
  <tr >
    <td rowspan="2">Current</td>
    <td class="read">Reading</td>
    <td></td>
  </tr>
  <tr>
    <td >Date</td>
    <td></td>
    
   
  </tr>
  <tr>
    <td colspan="2">Consumptions</td>
    <td></td>
    
   
  </tr>
  <tr>
    <td colspan="2">Price Unit</td>
    <td></td>
    
    </tr>
  
 
</table>
	<table class="table">';
		$html.='<tr><td>Bill Id</td><td>Reading</td><td>Total Bill</td><td>Per Unit Cost</td> <td>Meter No.</td></tr>';
		while($row=mysqli_fetch_assoc($result)){
			$html.='<tr><td>'.$row['id'].'</td><td>'.$row['reading'].'</td><td>'.$row['calculated_bill'].'</td>
      <td>'.$row['perUnitCost'].'</td>
      <td>'.$row['meeternumber'].'</td>
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
