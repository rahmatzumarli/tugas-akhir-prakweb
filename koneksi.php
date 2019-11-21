<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "tugasakhirweb";

$conn = new mysqli ($hostname,$username,$password,$db);

if ($conn->connect_error) {
	die("Failed to connect!".$conn->connect_error);
}else{
	echo "Successfully connected!";
}