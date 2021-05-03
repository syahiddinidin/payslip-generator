<?php
include "db_connect.php";

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

$sql = "INSERT INTO deductions (employee_id, epf_eyer, epf_eyee, socso_eyer, socso_eyee, socso_eis_eyer, socso_eis_eyee, pcb, canteen, passport, advance, others, total_deduction) VALUES ('$id', '$epf_eyer', '$epf_eyee', '$socso_eyer', '$socso_eyee', '$socso_eis_eyer', '$socso_eis_eyee', '$pcb', '$canteen', '$passport', '$advance', '$others', '$total')";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=employee_deduction.php?id=$id");
}else{
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=employee_deduction_add.php?id=$id");
}
?>