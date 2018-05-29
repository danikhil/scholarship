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
	$user=mysqli_real_escape_string($conn,$_POST['username']);	
	$pass=mysqli_real_escape_string($conn,$_POST['password']);
	$qry = "SELECT `ID`, `Email`, `Password` FROM `student_account` WHERE `Email` = $user and `Password` = $pass";
	$result = mysqli_query($conn,$qry);
	$row = mysqli_fetch_array($result,MYSQLI_BOTH);
	$active = $row['active'];
	
	$count = mysqli_num_rows($result);
	
	if($count == 1) {
         $_SESSION['login_user'] = $user;
		
		$srh = "SELECT `Rollnumber` FROM `student` WHERE `Rollnumber` = $user";
		$res = mysqli_query($conn,$srh);
		if(mysqli_num_rows($res)==1) {
			header("location: ../dashboard/student/examples/dashboard.php");
		}
         
         else {
			 header("location: fillDetails.php");
		 }
    }
	
	else {
         $error = "Your Login Name or Password is invalid";
		header('Location: ../login.php');
    }
}
else {
	echo "something wrong";
}
?>