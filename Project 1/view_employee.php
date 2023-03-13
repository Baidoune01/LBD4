<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Employees Information</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

    form {
      margin: 50px auto;
      max-width: 500px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f2f2f2;
    }
    h1 {
      text-align: center;
      margin-top: 50px;
    }
    .table {
      margin-top: 50px;
    }
    .container {
      margin-top: 50px;
    }
    .card {
      margin-top: 50px;
      margin-bottom: 50px;
      border: none;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #f2f2f2;
      border: none;
    }
    .card-body {
      padding: 0px;
    }
    .form-group label {
      font-weight: bold;
      color: #666;
    }
  </style>
</head>
<body>
<h1>Employee Information</h1>
  <?php 
  $employee = $_GET["id"];
   
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "employees";

  $conn = new mysqli($servername, $username, $password, $dbname);


  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT distinct * FROM employees e inner join current_dept_emp c on e.emp_no = c.emp_no inner join titles m on m.emp_no = e.emp_no 
  inner join salaries s on s.emp_no = e.emp_no inner join departments d on c.dept_no = d.dept_no
  WHERE e.emp_no = $employee and s.to_date = '9999-01-01';";

  $result = $conn->query($sql);

  if ($result->num_rows == 0){
    echo "<div class='container'>";
    echo "<h1>No employee found with ID: $employee</h1>";
    echo "</div>";
  }
  else {
    $row = $result->fetch_assoc();
    if ($row['gender'] == 'M'){
      $picture = "images/man.jpg";
    }
    else{
      $picture = "images/woman.jpg";
    }
    echo '<div class="container">
    <div class="card">
      <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <h2>ID : '.$row["emp_no"].'</h2>
          <hr>
          <p><strong>Name:</strong> '.$row["first_name"]." ".$row["last_name"].'</p>
          <p><strong>Title:</strong> '.$row["title"].'</p>
          <p><strong>Department:</strong> '.$row["dept_name"].'</p>
          <p><strong>Salary:</strong> '.$row["salary"].'</p>
          <p><strong>Hiring Date:</strong> '.$row["hire_date"].'</p>
          <p><strong>Birthday:</strong> '.$row["birth_date"].'</p>
        </div>
        <div class="col-md-6">
          <img src="'.$picture.'" alt="Employee Photo" class="img-thumbnail">
        </div>
      </div>
    </div>
    </div>
  </div>';
  }
    $conn->close();
?>
</body>
</html>
