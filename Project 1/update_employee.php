<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
		<h1>Update Employees' Information</h1>
		<form method="post" action="updating.php">
			<div class="form-group">
				<h1>ID : <?php echo $_GET["id"]; ?></h1>
				<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
			</div>
			<div class="form-group">
				<label for="input1">First Name :</label>
				<input type="text" class="form-control" id="input1" name="first_name">
			</div>
			<div class="form-group">
				<label for="input2">Last Name :</label>
				<input type="text" class="form-control" id="input2" name="last_name">
			</div>
			<div class="form-group">
				<label for="input3">Salary :</label>
				<input type="text" class="form-control" id="input3" name="salary">
			</div>
            <div class="form-group">
				<label for="date">Birth Date :</label>
				<input type="date" class="form-control" id="date" name="birth_date">
			</div>
			<div class="form-group">
				<label for="select1">Department :</label>
				<select class="form-control" id="select1" name="dept_no">
					<option value="d001">Marketing</option>
					<option value="d002">Finance</option>
					<option value="d003">Human Resources</option>
                    <option value="d004">Production</option>
                    <option value="d005">Development</option>
                    <option value="d006">Quality Management</option>
                    <option value="d007">Sales</option>
                    <option value="d008">Research</option>
                    <option value="d009">Customer Service</option>
				</select>
			</div>
			<div class="form-group">
				<label>Gender :</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="radio1" value="M">
					<label class="form-check-label" for="radio1">
						Male
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="radio2" value="F">
					<label class="form-check-label" for="radio2">
						Female
					</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>