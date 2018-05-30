<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$db = "scholarshipdb";

$conn = mysqli_connect($server, $user, $pass, $db);

if(isset($_SESSION['login_user'])) {
	$username = $_SESSION['login_user'];
	$qry3 = "SELECT * FROM `student_account` WHERE `Email`= '$username'";
	$qry4 = "SELECT * FROM `teacher_account` WHERE `Email`= '$username'";
	if(mysqli_num_rows(mysqli_query($conn,$qry3))==1) {
		header('Location: student/filldetail.php');
	}
	else if(mysqli_num_rows(mysqli_query($conn,$qry4))==1) {
		header('Location: teacher/filldetail.php');
	}
	else {
		session_destroy();
		?>
<script>alert("you have logged out");</script>
<?php
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login/Registration Form Transition</title>


	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

	<link rel="stylesheet" href="assests/css/login.css">


</head>

<body>

	<p class="tip">Sign In To Your Account</p>
	<div class="cont">
		<form method="post" action= teacher/sign-in.php>
			<div class="form sign-in">
				<h2>Faculty Login</h2>
				<label>
      				<span>Email</span>
      				<input type="email" name=username required/>
    			</label>
				<label>
      				<span>Password</span>
      				<input type="password" name=password required/>
    			</label>
				<p class="forgot-pass">Forgot password?</p>
				<button type="submit" class="submit" name=submit>Sign In</button>
			</div>
		</form>
		<form method="post" action="student/sign-in.php">
			<div class="sub-cont">
				<div class="img">
					<div class="img__text m--student">
						<h2>Student?</h2>
						<p>Click the button given below to login as Student.</p>
					</div>
					<div class="img__text m--faculty">
						<h2>Faculty?</h2>
						<p>Click the button given below to login as Faculty.</p>
					</div>
					<div class="img__btn">
						<span class="m--student">Student</span>
						<span class="m--faculty">Faculty</span>
					</div>
				</div>
				<div class="form sign-up">
					<h2>Student Login</h2>
					<label>
						<span>Email</span>
						<input type="text" name=username required/>
				  	</label>
					<label>
        				<span>Password</span>
        				<input type="password" name=password required/>
      				</label>
					<p class="forgot-pass">Forgot password?</p>
					<button class="submit" type=submit name=submit>Sign In</button>
				</div>
			</div>
		</form>
	</div>


	<script src="assests/js/login.js"></script>
</body>

</html>