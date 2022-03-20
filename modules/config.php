<?php
	$local = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'webbanhang';
	$conn = mysqli_connect($local, $username, $password, $database) or die('No connected');
	mysqli_select_db($conn, $database);
?>