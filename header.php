<?php
include "sessions.php";
include "db_connect.php";
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
.header{
	background-color:white;
	padding:10px;
	text-align:center;
	height:100%;
	background-position: left;
	background-repeat: no-repeat;
	background-size:25%;
}
.header h1{
	font-size:30px;
}
.header h2{
	font-family:Arial;
}
.logout{
	position:absolute;
	top:8px;
	right:8px;
	width:100px;
	height:30px;
	color: white;
	border:ridged;
	border-radius: 5px;
	cursor:pointer;
	background-color:red;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a,#search, #search2, #search3, #search4 {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
#search, #search2, #search3, #search4{
	margin-top:10px;
	width:250px;
	position:absolute;
	top:140px;
	right:8px;
	color:black;
}
.export input[type=button]{
	width:125px;
	height:30px;
	color: white;
	margin:auto;
	margin-bottom:3px;
	border:ridged;
	cursor:pointer;
	background-color:#00b300;
}
select{
	width: 250px;;
	padding: 12px 20px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}
</style>
</head>
<body>
<button class="logout" onclick="document.location='logout.php'">LOGOUT</button>
<div class="header">
<h2>Payslip Generator</h2>
</div>
<div class="topnav">
<a href="index.php">Employee</a>
<a href="employee_earning.php">Earnings</a>
<a href="employee_deduction.php">Deductions</a>
<a href="payslip.php">Payslip</a>
</div>
<div class="export">
<input type="button" onclick="exportTableToExcel('excel', '<?php echo date("d/m/Y")?>')" value="Export to Excel"></input>
</div>
<div>
	<select>
		<option value="all">Show All</option>
		<option value="moulding">Moulding</option>
		<option value="kdpit">KD & PIT</option>
		<option value="sawmill">Sawmill</option>
	</select>
</div>
</body>
</html>
<script>
//Search
function search(){
	var input, filter, table, tr, td, i, txtvalue;
	input = document.getElementById("search");
	filter = input.value.toUpperCase();
	table = document.getElementById("table");
	tr = table.getElementsByTagName("tr");
	
	for (i = 0; i < tr.length; i++){
		td = tr[i].getElementsByTagName("td")[2];
		if(td){
			txtvalue = td.textContent || td.innerText;
			if (txtvalue.toUpperCase().indexOf(filter) > -1){
				tr[i].style.display = "";
			} else{
				tr[i].style.display = "none";
			}
		}
	}
}
function search2(){
	var input, filter, table, tr, td, i, txtvalue;
	input = document.getElementById("search2");
	filter = input.value.toUpperCase();
	table = document.getElementById("table2");
	tr = table.getElementsByTagName("tr");
	
	for (i = 0; i < tr.length; i++){
		td = tr[i].getElementsByTagName("td")[2];
		if(td){
			txtvalue = td.textContent || td.innerText;
			if (txtvalue.toUpperCase().indexOf(filter) > -1){
				tr[i].style.display = "";
			} else{
				tr[i].style.display = "none";
			}
		}
	}
}
function search3(){
	var input, filter, table, tr, td, i, txtvalue;
	input = document.getElementById("search3");
	filter = input.value.toUpperCase();
	table = document.getElementById("table3");
	tr = table.getElementsByTagName("tr");
	
	for (i = 0; i < tr.length; i++){
		td = tr[i].getElementsByTagName("td")[2];
		if(td){
			txtvalue = td.textContent || td.innerText;
			if (txtvalue.toUpperCase().indexOf(filter) > -1){
				tr[i].style.display = "";
			} else{
				tr[i].style.display = "none";
			}
		}
	}
}
function search4(){
	var input, filter, table, tr, td, i, txtvalue;
	input = document.getElementById("search4");
	filter = input.value.toUpperCase();
	table = document.getElementById("table4");
	tr = table.getElementsByTagName("tr");
	
	for (i = 0; i < tr.length; i++){
		td = tr[i].getElementsByTagName("td")[2];
		if(td){
			txtvalue = td.textContent || td.innerText;
			if (txtvalue.toUpperCase().indexOf(filter) > -1){
				tr[i].style.display = "";
			} else{
				tr[i].style.display = "none";
			}
		}
	}
}
//Export To Excel
function exportTableToExcel(tableID, filename=''){
	var downloadLink;
	var dataType = 'application/vnd.ms-excel';
	var tableSelect = document.getElementById(tableID);
	var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
	var getTitle = document.getElementById('head').innerHTML;
	
	filename = filename?getTitle+' ('+filename+').xls':'excel_data.xls';
	
	downloadLink = document.createElement("a");
	
	if(navigator.msSaveorOpenBlob){
		var blob = new Blob(['\ufeff', tableHTML],{
			type: dataType
		});
		navigator.msSaveorOpenBlob(blob, filename);
	}else{
		downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
		downloadLink.download = filename;
		downloadLink.click();
	}
}

$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>