<?php
include "db_connect.php";
include "header.php";
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="excel">
<div class="moulding box">
<div><input style="text-align:left" type="text" id="search" onkeyup="search('table')" placeholder="Search Name"></div>
<table cellspacing=0 cellpadding=0 id="table">
<h2 id="head" align="center">Earning List</h2><h2 align="center">Moulding</h2>
<button class="new" onclick="document.location='employee_earning_add.php'">New</button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Work Days</th>
		<th>Earnings</th>
		<th>Amount</th>
		<th>Total Earning</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM earnings";
		$idquery = $conn->query($idsql);
		$sql = "SELECT *, employee.pc_no, employee.name, employee.section FROM earnings 
		INNER JOIN employee ON earnings.employee_id = employee.id 
		WHERE employee.section=1";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
				<td></td>
				<td>". $row['pc_no'] ."</td>
				<td>". $row['name'] ."</td>
				<td>". $row['work_days']."</td>
				<td style='text-align:left'>
					<div>Salary</div>
					<div>Allowance</div>
					<div>OT Normal</div>
					<div>Work on Rest Day</div>
					<div>Work on Public Holiday</div>
					<div style='background-color:gray'><br></div>
					<div>Basic</div>
					<div style='border-bottom:none'>ORP/Day</div>
				</td>
				<td style='text-align:left'>
					<div>RM ". number_format($row['salary'],2) ."</div>
					<div>RM ". number_format($row['allowance'],2) ."</div>
					<div>RM ". number_format($row['ot_normal'],2) ."</div>
					<div>RM ". number_format($row['work_rd'],2) ."</div>
					<div>RM ". number_format($row['work_ph'],2) ."</div>
					<div style='background-color:gray'><br></div>
					<div>RM ". number_format($row['basic'],2) ."</div>
					<div style='border-bottom:none'>RM ". number_format($row['orp'],2) ."</div>
				</td>
				<td>RM ".number_format($row['total_earning'],2)."</td>
				<td>
				<button class='edit' onclick=document.location='employee_earning_edit.php?id=".$id['id']."'>Edit</button>
				<button class='delete' onclick=document.location='employee_earning_delete.php?id=".$id['id']."'>Delete</button>
				</td>
			</tr>
			";
		}
		?>
</table>
</div>
<div class="kdpit box">
<div><input style="text-align:left" type="text" id="search2" onkeyup="search2('table2')" placeholder="Search Name"></div>
<table cellspacing=0 cellpadding=0 id="table2">
<h2 id="head" align="center">Earning List</h2><h2 align="center">KD & PIT</h2>
<button class="new" onclick="document.location='employee_earning_add.php'">New</button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<td>Work Days</th>
		<th>Earnings</th>
		<th>Amount</th>
		<th>Total Earning</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM earnings";
		$idquery = $conn->query($idsql);
		$sql = "SELECT *, employee.pc_no, employee.name, employee.section FROM earnings 
		INNER JOIN employee ON earnings.employee_id = employee.id 
		WHERE employee.section=2";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
				<td></td>
				<td>". $row['pc_no'] ."</td>
				<td>". $row['name'] ."</td>
				<td>". $row['work_days']."</td>
				<td style='text-align:left'>
					<div>Salary</div>
					<div>Allowance</div>
					<div>OT Normal</div>
					<div>Work on Rest Day</div>
					<div>Work on Public Holiday</div>
					<div style='background-color:gray'><br></div>
					<div>Basic</div>
					<div style='border-bottom:none'>ORP/Day</div>
				</td>
				<td style='text-align:left'>
					<div>RM ". number_format($row['salary'],2) ."</div>
					<div>RM ". number_format($row['allowance'],2) ."</div>
					<div>RM ". number_format($row['ot_normal'],2) ."</div>
					<div>RM ". number_format($row['work_rd'],2) ."</div>
					<div>RM ". number_format($row['work_ph'],2) ."</div>
					<div style='background-color:gray'><br></div>
					<div>RM ". number_format($row['basic'],2) ."</div>
					<div style='border-bottom:none'>RM ". number_format($row['orp'],2) ."</div>
				</td>
				<td>RM ".number_format($row['total_earning'],2)."</td>
				<td>
				<button class='edit' onclick=document.location='employee_earning_edit.php?id=".$id['id']."'>Edit</button>
				<button class='delete' onclick=document.location='employee_earning_delete.php?id=".$id['id']."'>Delete</button>
				</td>
			</tr>
			";
		}
		?>
</table>
</div>
<div class="sawmill box">
<div><input style="text-align:left" type="text" id="search3" onkeyup="search3('table3')" placeholder="Search Name"></div>
<table cellspacing=0 cellpadding=0 id="table3">
<h2 id="head" align="center">Earning List </h2><h2 align="center">Sawmill</h2>
<button class="new" onclick="document.location='employee_earning_add.php'">New</button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Work Days</th>
		<th>Earnings</th>
		<th>Amount</th>
		<th>Total Earning</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM earnings";
		$idquery = $conn->query($idsql);
		$sql = "SELECT *, employee.pc_no, employee.name, employee.section FROM earnings 
		INNER JOIN employee ON earnings.employee_id = employee.id 
		WHERE employee.section=3";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
				<td></td>
				<td>". $row['pc_no'] ."</td>
				<td>". $row['name'] ."</td>
				<td>". $row['work_days']."</td>
				<td style='text-align:left'>
					<div>Salary</div>
					<div>Allowance</div>
					<div>OT Normal</div>
					<div>Work on Rest Day</div>
					<div>Work on Public Holiday</div>
					<div style='background-color:gray'><br></div>
					<div>Basic</div>
					<div style='border-bottom:none'>ORP/Day</div>
				</td>
				<td style='text-align:left'>
					<div>RM ". number_format($row['salary'],2) ."</div>
					<div>RM ". number_format($row['allowance'],2) ."</div>
					<div>RM ". number_format($row['ot_normal'],2) ."</div>
					<div>RM ". number_format($row['work_rd'],2) ."</div>
					<div>RM ". number_format($row['work_ph'],2) ."</div>
					<div style='background-color:gray'><br></div>
					<div>RM ". number_format($row['basic'],2) ."</div>
					<div style='border-bottom:none'>RM ". number_format($row['orp'],2) ."</div>
				</td>
				<td>RM ".number_format($row['total_earning'],2)."</td>
				<td>
				<button class='edit' onclick=document.location='employee_earning_edit.php?id=".$id['id']."'>Edit</button>
				<button class='delete' onclick=document.location='employee_earning_delete.php?id=".$id['id']."'>Delete</button>
				</td>
			</tr>
			";
		}
		?>
</table>
</div>
</div>
<div class="all box">
<div><input style="text-align:left" type="text" id="search4" onkeyup="search4('table4')" placeholder="Search Name"></div>
<table cellspacing=0 cellpadding=0 id="table4">
<h2 id="head" align="center">Earning List</h2>
<button class="new" onclick="document.location='employee_earning_add.php'">New</button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Work Days</th>
		<th>Earnings</th>
		<th>Amount</th>
		<th>Total Earning</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM earnings";
		$idquery = $conn->query($idsql);
		$sql = "SELECT *, employee.pc_no, employee.name, employee.section FROM earnings 
		INNER JOIN employee ON earnings.employee_id = employee.id";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
				<td></td>
				<td>". $row['pc_no'] ."</td>
				<td>". $row['name'] ."</td>
				<td>". $row['work_days']."</td>
				<td style='text-align:left'>
					<div>Salary</div>
					<div>Allowance</div>
					<div>OT Normal</div>
					<div>Work on Rest Day</div>
					<div>Work on Public Holiday</div>
					<div style='background-color:gray'><br></div>
					<div>Basic</div>
					<div style='border-bottom:none'>ORP/Day</div>
				</td>
				<td style='text-align:left'>
					<div>RM ". number_format($row['salary'],2) ."</div>
					<div>RM ". number_format($row['allowance'],2) ."</div>
					<div>RM ". number_format($row['ot_normal'],2) ."</div>
					<div>RM ". number_format($row['work_rd'],2) ."</div>
					<div>RM ". number_format($row['work_ph'],2) ."</div>
					<div style='background-color:gray'><br></div>
					<div>RM ". number_format($row['basic'],2) ."</div>
					<div style='border-bottom:none'>RM ". number_format($row['orp'],2) ."</div>
				</td>
				<td>RM ".number_format($row['total_earning'],2)."</td>
				<td>
				<button class='edit' onclick=document.location='employee_earning_edit.php?id=".$id['id']."'>Edit</button>
				<button class='delete' onclick=document.location='employee_earning_delete.php?id=".$id['id']."'>Delete</button>
				</td>
			</tr>
			";
		}
		?>
</table>
</div>
<body>
</html>