<?php
include("database.php");
include("reverse_session.php");

if (isset($_POST["username"])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$encryptpass = md5($pass);
	$sql ="SELECT * FROM users WHERE username='".$user."' AND password='".$encryptpass."'LIMIT 1";
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result)==1) {
		$_SESSION['login_user'] = $user;
		echo "You had logged in!!!";
		header('Location:'. "testing.php");
		exit();
	}else {
		echo "You had entered incorrect password or username";
	}
}
?>

<html>
<head>
<title>Log In</title>
</head>
<body>
<center><h1 style="font-family:Arial;">Log In</h1></center>
<form method="post" action="index.php">
Username:<input type="text" name="username"></br>
Password:<input type="password" name="password"></br>
<input type="submit" name="submit" value="Log In">
</form>
<p>Register <a href=\register.php\>click here</a></p>
</body>
</html>