<?php
include "db_connect.php";

$pc_no = $_POST["pc_no"];
$name = $_POST["name"];
$section = $_POST["section"];
$position = $_POST["position"];

$sql = "INSERT INTO employee (pc_no,name,section,department) VALUES ('$pc_no','$name','$section','$position')";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=index.php");
}else{
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=employee_new.php");
}
?>

