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
		<form>
			<div class="form sign-in">
				<h2>Faculty Login</h2>
				<label>
      				<span>Email</span>
      				<input type="email"/>
    			</label>
				<label>
      				<span>Password</span>
      				<input type="password" />
    			</label>
				<p class="forgot-pass">Forgot password?</p>
				<button type="button" class="submit">Sign In</button>
			</div>
		</form>
		<form>
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
						<input type="email" />
				  	</label>
					<label>
        				<span>Password</span>
        				<input type="password" />
      				</label>
					<p class="forgot-pass">Forgot password?</p>
					<button type="button" class="submit">Sign In</button>
				</div>
			</div>
		</form>
	</div>


	<script src="assests/js/login.js"></script>
</body>

</html>