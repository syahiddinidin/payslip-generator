<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
	<form action="employee_new_sql.php" method="POST">
		PC No. : <input type="text" name="pc_no" required><br>
		Name : <input type="text" name="name" required><br>
		Section: <select name="section">
					<option value="1">Moulding</option>
					<option value="2">KD & PIT</option>
					<option value="3">Sawmill</option>
				 </select>
		Position : <input type="text" name="position" required><br>
		<input type="submit" value="Submit" class="btn">
	</form>
	<input type="submit" value="Cancel" class="btn cancel" onclick="document.location='index.php'">
</div>
</body>
</html>