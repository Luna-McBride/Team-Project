<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
$name = $mysqli->escape_string($_POST['username']);
$pass = $mysqli->escape_string($_POST['password']);
$result = $mysqli->query("SELECT * FROM users WHERE user='$name'");

if($result->num_rows == 0){ //user doesnt exist create account and take back to login
	echo "Welcome " . $name . "<br> You do not have an account, one will be created with the USER/PASS: ". $name. " / " . $pass; 
	$mysqli->query("INSERT INTO users(user,pass) VALUES ('$name','$pass')"); //add new user
	header('Refresh: 3; login.html');
}

else{ //user exists take them to profile page listing other profiles
	$user = $result->fetch_assoc();

	if($pass==$user['pass']){ //password_verify($pass, $user['pass'])){ //successfull login
		$_SESSION['id'] = $user['id'];
		$_SESSION['user'] = $user['user'];
		$_SESSION['pass'] = $user['pass'];
		echo "Welcome ". $name . ", successfull login, redirecting in 3 seconds.";
		header('Refresh: 3; profile.php');
	}
	else{ //wrong password back to login
		echo "You have entered the wrong password for the account under " . $name;
		header('Refresh: 3; login.html');
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--Welcome <?php echo $_POST['username']; ?><br>
	Your password is: <?php echo $_POST["password"]; ?> -->
</body>
</html>