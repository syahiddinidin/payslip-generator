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
<h2 id="head" align="center">Deduction List</h2> <h2 align="center">Moulding</h2>
<button class= "new "onclick="document.location='employee_deduction_add.php'">New </a></button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Deductions</th>
		<th>Amount</th>
		<th>Total Deduction</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM deductions";
		$idquery = $conn->query($idsql);
		$sql = "SELECT  *, employee.pc_no, employee.name, employee.section FROM deductions 
		INNER JOIN employee ON deductions.employee_id = employee.id
		WHERE employee.section=1";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
				<td></td>
				<td>". $row['pc_no'] ."</td>
				<td>". $row['name'] ."</td>
				<td style='text-align:left'>
					<div>EPF (Employer)</div>
					<div>EPF (Employee)</div>
					<div>SOCSO (Employer)</div>
					<div>SOCSO (Employee)</div>
					<div>SOCSO EIS (Employer)</div>
					<div>SOCSO EIS (Employee)</div>
					<div>PCB</div>
					<div>Canteen & Quarters Maint.</div>
					<div>Passport</div>
					<div>Advance</div>
					<div style='border-bottom:none'>Others</div>
				</td>
				<td style='text-align:left'>
					<div>RM ". number_format($row['epf_eyer'],2) ."</div>
					<div>RM ". number_format($row['epf_eyee'],2) ."</div>
					<div>RM ". number_format($row['socso_eyer'],2) ."</div>
					<div>RM ". number_format($row['socso_eyee'],2) ."</div>
					<div>RM ". number_format($row['socso_eis_eyer'],2) ."</div>
					<div>RM ". number_format($row['socso_eis_eyee'],2) ."</div>
					<div>RM ". number_format($row['pcb'],2) ."</div>
					<div>RM ". number_format($row['canteen'],2) ."</div>
					<div>RM ". number_format($row['passport'],2) ."</div>
					<div>RM ". number_format($row['advance'],2) ."</div>
					<div style='border-bottom:none'>RM ". number_format($row['others'],2) ."</div>
				</td>
				<td>RM ".number_format($row['total_deduction'],2)."</td>
				<td>
					<button class='edit' onclick=document.location='employee_deduction_edit.php?id=".$id['id']."'>Edit</button>
					<button class='delete' onclick=document.location='employee_deduction_delete.php?id=".$id['id']."'>Delete</button>
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
<h2 id="head" align="center">Deduction List </h2><h2 align="center">KD & PIT</h2>
<button class= "new "onclick="document.location='employee_deduction_add.php'">New </a></button>
	<tr>
		<th>No. </th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Deductions</th>
		<th>Amount</th>
		<th>Total Deduction</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM deductions";
		$idquery = $conn->query($idsql);
		$sql = "SELECT  *, employee.pc_no, employee.name, employee.section FROM deductions 
		INNER JOIN employee ON deductions.employee_id = employee.id
		WHERE employee.section=2";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
				<td></td>
				<td>". $row['pc_no'] ."</td>
				<td>". $row['name'] ."</td>
				<td style='text-align:left'>
					<div>EPF (Employer)</div>
					<div>EPF (Employee)</div>
					<div>SOCSO (Employer)</div>
					<div>SOCSO (Employee)</div>
					<div>SOCSO EIS (Employer)</div>
					<div>SOCSO EIS (Employee)</div>
					<div>PCB</div>
					<div>Canteen & Quarters Maint.</div>
					<div>Passport</div>
					<div>Advance</div>
					<div style='border-bottom:none'>Others</div>
				</td>
				<td style='text-align:left'>
					<div>RM ". number_format($row['epf_eyer'],2) ."</div>
					<div>RM ". number_format($row['epf_eyee'],2) ."</div>
					<div>RM ". number_format($row['socso_eyer'],2) ."</div>
					<div>RM ". number_format($row['socso_eyee'],2) ."</div>
					<div>RM ". number_format($row['socso_eis_eyer'],2) ."</div>
					<div>RM ". number_format($row['socso_eis_eyee'],2) ."</div>
					<div>RM ". number_format($row['pcb'],2) ."</div>
					<div>RM ". number_format($row['canteen'],2) ."</div>
					<div>RM ". number_format($row['passport'],2) ."</div>
					<div>RM ". number_format($row['advance'],2) ."</div>
					<div style='border-bottom:none'>RM ". number_format($row['others'],2) ."</div>
				</td>
				<td>RM ".number_format($row['total_deduction'],2)."</td>
				<td>
					<button class='edit' onclick=document.location='employee_deduction_edit.php?id=".$id['id']."'>Edit</button>
					<button class='delete' onclick=document.location='employee_deduction_delete.php?id=".$id['id']."'>Delete</button>
				</td>
			</tr>
			";
		}
		?>
</table>
</div>
<div class="sawmill box">
<div><input style="text-align:left" type="text" id="search3" onkeyup="search('table3')" placeholder="Search Name"></div>
<table cellspacing=0 cellpadding=0 id="table3">
<h2 id="head" align="center">Deduction List</h2><h2 align="center">Sawmill</h2>
<button class= "new "onclick="document.location='employee_deduction_add.php'">New </a></button>
	<tr>
		<th>No. </th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Deductions</th>
		<th>Amount</th>
		<th>Total Deduction</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM deductions";
		$idquery = $conn->query($idsql);
		$sql = "SELECT  *, employee.pc_no, employee.name, employee.section FROM deductions 
		INNER JOIN employee ON deductions.employee_id = employee.id
		WHERE employee.section=3";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
				<td></td>
				<td>". $row['pc_no'] ."</td>
				<td>". $row['name'] ."</td>
				<td style='text-align:left'>
					<div>EPF (Employer)</div>
					<div>EPF (Employee)</div>
					<div>SOCSO (Employer)</div>
					<div>SOCSO (Employee)</div>
					<div>SOCSO EIS (Employer)</div>
					<div>SOCSO EIS (Employee)</div>
					<div>PCB</div>
					<div>Canteen & Quarters Maint.</div>
					<div>Passport</div>
					<div>Advance</div>
					<div style='border-bottom:none'>Others</div>
				</td>
				<td style='text-align:left'>
					<div>RM ". number_format($row['epf_eyer'],2) ."</div>
					<div>RM ". number_format($row['epf_eyee'],2) ."</div>
					<div>RM ". number_format($row['socso_eyer'],2) ."</div>
					<div>RM ". number_format($row['socso_eyee'],2) ."</div>
					<div>RM ". number_format($row['socso_eis_eyer'],2) ."</div>
					<div>RM ". number_format($row['socso_eis_eyee'],2) ."</div>
					<div>RM ". number_format($row['pcb'],2) ."</div>
					<div>RM ". number_format($row['canteen'],2) ."</div>
					<div>RM ". number_format($row['passport'],2) ."</div>
					<div>RM ". number_format($row['advance'],2) ."</div>
					<div style='border-bottom:none'>RM ". number_format($row['others'],2) ."</div>
				</td>
				<td>RM ".number_format($row['total_deduction'],2)."</td>
				<td>
					<button class='edit' onclick=document.location='employee_deduction_edit.php?id=".$id['id']."'>Edit</button>
					<button class='delete' onclick=document.location='employee_deduction_delete.php?id=".$id['id']."'>Delete</button>
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
<h2 id="head" align="center">Deduction List</h2>
<button class= "new "onclick="document.location='employee_deduction_add.php'">New </a></button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Deductions</th>
		<th>Amount</th>
		<th>Total Deduction</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM deductions";
		$idquery = $conn->query($idsql);
		$sql = "SELECT  *, employee.pc_no, employee.name, employee.section FROM deductions 
		INNER JOIN employee ON deductions.employee_id = employee.id";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
				<td></td>
				<td>". $row['pc_no'] ."</td>
				<td>". $row['name'] ."</td>
				<td style='text-align:left'>
					<div>EPF (Employer)</div>
					<div>EPF (Employee)</div>
					<div>SOCSO (Employer)</div>
					<div>SOCSO (Employee)</div>
					<div>SOCSO EIS (Employer)</div>
					<div>SOCSO EIS (Employee)</div>
					<div>PCB</div>
					<div>Canteen & Quarters Maint.</div>
					<div>Passport</div>
					<div>Advance</div>
					<div style='border-bottom:none'>Others</div>
				</td>
				<td style='text-align:left'>
					<div>RM ". number_format($row['epf_eyer'],2) ."</div>
					<div>RM ". number_format($row['epf_eyee'],2) ."</div>
					<div>RM ". number_format($row['socso_eyer'],2) ."</div>
					<div>RM ". number_format($row['socso_eyee'],2) ."</div>
					<div>RM ". number_format($row['socso_eis_eyer'],2) ."</div>
					<div>RM ". number_format($row['socso_eis_eyee'],2) ."</div>
					<div>RM ". number_format($row['pcb'],2) ."</div>
					<div>RM ". number_format($row['canteen'],2) ."</div>
					<div>RM ". number_format($row['passport'],2) ."</div>
					<div>RM ". number_format($row['advance'],2) ."</div>
					<div style='border-bottom:none'>RM ". number_format($row['others'],2) ."</div>
				</td>
				<td>RM ".number_format($row['total_deduction'],2)."</td>
				<td>
					<button class='edit' onclick=document.location='employee_deduction_edit.php?id=".$id['id']."'>Edit</button>
					<button class='delete' onclick=document.location='employee_deduction_delete.php?id=".$id['id']."'>Delete</button>
				</td>
			</tr>
			";
		}
		?>
</table>
</div>
</body>
</html>