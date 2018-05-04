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
	
	$name= $_POST['inputName'];
	$email= $_POST['inputEmail'];
	$mobile= $_POST['inputMobile'];
	$desig= $_POST['inputDesig'];
	$dept= $_POST['inputDept'];
	
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