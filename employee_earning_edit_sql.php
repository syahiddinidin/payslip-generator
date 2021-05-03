<?php
include "db_connect.php";

$idsql = "SELECT employee_id FROM earnings";
$idquery = $conn->query($idsql);
$idrow = $idquery->fetch_assoc();

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

$sql = "UPDATE earnings SET work_days= '$work_days', salary = '$salary', allowance = '$allowance', ot_normal = '$ot_normal', work_rd = '$work_rd', work_ph = '$work_ph', basic = '$basic', orp = '$orp', total_earning = '$total' WHERE id='$id'";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=employee_earning.php?id={$idrow['employee_id']}");
}else{
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=employee_earning_edit.php?id={$idrow['employee_id']}");
}
?>