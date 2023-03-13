<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating ...</title>
</head>
<body>

    <?php
    $truth = true;
    $connect = new mysqli("localhost", "root", "", "employees");
    if ($connect -> connect_errno){
        echo "<h1>Failed to connect to the Database.</h1>";
    }
    if (empty($_POST["id"])){
        echo "<h1>No ID Provided</h1>";
    }
    $queries = ["birth_date", "first_name", "last_name", "gender"];
    $queries2 = ["salary", "dept_no"];
    foreach($queries as $info){
        if (!empty($_POST[$info])){
            $update = "update employees set ".$info."='".$_POST[$info]."' where emp_no = ".$_POST["id"].";";
            if ($connect -> query($update) === FALSE){
                $truth = false;
                echo("<h1>Could not update the ".$_POST[$info]."</h1>");
            }
        }
    }
    if (!empty($_POST["salary"])){
        $update = "update salaries set to_date = now() where emp_no = ".$_POST["id"]." and to_date = '9999-01-01';";
        if ($connect -> query($update) === FALSE){
            $truth = false;
            echo("<h1>Could not update the Salary</h1>");
        }
        $add = "insert into salaries values (".$_POST["id"].", ".$_POST["salary"].", now() ,'9999-01-01');";
        if ($connect -> query($add) === FALSE){
            $truth = false;
            echo("<h1>Could not update the Salary</h1>".mysqli_error($connect));
        }
    }

    if(!empty($_POST["dept_no"])){
        $update = "update dept_emp set to_date = now() where emp_no = ".$_POST["id"]." and to_date = '9999-01-01';";
        if ($connect -> query($update) === FALSE){
            $truth = false;
            echo("<h1>Could not update the department</h1>");
        }
        $add = "insert into dept_emp values (".$_POST["id"].", ".$_POST["dept_no"].", now() ,'9999-01-01');";
        if ($connect -> query($add) === FALSE){
            $truth = false;
            echo("<h1>Could not update the department</h1>".mysqli_error($connect));
        }
    }
    $connect -> close();
    header("Location: view_employee.php?id=".$_POST['id']);
    ?>
</body>
</html>