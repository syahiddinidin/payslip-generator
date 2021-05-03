<?php
include "db_connect.php";

$id = $_POST["id"];
$pc_no = $_POST["pc_no"];
$name = $_POST["name"];
$position = $_POST["position"];

$sql = "UPDATE employee set pc_no='$pc_no', name='$name', department='$position' WHERE id='$id'";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=index.php");
}else{
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=employee_edit.php");
}
?>

