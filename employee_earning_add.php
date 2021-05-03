<?php
include "db_connect.php";
?>
<!-- Add Earnings-->
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
<form action="employee_earning_add_sql.php" method="POST">
Name: 	<select name="id">
			<?php 
				$sql = "SELECT * FROM employee WHERE id 
				NOT IN (SELECT employee_id FROM earnings)";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()){
					echo '
						<option value='.$row['id'].'>'.$row['name'].'</option>
					';
				}
			?>
		</select><br>
Work Days: <input type="number" name="work_days"><br>
Salary: <input type="number" step=0.01 name="salary"><br>
Allowance: <input type="number" step=0.01 name="allowance"><br>
OT Normal: <input type="number" step=0.01 name="ot_normal"><br>
Work on Rest Day: <input type="number" step=0.01 name="work_rd"><br>
Work on Public Holiday: <input type="number" step=0.01 name="work_ph"><br>
Basic: <input type="number" step=0.01 name="basic"><br>
ORP/Day: <input type="number" step=0.01 name="orp"><br>
<input type="submit" value="Add" class="btn">
</form>
<input type="submit" value="Cancel" class="btn cancel" onclick="goBack()">
<body>
</div>
<script>
function goBack(){
	window.history.back();
}
</script>