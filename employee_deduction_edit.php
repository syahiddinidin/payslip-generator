<?php
include "db_connect.php";
$sql = "SELECT *,employee.name FROM deductions
		INNER JOIN employee ON deductions.employee_id=employee.id 
		WHERE deductions.id={$_GET['id']}";
$result = $conn->query($sql) or die ("ERROR: {$conn->error}");;
$row = $result->fetch_assoc();
?>
<!-- Edit Deductions-->
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
<h2 align="center"><?php echo $row['name'] ?></h2>
<form action="employee_deduction_edit_sql.php" method="POST">
<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
EPF (Employer): <input type="number" step=0.01 name="epf_eyer" value="<?php echo $row['epf_eyer']?>">
EPF (Employee): <input type="number" step=0.01 name="epf_eyee" value="<?php echo $row['epf_eyee']?>"><br>
SOCSO (Employer): <input type="number" step=0.01 name="socso_eyer" value="<?php echo $row['socso_eyer']?>">
SOCSO (Employee): <input type="number" step=0.01 name="socso_eyee" value="<?php echo $row['socso_eyee']?>"><br>
SOCSO EIS (Employer): <input type="number" step=0.01 name="socso_eis_eyer" value="<?php echo $row['socso_eis_eyer']?>">
SOCSO EIS (Employee): <input type="number" step=0.01 name="socso_eis_eyee" value="<?php echo $row['socso_eis_eyee']?>"><br>
PCB: <input type="number" step=0.01 name="pcb" value="<?php echo $row['pcb']?>"><br>
Canteen & Quarters Maint.: <input type="number" step=0.01 name="canteen" value="<?php echo $row['canteen']?>"><br>
Passport: <input type="number" step=0.01 name="passport" value="<?php echo $row['passport']?>"><br>
Advance: <input type="number" step=0.01 name="advance" value="<?php echo $row['advance']?>"><br>
Others: <input type="number" step=0.01 name="others" value="<?php echo $row['others']?>"><br>
<input type="submit" value="Update" class="btn">
</form>
<input type="submit" value="Cancel" class="btn cancel" onclick="goBack()">
</div>
</body>
<script>
function goBack(){
	window.history.back();
}
</script>