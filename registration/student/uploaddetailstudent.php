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





















<?php
$user = 'root';
$pass = '';
$db = 'scholarshipdb';
$conn = new mysqli('localhost', $user, $pass, $db) or die ("you are not connected");
if(isset($_POST['submit']))
{
    $name=$_POST['inputName'];
    $DOB=$_POST['inputDOB'];
    $Gen=$_POST['inputGender'];
    $Mail=$_POST['inputEmail'];
    $MOB=$_POST['inputMobile'];
    $Cou=$_POST['inputCourse'];
    $Year=$_POST['inputYear'];
    $Roll=$_POST['inputRollNo'];
    $URoll=$_POST['inputUpseeRollNo'];
    $Cat=$_POST['inputCategory'];
    $Rank=$_POST['inputRank'];
    $CAdd=$_POST['inputCrrAddress'];
    $PAdd=$_POST['inputPermAddress'];
    $City=$_POST['inputCity'];
    $State=$_POST['inputState'];
    $Pin=$_POST['inputZip'];
    $FN=$_POST['inputFatherName'];
    $MN=$_POST['inputMotherName'];
    $FO=$_POST['inputFatherOccupation'];
    $MO=$_POST['inputMotherOccupation'];
    $FI=$_POST['inputFatherIncome'];
    $MI=$_POST['inputMotherIncome'];
    $Inc=$_POST['inputIncome'];
$query="INSERT INTO data(Name,DOB,Gender,Email,Phone,Course,Year,Rollnumber,UPRollnumber,Category,Rank,CAddress,PAddress,City,State,Pincode,Fathername,Mothername,Fatherocc,Motherocc,FIncome,MIncome,Income)values('$name','$DOB','$Gen',' $Mail','$MOB','$Cou','$Year','$Roll',' $URoll','$Cat','$Rank','$CAdd','$PAdd','$City','$State','$Pin','$FN','$MN','$FO','$MO','$FI','$MI','$Inc')";

}
echo "great work";
?>