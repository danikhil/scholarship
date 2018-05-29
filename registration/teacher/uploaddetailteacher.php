<?php

/*
Filename: uploaddetailteacher.php
Purpose: Establish connection to MySQL database and upload detail.
Author: Anushka Singh Mayank Mishra Naman Agrawal Nikhil Kushwaha
Last edited: 26/04/18
*/

$server = "localhost";
$user = "root";
$pass = "";
$db = "scholarshipdb";

//Establish connection to our database
	$conn = mysqli_connect($server, $user, $pass, $db);

if(!$conn) {
	die("Could not connect to data base:".$conn->connect_error);
}

$ins_query;
if( isset($_POST['submit'])) {
	
	$name= mysqli_real_escape_string($conn,$_POST['inputName']);
	$email= mysqli_real_escape_string($conn,$_POST['inputEmail']);
	$mobile= mysqli_real_escape_string($conn,$_POST['inputMobile']);
	$desig= mysqli_real_escape_string($conn,$_POST['inputDesig']);
	$dept= mysqli_real_escape_string($conn,$_POST['inputDept']);
	
	$ins_query="INSERT INTO `teacher`(`Name`, `Email`,`Mobile No`, `Designation`, `Department`) VALUES ('$name', '$email', '$mobile', '$desig', '$dept')";
	
	if(mysqli_query($conn, $ins_query)) {
	?>
	<script>
		window.location = "../success.php"
	</script>
	<?php
	
	}

	else {
    	die("Error in inserting records:".mysql_error);
	}

	mysqli_close($conn);
	
	}
?>