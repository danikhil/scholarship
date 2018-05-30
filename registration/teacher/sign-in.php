<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$db = "scholarshipdb";

$conn = mysqli_connect($server, $user, $pass, $db);

if(!$conn) {
	die("Could not connect to data base:".$conn->connect_error);
}

if( isset($_POST['submit'])) {
	$username=mysqli_real_escape_string($conn,$_POST['username']);	
	$pass=mysqli_real_escape_string($conn,$_POST['password']);
	$qry = "SELECT * FROM `teacher_account` WHERE `Email` = '$username' and `Password` = '$pass'";
	$result = mysqli_query($conn,$qry);
	$row = mysqli_fetch_array($result,MYSQLI_BOTH);
	$active = $row['active'];
	
	$count = mysqli_num_rows($result);
	
	if($count == 1) {
         $_SESSION['login_user'] = $username;
		header("location: fillDetails.php");
    }
	
	else {
		header('Location: ../login.php');
    }
}

else {
	echo "something wrong";
}
?>