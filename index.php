<?php 
include "db_connect.php";
include "header.php";
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="NWP_Logo.jpg">
<title>Payslip Generator</title>
</head>
<body>
<div id="excel">
<div class="moulding box" id="print">
<div><input style="text-align:left" type="text" id="search" onkeyup="search('table')" placeholder="Search Name"></div>
<!-- Employee List -->
<table cellspacing='0' cellpadding='3' id="table">
<h2 id="head" align='center'>Employee List</h2><h2 align="center">Moulding<h2>
<button class="new" onclick="document.location='employee_new.php'">New</button>
	<tr>
		<th>No. </th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Position</th>
		<th>Tools</th>
	</tr>
		<?php
		$sql = "SELECT * FROM employee WHERE section=1 ";
		$result = $conn->query($sql); 
		while($row = $result->fetch_assoc()){
		echo "
			<tr>
			<td></td>
			<td>". $row['pc_no'] ."</td>
			<td>". $row['name'] ."</td>
			<td>". $row['department'] ."</td>
			<td>
			<button class='edit' onclick=document.location='employee_edit.php?id={$row['id']}'>Edit</button>
			<button class='delete' onclick=document.location='employee_delete.php?id={$row['id']}'>Delete</a>
			</td>
			";
		}
		?>
		
		</tr>
</table>
</div>
<div class="kdpit box" id="print">
<div><input style="text-align:left" type="text" id="search2" onkeyup="search2()" placeholder="Search Name"></div>
<!-- Employee List -->
<table cellspacing='0' cellpadding='3' id="table2">
<h2 id="head" align='center'>Employee List</h2><h2 align="center">KD & PIT</h2>
<button class="new" onclick="document.location='employee_new.php'">New</button>
	<tr>
		<th>No. </th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Position</th>
		<th>Tools</th>
	</tr>
		<?php
		$sql = "SELECT * FROM employee WHERE section=2";
		$result = $conn->query($sql); 
		while($row = $result->fetch_assoc()){
		echo "
			<tr>
			<td></td>
			<td>". $row['pc_no'] ."</td>
			<td>". $row['name'] ."</td>
			<td>". $row['department'] ."</td>
			<td>
			<button class='edit' onclick=document.location='employee_edit.php?id={$row['id']}'>Edit</button>
			<button class='delete' onclick=document.location='employee_delete.php?id={$row['id']}'>Delete</a>
			</td>
			";
		}
		?>
		
		</tr>
</table>
</div>
<div class="sawmill box" id="print">
<div><input style="text-align:left" type="text" id="search3" onkeyup="search3()" placeholder="Search Name"></div>
<!-- Employee List -->
<table cellspacing='0' cellpadding='3' id="table3">
<h2 id="head" align='center'>Employee List </h2><h2 align="center">Sawmill</h2>
<button class="new" onclick="document.location='employee_new.php'">New</button>
	<tr>
		<th>No.</th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Position</th>
		<th>Tools</th>
	</tr>
		<?php
		$sql = "SELECT * FROM employee WHERE section=3";
		$result = $conn->query($sql); 
		while($row = $result->fetch_assoc()){
		echo "
			<tr>
			<td></td>
			<td>". $row['pc_no'] ."</td>
			<td>". $row['name'] ."</td>
			<td>". $row['department'] ."</td>
			<td>
			<button class='edit' onclick=document.location='employee_edit.php?id={$row['id']}'>Edit</button>
			<button class='delete' onclick=document.location='employee_delete.php?id={$row['id']}'>Delete</a>
			</td>
			";
		}
		?>
		
		</tr>
</table>
</div>
</div>
<div class="all box" id="print">
<div><input style="text-align:left" type="text" id="search4" onkeyup="search4('table4')" placeholder="Search Name"></div>
<!-- Employee List -->
<table cellspacing='0' cellpadding='3' id="table4">
<h2 id="head" align='center'>Employee List</h2>
<button class="new" onclick="document.location='employee_new.php'">New</button>
	<tr>
		<th>No. </th>
		<th>PC No.</th>
		<th>Name</th>
		<th>Position</th>
		<th>Tools</th>
	</tr>
		<?php
		$sql = "SELECT * FROM employee";
		$result = $conn->query($sql); 
		while($row = $result->fetch_assoc()){
		echo "
			<tr>
			<td></td>
			<td>". $row['pc_no'] ."</td>
			<td>". $row['name'] ."</td>
			<td>". $row['department'] ."</td>
			<td>
			<button class='edit' onclick=document.location='employee_edit.php?id={$row['id']}'>Edit</button>
			<button class='delete' onclick=document.location='employee_delete.php?id={$row['id']}'>Delete</a>
			</td>
			";
		}
		?>
		
		</tr>
</table>
</div>
</body>
</html>