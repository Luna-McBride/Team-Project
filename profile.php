<?php
require 'db.php';
session_start();
$profiles = $mysqli->query("SELECT id, user, pass FROM users ORDER BY id");
if($profiles->num_rows > 0){
	while($row = $profiles->fetch_assoc() ) {
		echo "id: " . $row['id'] . " - Username: " . $row['user'] . " - Password: " . $row['pass'] . "<br>";
	}

}else{
	echo "0 results";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="delete.php" method="post">

		<input type="submit" name="DELETE MY ACCOUNT" value="Delete My Account">
	</form>

</body>
</html>

