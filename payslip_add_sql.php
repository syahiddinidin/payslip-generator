<?php
include "db_connect.php";

$del = "TRUNCATE TABLE payslip";
$delquery = $conn->query($del);

$netsql = 	"SELECT employee.id, earnings.total_earning, deductions.total_deduction FROM employee
			INNER JOIN earnings ON employee.id = earnings.employee_id
			INNER JOIN deductions ON employee.id = deductions.employee_id";
$netresult = $conn->query($netsql) or die ("Net Error: {$conn->error}");
while($netrow = $netresult->fetch_assoc()){
$id = $netrow['id'];
$netpay = $netrow['total_earning'] - $netrow['total_deduction'];
$total_days = $_POST["total_days"];
$payday = $_POST["payday"];

$sql = "INSERT INTO payslip (employee_id, total_days, netpay, payday) VALUES ('$id', '$total_days', '$netpay', '$payday')";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=payslip.php");
}else{
	header("refresh: 0.1; url=payslip_add.php");
}
}
?>