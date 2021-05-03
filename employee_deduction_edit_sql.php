<?php
include "db_connect.php";

$idsql = "SELECT employee_id FROM deductions";
$idquery = $conn->query($idsql);
$idrow = $idquery->fetch_assoc();

$id = $_POST["id"];
$epf_eyer = $_POST["epf_eyer"];
$epf_eyee = $_POST["epf_eyee"];
$socso_eyer = $_POST["socso_eyer"];
$socso_eyee = $_POST["socso_eyee"];
$socso_eis_eyer = $_POST["socso_eis_eyer"];
$socso_eis_eyee = $_POST["socso_eis_eyee"];
$pcb = $_POST["pcb"];
$canteen = $_POST["canteen"];
$passport = $_POST["passport"];
$advance = $_POST["advance"];
$others = $_POST["others"];
$total = $epf_eyee + $socso_eyee + $socso_eis_eyee + $pcb + $canteen + $passport + $advance + $others;

$sql = "UPDATE deductions SET epf_eyer = '$epf_eyer', epf_eyee = '$epf_eyee', socso_eyer = '$socso_eyer', socso_eyee = '$socso_eyee', socso_eis_eyer = '$socso_eis_eyer', socso_eis_eyee = '$socso_eis_eyee', pcb = '$pcb', canteen = '$canteen', passport = '$passport', advance = '$advance', others = '$others', total_deduction = '$total' WHERE id = '$id'";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=employee_deduction.php?id={$idrow['employee_id']}");
}else{
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=employee_deduction_edit.php?id={$idrow['employee_id']}");
}
?>