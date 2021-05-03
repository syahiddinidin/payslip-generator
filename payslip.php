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
<table cellspacing=0 cellpadding=3 id="table">
<h2 id="head" align="center">Payslip</h2><h2 align="center">Moulding</h2>
<button class="new" onclick="document.location='payslip_add.php'">New</button>
<button class="ack" onclick="document.location='print_all.php'">Print All</button>
<button class="ack" onclick="document.location='ack_print.php'">Acknowledgement</button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Pay Day</th>
		<th>Total days</th>
		<th>Absent</th>
		<th>Work Days</th>
		<th>Total Earnings</th>
		<th>Total Deductions</th>
		<th>Net Pay</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM payslip";
		$idquery = $conn->query($idsql);
		$sql = "SELECT  *, e.pc_no, e.name, e.section, earn.work_days,
		earn.total_earning,d.total_deduction FROM payslip p 
		INNER JOIN employee e ON p.employee_id = e.id
		INNER JOIN earnings earn ON p.employee_id = earn.employee_id
		INNER JOIN deductions d on p.employee_id = d.employee_id
		WHERE e.section=1";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
			<td></td>
			<td>". $row['pc_no'] ."</td>
			<td>". $row['name'] ."</td>
			<td>". $row['payday'] ."</td>
			<td>". $row['total_days'] ."</td>
			<td>". $row['total_days'] - $row['work_days'] ."</td>
			<td>". $row['work_days']."</td>
			<td>RM ".number_format($row['total_earning'],2)."</td>
			<td>RM ".number_format($row['total_deduction'],2)."</td>
			<td>RM ".number_format($row['netpay'],2)."</td>
			<td>
			<button class='edit' onclick=document.location='payslip_print.php?id=".$id['id']."'>Print</button>
			<button class='delete' onclick=document.location='payslip_delete.php?id=".$id['id']."'>Delete</button>
			</td>
			</tr>
			";
		}
		?>
</table>
</div>
<div class="kdpit box">
<div><input style="text-align:left" type="text" id="search2" onkeyup="search2('table2')" placeholder="Search Name"></div>
<table cellspacing=0 cellpadding=3 id="table2">
<h2 id="head" align="center">Payslip</h2><h2 align="center">KD & PIT</h2>
<button class="new" onclick="document.location='payslip_add.php'">New</button>
<button class="ack" onclick="document.location='print_all.php'">Print All</button>
<button class="ack" onclick="document.location='ack_print.php'">Acknowledgement</button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Pay Day</th>
		<th>Total days</th>
		<th>Absent</th>
		<th>Work Days</th>
		<th>Total Earnings</th>
		<th>Total Deductions</th>
		<th>Net Pay</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM payslip";
		$idquery = $conn->query($idsql);
		$sql = "SELECT  *, e.pc_no, e.name, e.section, earn.work_days,
		earn.total_earning,d.total_deduction FROM payslip p 
		INNER JOIN employee e ON p.employee_id = e.id
		INNER JOIN earnings earn ON p.employee_id = earn.employee_id
		INNER JOIN deductions d on p.employee_id = d.employee_id
		WHERE e.section=2";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
			<td></td>
			<td>". $row['pc_no'] ."</td>
			<td>". $row['name'] ."</td>
			<td>". $row['payday'] ."</td>
			<td>". $row['total_days'] ."</td>
			<td>". $row['total_days'] - $row['work_days'] ."</td>
			<td>". $row['work_days']."</td>
			<td>RM ".number_format($row['total_earning'],2)."</td>
			<td>RM ".number_format($row['total_deduction'],2)."</td>
			<td>RM ".number_format($row['netpay'],2)."</td>
			<td>
			<button class='edit' onclick=document.location='payslip_print.php?id=".$id['id']."'>Print</button>
			<button class='delete' onclick=document.location='payslip_delete.php?id=".$id['id']."'>Delete</button>
			</td>
			</tr>
			";
		}
		?>
</table>
</div>
<div class="sawmill box">
<div><input style="text-align:left" type="text" id="search3" onkeyup="search3('table3')" placeholder="Search Name"></div>
<table cellspacing=0 cellpadding=3 id="table3">
<h2 id="head" align="center">Payslip</h2><h2 align="center">Sawmill</h2>
<button class="new" onclick="document.location='payslip_add.php'">New</button>
<button class="ack" onclick="document.location='print_all.php'">Print All</button>
<button class="ack" onclick="document.location='ack_print.php'">Acknowledgement</button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Pay Day</th>
		<th>Total days</th>
		<th>Absent</th>
		<th>Work Days</th>
		<th>Total Earnings</th>
		<th>Total Deductions</th>
		<th>Net Pay</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM payslip";
		$idquery = $conn->query($idsql);
		$sql = "SELECT  *, e.pc_no, e.name, e.section, earn.work_days,
		earn.total_earning,d.total_deduction FROM payslip p 
		INNER JOIN employee e ON p.employee_id = e.id
		INNER JOIN earnings earn ON p.employee_id = earn.employee_id
		INNER JOIN deductions d on p.employee_id = d.employee_id
		WHERE e.section=3";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
			<td></td>
			<td>". $row['pc_no'] ."</td>
			<td>". $row['name'] ."</td>
			<td>". $row['payday'] ."</td>
			<td>". $row['total_days'] ."</td>
			<td>". $row['total_days'] - $row['work_days'] ."</td>
			<td>". $row['work_days']."</td>
			<td>RM ".number_format($row['total_earning'],2)."</td>
			<td>RM ".number_format($row['total_deduction'],2)."</td>
			<td>RM ".number_format($row['netpay'],2)."</td>
			<td>
			<button class='edit' onclick=document.location='payslip_print.php?id=".$id['id']."'>Print</button>
			<button class='delete' onclick=document.location='payslip_delete.php?id=".$id['id']."'>Delete</button>
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
<table cellspacing=0 cellpadding=3 id="table4">
<h2 id="head" align="center">Payslip</h2>
<button class="new" onclick="document.location='payslip_add.php'">New</button>
<button class="ack" onclick="document.location='print_all.php'">Print All</button>
<button class="ack" onclick="document.location='ack_print.php'">Acknowledgement</button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Pay Day</th>
		<th>Total days</th>
		<th>Absent</th>
		<th>Work Days</th>
		<th>Total Earnings</th>
		<th>Total Deductions</th>
		<th>Net Pay</th>
		<th>Tools</th>
	</tr>
		<?php
		$idsql = "SELECT id FROM payslip";
		$idquery = $conn->query($idsql);
		$sql = "SELECT  *, e.pc_no, e.name, e.section, earn.work_days,
		earn.total_earning,d.total_deduction FROM payslip p 
		INNER JOIN employee e ON p.employee_id = e.id
		INNER JOIN earnings earn ON p.employee_id = earn.employee_id
		INNER JOIN deductions d on p.employee_id = d.employee_id";
		$result = $conn->query($sql) or die("Error: {$conn->error}"); 
		while($row = $result->fetch_assoc()){
		$id = $idquery->fetch_assoc();
		echo "
			<tr>
			<td></td>
			<td>". $row['pc_no'] ."</td>
			<td>". $row['name'] ."</td>
			<td>". $row['payday'] ."</td>
			<td>". $row['total_days'] ."</td>
			<td>". $row['total_days'] - $row['work_days'] ."</td>
			<td>". $row['work_days']."</td>
			<td>RM ".number_format($row['total_earning'],2)."</td>
			<td>RM ".number_format($row['total_deduction'],2)."</td>
			<td>RM ".number_format($row['netpay'],2)."</td>
			<td>
			<button class='edit' onclick=document.location='payslip_print.php?id=".$id['id']."'>Print</button>
			<button class='delete' onclick=document.location='payslip_delete.php?id=".$id['id']."'>Delete</button>
			</td>
			</tr>
			";
		}
		?>
</table>
</div>
</body>
</html>
