<!DOCTYPE html>
<html>
<head>
	<title>Employee Management</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	

	<style>
		body {
			background-color: #f5f5f5;
		}
		.container {
			margin-top: 50px;
			text-align: center;
		}
		h1 {
			font-size: 3rem;
			margin-bottom: 2rem;
			color: #343a40;
		}
		.btn-container {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			grid-gap: 1rem;
			margin-top: 3rem;
			padding: 0 2rem;
		}
		.btn {
			width: 100%;
			height: 150px;
			font-size: 1.5rem;
			font-weight: 600;
			border-radius: 0.5rem;
			color: #fff;
			transition: all 0.3s ease;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			background-color: #007bff;
			border: none;
			outline: none;
			cursor: pointer;
		}
		.btn:hover {
			transform: scale(1.05);
			box-shadow: 0px 8px 8px rgba(0, 0, 0, 0.25);
		}
		.btn-primary {
			background-color: #007bff;
		}
		.btn-primary:hover {
			background-color: #0062cc;
		}
		.btn-danger {
			background-color: #dc3545;
		}
		.btn-danger:hover {
			background-color: #c82333;
		}
		.btn-success {
			background-color: #28a745;
		}
		.btn-success:hover {
			background-color: #218838;
		}
		.btn-info {
			background-color: #17a2b8;
		}
		.btn-info:hover {
			background-color: #138496;
		}
		.btn-warning {
			background-color: #ffc107;
		}
		.btn-warning:hover {
			background-color: #e0a800;
		}
        table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #ddd;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

a.update, a.delete {
  display: inline-block;
  padding: 8px;
  margin-right: 5px;
  text-decoration: none;
  color: #fff;
  border-radius: 5px;
}

a.update {
  background-color: #4CAF50;
}

a.delete {
  background-color: #f44336;
}
	</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-BDClfH+6UxG6UHI9DGbYmNhBm6yJp6lLspcjlBf6FbcE6ZDm6JicU2G8quEpgkm1GEGhUNFjWyMGgR/5Z5O5Zg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="container">
		<h1>Employee Management</h1>
		<a href="add_employee.php" class="btn btn-primary">Add Employee</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Department</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
			
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "employees";

			
					$conn = mysqli_connect($servername, $username, $password, $dbname);

				
					if (!$conn) {
					    die("Connection failed: " . mysqli_connect_error());
					}

			
					$sql = "SELECT employees.emp_no, employees.first_name, employees.last_name, departments.dept_name FROM employees JOIN dept_emp ON employees.emp_no = dept_emp.emp_no JOIN departments ON dept_emp.dept_no = departments.dept_no ORDER BY employees.emp_no LIMIT 20";

					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {

                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row["emp_no"] . "</td>";
                            echo "<td>" . $row["first_name"] . "</td>";
                            echo "<td>" . $row["last_name"] . "</td>";
                            echo "<td>" . $row["dept_name"] . "</td>";
                            echo "<td>
                              <a class='update' href='update_employee.php?id=" . $row["emp_no"] . "'>Update</a> 
                              <a class='delete' href='delete_employee.php?id=" . $row["emp_no"] . "'>Delete</a>
                            </td>";
                            echo "</tr>";
                          }
					} else {
					    echo "<tr><td colspan='5'>No employees found.</td></tr>";
					}

					mysqli_close($conn);
				?>
			</tbody>
		</table>
	</div>
</body>

</html>


