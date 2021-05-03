<?php
include "db_connect.php";

$idsql = "SELECT employee_id FROM earnings";
$idquery = $conn->query($idsql);
$idrow = $idquery->fetch_assoc();

$id = $_GET["id"];

$sql = "DELETE FROM earnings WHERE id='$id'";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=employee_earning.php?id={$idrow['employee_id']}");
}else{
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=employee_earning.php?id={$idrow['employee_id']}");
}
?>