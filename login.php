<html>
<head>
<style>
body{
	background-color:white;
	padding:10px;
	text-align:center;
	height:auto;
	width:auto;
	background-position: bottom;
	background-repeat: no-repeat;
	background-size:50%;
}
{box-sizing: border-box;}
.login{
	max-width: 300px;
	margin:auto;
	padding: 10px;
	background-color: white;
	border: 3px solid #f1f1f1;
}

.login input[type=text],
.login input[type=password]{
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}
.login input[type=text]:focus,
.login input[type=password]:focus{
	background-color: #ddd;
	outline: none;
}
.login .btn{
	background-color: #4CAF50;
	color: white;
	padding: 16px 20px;
	border: none;
	cursor: pointer;
	width:100%;
	margin-top:10px;
	margin-bottom: 10px;
	opacity: 0.8;
}
.login .btn:hover{
	opacity:1;
}
</style>
</head>
<body>
<div class="login">
<h1>Login</h1>
<form action="login_sql.php" method="POST">
Username: <input type="text" name="username" pattern="[a-zA-Z0-9]+" required>
Password: <input type="password" name="pass" required>
<input type="submit" value="Login" class="btn">
</form>
</div>
</body>
</html>