<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		body {
			background-color: #f2f2f2;
		}
		.container {
			margin-top: 50px;
			margin-bottom: 50px;
			background-color: #fff;
			padding: 50px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}
		h1 {
			font-size: 36px;
			font-weight: 600;
			margin-bottom: 30px;
			color: #333;
			text-align: center;
		}
		label {
			font-weight: 600;
		}
		input[type=text], input[type=date], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-weight: 600;
			width: 100%;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Add Employee</h1>
		<form action="add_employee.php" method="post">
			<div class="form-group">
				<label for="firstname">First Name:</label>
				<input type="text" class="form-control" id="firstname" name="firstname" required>
			</div>
			<div class="form-group">
				<label for="lastname">Last Name:</label>
				<input type="text" class="form-control" id="lastname" name="lastname" required>
			</div>
			<div class="form-group">
				<label for="birthdate">Birth Date:</label>
				<input type="date" class="form-control" id="birthdate" name="birthdate" required>
			</div>
			<div class="form-group">
				<label for="gender">Gender:</label>
				<select class="form-control" id="gender" name="gender" required>
					<option value="">--Select--</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
				</select>
			</div>
			<input type="submit" value="Add Employee">
		</form>
	</div>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $birthdate = $_POST["birthdate"];
    $gender = $_POST["gender"];

    if (empty($firstname) || empty($lastname) || empty($birthdate) || empty($gender)) {
        echo "Please fill in all the required fields.";
    } else {
    
        $dsn = "mysql:host=baidounehost;dbname=employees;charset=utf8mb4";
        $username = "root";
        $password = "";

        try {
            $pdo = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
        }
        $sql = "SELECT MAX(emp_no) FROM employees;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();


        $count = $stmt->fetchColumn();

        $stmt = $pdo->prepare("INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date) VALUES (:empno, :birthdate, :firstname, :lastname, :gender, NOW())");
        $count = $count + 1;

        $stmt->bindParam(":empno", $count);
        $stmt->bindParam(":birthdate", $birthdate);
        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":gender", $gender);

   
        if ($stmt->execute()) {
            echo '<div class="alert alert-success mt-3" role="alert">';
            echo 'Employee added successfully!';
            echo '</div>';
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }
    }
}
?>
</body>
</html>