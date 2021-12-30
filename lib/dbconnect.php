<?php

$dbhost='localhost';
$dbname = 'test_project_db';
$port = 3333;
$sock = '/home/student/it/2014/it144343/mysql/run/mysql.sock';
require_once "info.php";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname,$port,$sock);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . 
    $mysqli->connect_errno . ") " . $mysqli->connect_error;
}	



if(!$mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$port,$sock)){
	
	
	die("failed to connect!");
}

	?>
