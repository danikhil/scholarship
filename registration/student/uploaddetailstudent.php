<?php

/*
Filename: uploaddetailstudent.php
Purpose: Establish connection to MySQL database and upload detail.
Author: Anushka Mayank Mishra Naman Agrawal Nikhil Kushwaha
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

echo "hello";

$ins_query;
if( isset($_POST['submit'])) {
	
	$name=$_POST['inputName'];
    $dob=$_POST['inputDOB'];
    $gen=$_POST['inputGender'];
    $email=$_POST['inputEmail'];
    $mob=$_POST['inputMobile'];
    $cou=$_POST['inputCourse'];
	$br=$_POST['inputBranch'];
    $yr=$_POST['inputYear'];
    $roll=$_POST['inputRollNo'];
    $uroll=$_POST['inputUpseeRollNo'];
    $cat=$_POST['inputCategory'];
    $rank=$_POST['inputRank'];
	$crank=$_POST['inputCategoryRank'];
    $cadd=$_POST['inputCrrAddress'];
    $padd=$_POST['inputPermAddress'];
    $city=$_POST['inputCity'];
    $state=$_POST['inputState'];
    $pin=$_POST['inputZip'];
    $fn=$_POST['inputFatherName'];
    $mn=$_POST['inputMotherName'];
    $fo=$_POST['inputFatherOccupation'];
    $mo=$_POST['inputMotherOccupation'];
    $fi=$_POST['inputFatherIncome'];
    $mi=$_POST['inputMotherIncome'];
    $inc=$_POST['inputIncome'];
	
	$ins_query="INSERT INTO `student`(`Name`, `DOB`, `Gender`, `Email`, `Mobile No`, `Course`, `Branch`, `Year`, `Rollnumber`, `UPRollnumber`, `Category`, `Rank`, `CatRank`, `CAddress`, `PAddress`, `City`, `State`, `Pincode`, `Fathername`, `Mothername`, `Fatherocc`, `Motherocc`, `FIncome`, `MIncome`, `Income`) VALUES ($name,$dob,$gen,$email,$mob,$cou,$br,$yr,$roll,$uroll,$cat,$rank,$crank,$cadd,$padd,$city,$state,$pin,$fn,$mn,$fo,$mo,$fi,$mi,$inc);";
	
	//file related code
	
	if(isset($_FILES['photo'])) {
		$file_name = $_FILES['photo']['name'];
		$file_tmp = $_FILES['photo']['tmp_name'];
		$file_size = $_FILES['photo']['size'];
		$file_type= $_FILES['photo']['type'];

		if(move_uploaded_file($file_tmp, ''.$roll.'/'.$name_array)) {
			echo "upload successfull";
		}
		else {
			echo "move_uploaded_file function failed";
		}
	}
	
	else {
		echo "error uploading photo";
	}
	
	if(isset($_FILES['sign'])) {
		$file_name = $_FILES['sign']['name'];
		$file_tmp = $_FILES['sign']['tmp_name'];
		$file_size = $_FILES['sign']['size'];
		$file_type= $_FILES['sign']['type'];

		if(move_uploaded_file($file_tmp, ''.$roll.'/'.$name_array)) {
			echo "upload successfull";
		}
		else {
			echo "move_uploaded_file function failed";
		}
	}
	
	else {
		echo "error uploading photo";
	}
	
	if(mysqli_query($conn, $ins_query)) {
		echo "sucess";
	}

	else {
    	die("Error in inserting records:".mysql_error);
	}

	mysqli_close($conn);
	
}

else {
	echo "error2";
}
?>