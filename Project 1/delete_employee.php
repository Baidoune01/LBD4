<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Deletion Form</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Deletion Form</h1>
        <?php
        $db = new mysqli("localhost","root","","employees");
        $query = "SELECT dept_name FROM departments";
        $data = mysqli_query($db, $query);
        $array=[];
        while ($row = mysqli_fetch_array($data)) {
            $array[] = $row['dept_name'];
        }
        
        ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="id">ID of Employee:</label>
                <input type="text" class="form-control" id="id" name="id" value="ID">
            </div>
            <div class="form-group">
                <label for="selectlink">In which department is the employee you want to delete:</label>
                <select class="form-control" id="selectlink" name="selectlink">
                    <?php foreach ($array as $arr) { ?>
                        <option value = ""><?php print($arr); ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $id = $_POST['id'];
                $dep = $_POST['selectlink'];
                $sql1 = "DELETE FROM dept_emp WHERE emp_no=$id";
                $sql2 = "DELETE FROM employees WHERE emp_no=$id";
                $sql3 = "DELETE FROM salaries WHERE emp_no=$id";
                $sql4 = "DELETE FROM titles WHERE emp_no=$id";
                $sql5 = "DELETE FROM dept_manager WHERE emp_no=$id";
                if (mysqli_query($db, $sql1) && mysqli_query($db, $sql2) && mysqli_query($db, $sql3) && mysqli_query($db, $sql4) && mysqli_query($db, $sql5) ) {
                    echo "<div class='alert alert-success mt-3' role='alert'>Record deleted successfully</div>";
                  } else {
                    echo "<div class='alert alert-danger mt-3' role='alert'>Error deleting record: " . mysqli_error($db) . "</div>";
                  }
            }
        ?>
    </div>
</body>
</html>