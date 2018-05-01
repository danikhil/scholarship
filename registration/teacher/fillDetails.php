<!doctype html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
	<div class=container>
		<form method="post" action="../connectteacher.php">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputName">Name</label>
					<input type="text" class="form-control" id=inputName placeholder="As mentioned in your marksheet" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputEmail">Email</label>
					<input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-4 form-group">
					<label for="inputMobile">Mobile Number</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">+91</span>
						</div>
						<input type="text" class="form-control" id=inputMobile placeholder="" pattern="[456789][0-9]{9}" maxlength=10 required>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label for="inputDesig">Designation</label>
					<select type=text class=form-control id=inputDesig required>
                                <option>Associate Proffessor</option>
                                <option>Proffessor</option>
                                <option>Head Of Dept</option>
                                <option>Director</option>
                            </select>
				</div>
				<div class="form-group col-md-6">
					<label for="inputDept">Department</label>
					<select type=text class=form-control id=inputDept required>
                                <option>Chemical Engineering</option>
                                <option>Civil Engineering</option>
                                <option>Computer Science</option>
                                <option>Electrical Engineering</option>
                                <option>Electronics Engineering</option>
                                <option>Electronics and Instrumental Engineering</option>
                                <option>Information Technology</option>
                                <option>Mechnical Engineering</option>
                            </select>
				</div>
			</div>
			<div class="form-row">
					<button class="btn btn-primary" type=submit>Submit</button>
				</div>
		</form>
	</div>
	<script>

	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="../assests/js/teacher/main.js"></script>

</body>

</html>
