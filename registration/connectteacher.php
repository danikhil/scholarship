<?php
    
    $name=$_POST['inputName'];
    $Mail=$_POST['inputEmail'];
    $MOB=$_POST['inputMobile'];
    $desig=$_POST['inputDesig'];
    $dept=$_POST['inputDept'];
$user = 'root';
$pass = '';
$db = 'dbteacher';
$conn = new mysqli('localhost',$user,$pass,$db) or die ("you are not connected");

if(!$conn)
{ die("Could not connect to data base:".mysql_error());
}
mysql_select_db('dbteacher',$conn);
$query="INSERT INTO data(Name,Email,Phone,Designation,Department)values('$name',' $Mail','$MOB','$desig','$dept')";

if(!mysql_query($query,$conn))
{
    die("Error in inserting records:".mysql_error());
}
else
{
echo "great work";
}
?>