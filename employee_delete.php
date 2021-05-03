<?php
include "db_connect.php";

$id = $_GET["id"];

$sql = "DELETE FROM employee WHERE id='$id'";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=index.php");
}else{
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=index.php");
}
?>

