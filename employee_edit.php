<?php
include "db_connect.php";

$id = $_GET['id'];

$sql = "SELECT * from employee WHERE id=$id";
$query = $conn->query($sql) or die ("ERROR : {$conn->error}");
$row = $query->fetch_assoc();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
<form action="employee_edit_sql.php" method="POST">
<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
PC No. : <input type="text" name="pc_no" value="<?php echo $row['pc_no']?>"><br>
Name : <input type="text" name="name" value="<?php echo $row['name']?>"><br>
Position : <input type="text" name="position" value="<?php echo $row['department']?>"><br>
<input type="submit" value="Submit" class="btn">
</form>
<input type="submit" value="Cancel" class="btn cancel" onclick="document.location='index.php'">
</div>
</body>
</html>