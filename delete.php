<?php
	require 'db.php';
	session_start();
	$mysqli->query("DELETE FROM users WHERE id = '". $_SESSION['id']. "' ");
	echo "Deleting " . $_SESSION['user'] , " from the table <br>Redirecting to the login page";
	header("Refresh: 3; login.html");
?>