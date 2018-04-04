<?php
/* Database connection settings */
$host = 'localhost';
$user = 'admin_javlen';
$pass = 'csci3308';
$db = 'admin_db';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

?>