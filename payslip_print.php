<!DOCTYPE html>
<html>
<head>
<?php
	include 'sessions.php';
	include 'db_connect.php';
?>
<link rel="stylesheet" href="printcss.css">
</head>
<body>
<div>
	<?php
		$sql = "SELECT  *, e.pc_no, e.name, e.department,
			earn.*,d.* FROM payslip p 
			INNER JOIN employee e ON p.employee_id = e.id
			INNER JOIN earnings earn ON p.employee_id = earn.employee_id
			INNER JOIN deductions d on p.employee_id = d.employee_id
			WHERE p.id=".$_GET['id']."";

		$query = $conn->query($sql) or die ("ERROR: {$conn->error}");
		
		if ($query->num_rows> 0){
		while($row = $query->fetch_assoc()){
			echo "
			<table cellspacing='0' cellpadding='3'>
			<tr>
				<td class='left' colspan='3'>
				Name: <b>".$row['name']. "</b> <br> 
				PC No.: <b>".$row['pc_no']."</b> 
				</td>
				<td class='right'colspan='3'>
				Position: <b>".$row['department']."</b><br>
				Pay Day: <b>".$row['payday']."</b>
				</td>
			</tr>
			<tr>
				<th align='center' colspan='2'><b>EARNINGS</b></th>
				<th align='center'>Amount (RM)</th>
				<th align='center'><b>DEDUCTION</b></th>
				<th align='center'>Employer (RM)</th>
				<th align='center'>Employee (RM)</th>
			</tr>	
			<tr> 
				<td colspan='2'>SALARY </td>
				<td align='right'><b>".number_format($row['salary'], 2)."</b></td>
				<td align='left'>EPF </td>
				<td align='right'><b> ".number_format($row['epf_eyer'], 2)."</b></td>
				<td align='right'><b> ".number_format($row['epf_eyee'], 2)."</b></td>					
			</tr>
			<tr> 
				<td colspan='2'>ALLOWANCE </td>
				<td align='right'><b> ".number_format($row['allowance'], 2)."</b></td>
				<td align='left'>SOCSO </td>
				<td align='right'><b> ".number_format($row['socso_eyer'], 2)."</b></td>
				<td align='right'><b> ".number_format($row['socso_eyee'], 2)."</b></td>					
			</tr>
			<tr> 
				<td align='left'>OT NORMAL </td>
				<td></td>
				<td align='right'><b> ".number_format($row['ot_normal'], 2)."</b></td>
				<td align='left'>SOCSO EIS </td>
				<td align='right'><b> ".number_format($row['socso_eis_eyer'], 2)."</b></td>
				<td align='right'><b> ".number_format($row['socso_eis_eyee'], 2)."</b></td>					
			</tr>
			<tr> 
				<td>WORK ON REST DAY </td>
				<td></td>
				<td align='right'><b> ".number_format($row['work_rd'], 2)."</b></td>
				<td align='left'>PCB </td>
				<td rowspan='5' style='background-color: #dddddd' ></td>
				<td align='right'><b> ".number_format($row['pcb'], 2)."</b></td>					
			</tr>
			<tr> 
				<td align='left'>WORK ON REST PH </td>
				<td></td>
				<td align='right'><b> ".number_format($row['work_ph'], 2)."</b></td>
				<td align='left'>CANTEEN & QUARTER MAINT. </td>
				<td align='right'><b> ".number_format($row['canteen'], 2)."</b></td>					
			</tr>
			<tr> 
				<td colspan='3'></td>
				<td align='left'>PASSPORT</td>
				<td align='right'><b> ".number_format($row['passport'], 2)."</b></td>					
			</tr>
			<tr> 
				<td>Basic: </td>
				<td align='right'><b>RM ".number_format($row['basic'], 2)."</b></td>
				<td></td>
				<td align='left'>ADVANCE/ REPAYMENT</td>
				<td align='right'><b> ".number_format($row['advance'], 2)."</b></td>					
			</tr>
			<tr>
				<td>ORP/Day: </td>
				<td align='right'><b>RM ".number_format($row['orp'], 2)."</b></td>
				<td></td>
				<td align='left'>OTHERS</td>
				<td align='right'><b> ".number_format($row['others'], 2)."</b></td>					
				
			</tr>
			<tr> 
				<td align='right' colspan='2'>TOTAL EARNINGS </td>
				<td align='right'><b> ".number_format($row['total_earning'], 2)."</b></td>
				<td align='right' colspan='2'>TOTAL DEDUCTION: </td>
				<td align='right'><b> ".number_format($row['total_deduction'], 2)."</b></td>
			</tr>
			<tr>
				<td align='right' colspan='5'>NET PAY</td>
				<td align='right'><b>RM ".number_format($row['netpay'], 2)."</b></td>
			</tr>
			</table>
			
			<p>Total days for the month :	".number_format($row['total_days'],2)."<br>
			Absent:	".number_format(($row['total_days']-$row['work_days']),2)."<br>
			Days payable: ".number_format($row['work_days'],2)."</p>
		";
		}
	}else{
		echo "DATA NOT FOUND";
	}
	?>
</div>
<br>
<input id="print" type="button" value="Print" onclick="window.print()"/>
<input id="print" type="button" class="back" value="Back" onclick="window.history.back()"/>
</body>
</html>
