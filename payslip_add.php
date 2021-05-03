<head>
<link rel="stylesheet" href="style.css">
</head>
<div class="form-container">
<form action="payslip_add_sql.php" method="POST">
Total days for the month: <input type="number" step=0.01 name="total_days"><br>
Pay Day: <input type="date" name="payday"><br>
<input type="submit" value="Add" class="btn">
</form>
<input type="submit" value="Cancel" class="btn cancel" onclick="goBack()">
</div>
<script>
function goBack(){
	window.history.back();
}
</script>