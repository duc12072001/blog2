<?php 
	session_start();
	$dbconnection = mysqli_connect('remotemysql.com', 'tGlXeaiQC0', 'etC2E1WJct', 'tGlXeaiQC0');
	mysqli_set_charset($dbconnection, "utf8");
	if (!$dbconnection)
	{
		die("Could not connect: " . mysqli_connect_error());
	}
 ?>
