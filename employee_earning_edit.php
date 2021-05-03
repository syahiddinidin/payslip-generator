<?php
include "db_connect.php";
$sql = "SELECT *,employee.name FROM earnings
		INNER JOIN employee ON earnings.employee_id=employee.id 
		WHERE earnings.id={$_GET['id']}";
$result = $conn->query($sql) or die ("ERROR: {$conn->error}");;
$row = $result->fetch_assoc();
?>
<!-- Edit Earnings-->
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
<h2 align="center"><?php echo $row['name'] ?></h2>
<form action="employee_earning_edit_sql.php" method="POST">
<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
Work Days: <input type="number" name="work_days" value="<?php echo $row['work_days']?>">
Salary: <input type="number" step=0.01 name="salary" value="<?php echo $row['salary']?>"><br>
Allowance: <input type="number" step=0.01 name="allowance" value="<?php echo $row['allowance']?>"><br>
OT Normal: <input type="number" step=0.01 name="ot_normal" value="<?php echo $row['ot_normal']?>"><br>
Work on Rest Day: <input type="number" step=0.01 name="work_rd" value="<?php echo $row['work_rd']?>"><br>
Work on Public Holiday: <input type="number" step=0.01 name="work_ph" value="<?php echo $row['work_ph']?>"><br>
Basic: <input type="number" step=0.01 name="basic" value="<?php echo $row['basic']?>"><br>
ORP/Day: <input type="number" step=0.01 name="orp" value="<?php echo $row['orp']?>"><br>
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