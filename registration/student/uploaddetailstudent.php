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
	
	$ins_query="INSERT INTO `student`(`Name`, `DOB`, `Gender`, `Email`, `Mobile No`, `Course`, `Branch`, `Year`, `Rollnumber`, `UPRollnumber`, `Category`, `Rank`, `CatRank`, `CAddress`, `PAddress`, `City`, `State`, `Pincode`, `Fathername`, `Mothername`, `Fatherocc`, `Motherocc`, `FIncome`, `MIncome`, `Income`) VALUES ($name,$dob,$gen,$email,$mob,$cou,$br,$yr,$roll,$uroll,$cat,$rank,$crank,$cadd,$padd,$city,$state,$pin,$fn,$mn,$fo,$mo,$fi,$mi,$inc)";
	
	//file related code
	
	if(isset($_FILES['upload'])) {
		$name_array = $_FILES['upload']['name'];
		$tmp_name_array = $_FILES['upload']['tmp'];
		$type_array = $_FILES['upload']['type'];
		$size_array = $_FILES['upload']['size'];
		$error_array = $_FILES['upload']['error'];

		for($i=0;$i<count($tmp_name_array); $i++) {

			if($i==0) {
				$var_name="photo";
			}
			else if($i==1) {
				$var_name="sign";
			}
			if(move_uploaded_file($tmp_name_array[$i],$email.'/'.$var_name)) {
				echo "upload successfull";
			}
			else {
				echo "move_uploaded_file function failed";
			}
		}
	}
	
	else {
		echo "error";
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