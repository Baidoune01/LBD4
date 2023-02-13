<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    echo "1. is in code: <br>";
    $ages = array(
        'ahmed' => 56,
        'yassine' => 60,
        'abdo' => 16,
        'basma' => 30
    );
    echo "2. displaying as requested: <br>";
    foreach ($ages as $key => $val) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp$key a $val ans <br>";
    }
    echo "3. <br>";
    echo "<table id='table_ex1'><tr><td>name</td><td>age</td><tr>";
    foreach ($ages as $key => $val) {
        echo "<tr><td>$key</td><td>$val</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>