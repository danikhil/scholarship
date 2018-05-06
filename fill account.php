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

$ins_query="";


function RandomString() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 4; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$def="16052130";

for($i=1; $i<60; $i++)
{
	$password="";
    if($i<10)
    $email=$def.'0'.(string)$i;
	else
		$email=$def.(string)$i;
	$ran=RandomString();
    $password.=$email;
	mkdir('registration/student/'.$email);
    $ins_query.="INSERT INTO `student_account`(`Email`, `Password`) VALUES ($email, $password);";
}
	
	if(mysqli_multi_query($conn, $ins_query)) {
	
	}

	else {
    	die("Error in inserting records:".mysql_error);
	}

	mysqli_close($conn);
	
?>