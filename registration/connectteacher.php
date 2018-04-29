<?php
$user = 'root';
$pass = '';
$db = 'dbteacher';
$conn = new mysqli('localhost', $user, $pass, $db) or die ("you are not connected");
if(isset($_POST['submit']))
{
    $name=$_POST['inputName'];
    $Mail=$_POST['inputEmail'];
    $MOB=$_POST['inputMobile'];
    $desig=$_POST['inputDesig'];
    $dept=$_POST['inputDept'];
$query="INSERT INTO data(Name,Email,Phone,Designation,Department)values('$name',' $Mail','$MOB','$desig','$dept')";
}
echo "great work";
?>