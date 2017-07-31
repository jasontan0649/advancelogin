<?php
$host = "localhost";
$rootsql = "root";
$passsql = "";
$db = "test";

$con = mysqli_connect($host, $rootsql, $passsql, $db);

session_start();
$url = "http://localhost";

if(empty($_SESSION['login_user']))
{
	$_SESSION['login_user'] = "No data receieved";
}

$user_check = $_SESSION['login_user'];
$sql ="SELECT * FROM users WHERE username='".$user_check."'";
$ses_sql = mysqli_query($con, $sql);

if (mysqli_num_rows($ses_sql)==1) {}
else{
	header('Location:'. $url);
}
?>
