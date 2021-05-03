<?php
include "db_connect.php";
?>
<!-- Add Deductions-->
<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="form-container">
<form action="employee_deduction_add_sql.php" method="POST">
Name: 	<select name="id">
			<?php 
				$sql = "SELECT * FROM employee WHERE id
				NOT IN (SELECT employee_id FROM deductions)";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()){
					echo '
						<option value='.$row['id'].'>'.$row['name'].'</option>
					';
				}
			?>
		</select><br>
EPF (Employer): <input type="number" step=0.01 name="epf_eyer">
EPF (Employee): <input type="number" step=0.01 name="epf_eyee"><br>
SOCSO (Employer): <input type="number" step=0.01 name="socso_eyer">
SOCSO (Employee): <input type="number" step=0.01 name="socso_eyee"><br>
SOCSO EIS (Employer): <input type="number" step=0.01 name="socso_eis_eyer">
SOCSO EIS (Employee): <input type="number" step=0.01 name="socso_eis_eyee"><br>
PCB: <input type="number" step=0.01 name="pcb"><br>
Canteen & Quarters Maint.: <input type="number" step=0.01 name="canteen"><br>
Passport: <input type="number" step=0.01 name="passport"><br>
Advance: <input type="number" step=0.01 name="advance"><br>
Others: <input type="number" step=0.01 name="others"><br>
<input type="submit" value="Add" class="btn">
</form>
<input type="submit" value="Cancel" class="btn cancel" onclick="goBack()">
</div>
<script>
function goBack(){
	window.history.back();
}
</script>