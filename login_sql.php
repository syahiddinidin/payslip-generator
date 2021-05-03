<?php
session_start();
include "db_connect.php";
$username = $_POST['username'];
$password = $_POST['pass'];

$sql = "SELECT * from user";
$result = $conn->query($sql) or die ("ERROR : {$conn->error}");
$row = $result->fetch_assoc();

if($password === $row['password']){
	$_SESSION['id'] = $row['id'];
	header('location: index.php');
}else{
	echo "Username or password is wrong! Please try again";
}	
?>
