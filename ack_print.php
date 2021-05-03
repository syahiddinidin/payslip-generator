<!DOCTYPE html>
<html>
<head>
<?php
	include 'db_connect.php';
?>
<link rel="stylesheet" href="printcss.css">
<style>
table{
	border: 1px solid black;
	width:100%;
	margin:auto;
	counter-reset: rowNumber;
}
table tr:not(:first-child){
	counter-increment: rowNumber;
}
table tr td:first-child::before{
	content: counter(rowNumber);
	min-width: 1em;
	margin-right:0.5em;
}
table th, td{
	border: 1px solid black;
	font-size: 15.5px;
	text-align:center;
}

</style>
</head>
<body>
<input id="print" type="button" value="Print" onclick="window.print()"/>
<input id="print" type="button" class="back" value="Back" onclick="window.history.back()"/>
	<p>PAYSLIP RECEIVED ACKNOWLEDGE LIST</p>
	<p>For Salary&nbsp<input style="border:none; width:200px; background-color:#cccccc" type="text" placeholder="Month Year"></p>
	<table cellspacing='0' cellpadding='3'>
			<tr>
				<th>No. </th>
				<th>PC No.</th>
				<th>Name</th>
				<th>Position</th>
				<th>Acknowledge</th>
			</tr>
	<?php
		$sql = "SELECT * FROM employee";

		$query = $conn->query($sql) or die ("ERROR: {$conn->error}");
		
		while($row = $query->fetch_assoc()){
			echo "
			<tr>
				<td></td>
				<td>".$row['pc_no']."</td>
				<td>".$row['name']."</td>
				<td>".$row['department']."</td>
				<td></td>
			</tr>


		";
		}
	?>
	</table>
</body>
</html>
