<!doctype html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
	<div class=container>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="step1-tab" data-toggle="tab" href="#step1" role="tab" aria-controls="step1" aria-selected="true">Step 1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="step2-tab" data-toggle="tab" href="#step2" role="tab" aria-controls="step2" aria-selected="false">Step 2</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="step3-tab" data-toggle="tab" href="#step3" role="tab" aria-controls="step3" aria-selected="false">Step 3</a>
			</li>
		</ul>
		<form method="post" action="uploaddetailstudent.php">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="step1-tab">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for=inputName>Name</label>
							<input type="text" class="form-control" id=inputName name=inputName placeholder="As mentioned in your marksheet" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for=inputDOB>Date of Birth</label>
							<input type="date" class="form-control" id="inputDOB" name=inputDOB placeholder="As mentioned in your marksheet" required>
						</div>
						<div class="form-group col-md-2">
							<label for=inputGender>Gender</label>
							<select type="text" class="form-control" id=inputGender name=inputGender required>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputEmail">Email</label>
							<input type="text" class="form-control" id="inputEmail" name=inputEmail placeholder="Email" required>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4 form-group">
							<label for="inputMobile">Mobile Number</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">+91</span>
								</div>
								<input type="text" class="form-control" id=inputMobile name=inputMobile placeholder="" pattern="[456789][0-9]{9}" maxlength=10 required>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for=inputCourse>Course</label>
							<select type=text class=form-control id=inputCourse name=inputCourse required>
                                <option>B.Tech</option>
                                <option>M.Tech</option>
                                <option>MCA</option>
                                <option>MBAS</option>
                            </select>
						</div>
						<div class="form-group col-md-6">
							<label for=inputCourse>Branch</label>
							<select type=text class=form-control id=inputBranch name=inputBranch required>
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
						<div class="form-group col-md-3">
							<label for=inputYear>Year</label>
							<select type=text class=form-control id=inputYear name=inputYear required>
                               
                                <option>First Year</option>
                                <option>Second Year</option>
                                <option>Third Year</option>
                                <option>Fourth Year</option>
                            </select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for=inputRollNo>Roll Number</label>
							<input class=form-control type="text" id=inputRollNo name=inputRollNo required>
						</div>
						<div class="form-group col-md-6">
							<label for=inputUpseeRollNo>UPSEE Roll Number</label>
							<input class=form-control type="text" id=inputUpseeRollNo name=inputUpseeRollNo required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for=inputCategory>Category</label>
							<select class=form-control type="text" id=inputCategory name=inputCategory required>
                                <option>General</option>
                                <option>OBC</option>
                                <option>SC</option>
                                <option>ST</option>
                            </select>
						</div>
						<div class="form-group col-md-3">
							<label for=inputRank>UPSEE Rank</label>
							<input class=form-control type="text" id=inputRank name=inputRank required>
						</div>
						<div class="form-group col-md-3">
							<label for=inputCategoryRank>UPSEE Category Rank</label>
							<input class=form-control type="text" id=inputCategoryRank name=inputCategoryRank>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCrrAddress">Correspondence Address</label>
							<textarea type="text" class="form-control" id="inputCrrAddress" placeholder="" name=inputCrrAddress required></textarea>
						</div>
						<div class="form-group col-md-6">
							<label for="inputPermAddress">Permanent Address </label>
							<textarea type="text" class="form-control" id="inputPermAddress" placeholder="" name=inputPermAddress required></textarea>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="autofillAddress" onclick="autofill()">
								<label class="form-check-label" for="autofill">Same as correspondence address</label>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="inputCity">City</label>
							<input type="text" class="form-control" id="inputCity" placeholder="City" name=inputCity required>
							<div class="invalid-tooltip">
								Please provide a valid city.
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="inputState">State</label>
							<input type="text" class="form-control" id="inputState" placeholder="State" name=inputState required>
							<div class="invalid-tooltip">
								Please provide a valid state.
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="inputZip">Zip</label>
							<input type="text" class="form-control" id="inputZip" placeholder="Zip" name=inputZip required>
							<div class="invalid-tooltip">
								Please provide a valid zip.
							</div>
						</div>
					</div>
					<div class="form-row col-md-6">
							<div class="btn btn-primary" onclick=toStep2()>Next</div>
						</div>
				</div>
				<div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="step2-tab">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for=inputFatherName>Father's Name</label>
							<input type="text" class="form-control" id=inputFatherName placeholder="As mentioned in your marksheet" name=inputFatherName required>
						</div>
						<div class="form-group col-md-6">
							<label for=inputMotherName>Mother's Name</label>
							<input type="text" class="form-control" id=inputMotherName placeholder="As mentioned in your marksheet" name=inputMotherName required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for=inputFatherOccupation>Father's Occupation</label>
							<input type="text" class="form-control" id=inputFatherOccupation name=inputFatherOccupation placeholder="" required>
						</div>
						<div class="form-group col-md-6">
							<label for=inputMotherOccupation>Mother's Occupation</label>
							<input type="text" class="form-control" id=inputMotherOccupation name=inputMotherOccupation placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for=inputFatherIncome>Father's Annual Income</label>
							<input type="text" class="form-control" id=inputFatherIncome name=inputFatherIncome placeholder="" required>
						</div>
						<div class="form-group col-md-4">
							<label for=inputMotherIncome>Mother's Annual Income</label>
							<input type="text" class="form-control" id=inputMotherIncome name=inputMotherIncome placeholder="" required>
						</div>
						<div class="form-group col-md-4">
							<label for=inputIncome>Total Annual Income</label>
							<input type="text" class="form-control" id=inputIncome name=inputIncome readonly placeholder="">
						</div>
					</div>
					<div class="form-row col-md-6">
						<div class="form-group col-md-3">
							<div class="btn btn-secondary" onclick=toStep1()>Previous</div>
						</div>
						<div class="form-group col-md-3">
							<div class="btn btn-primary" onclick=toStep3()>Next</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="step3-tab">
					<div class="form-row col-md-12">
						<div class="form-group col-md-6">
							<label for="uploadPhoto">Upload Photograph</label>
							<input type="file" class="form-control-file" id="uploadPhoto" name="upload[]" required>
						</div>
						<div class="form-group col-md-6">
							<label for="inputPhotoPreview">Uploaded Preview</label>
							<img id="inputPhotoPreview" src="" alt="" />
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group col-md-6">
							<label for="uploadSign">Upload Signature</label>
							<input type="file" class="form-control-file" id="uploadSign" name="upload[]" required>
						</div>
						<div class="form-group col-md-6">
							<label for="inputSignPreview">Uploaded Preview</label>
							<img id="inputSignPreview" src="" alt="" />
						</div>
					</div>
					<div class="form-row">
						<button class="btn btn-primary" type=submit name=submit>Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<script>
		window.onload = function() {
			document.getElementById('inputFatherIncome').defaultValue = 0;
			document.getElementById('inputMotherIncome').defaultValue = 0;
			document.getElementById('inputFatherIncome').onchange = updateIncome;
			document.getElementById('inputMotherIncome').onchange = updateIncome;
		}

		function updateIncome() {
			document.getElementById('inputIncome').value = Number(document.getElementById('inputFatherIncome').value) + Number(document.getElementById('inputMotherIncome').value);
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="../assests/js/student/main.js"></script>

</body>

</html>