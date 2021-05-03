<?php
include "db_connect.php";

$id = $_POST["id"];
$work_days = $_POST["work_days"];
$salary = $_POST["salary"];
$allowance = $_POST["allowance"];
$ot_normal = $_POST["ot_normal"];
$work_rd = $_POST["work_rd"];
$work_ph = $_POST["work_ph"];
$basic = $_POST["basic"];
$orp = $_POST["orp"];
$total = $salary + $allowance + $ot_normal + $work_rd + $work_ph;

$sql = "INSERT INTO earnings (employee_id, work_days, salary, allowance, ot_normal, work_rd, work_ph, basic, orp, total_earning) VALUES ('$id', '$work_days', '$salary', '$allowance', '$ot_normal', '$work_rd', '$work_ph', '$basic', '$orp', '$total')";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=employee_earning.php?id=$id");
}else{
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=employee_earning_add.php?id=$id");
}
?>