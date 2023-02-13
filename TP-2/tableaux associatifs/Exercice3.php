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
        echo "1. in code";
        $arr = array(
            "ahmed" => 14, 
            "joudia" => 19, 
            "samir"=> 14 , 
            "yassir" => 14.5 , 
            "aya" => 12, 
            "liham" => 16 , 
            "yassine"=> 17
        );
        echo "2. displaying as requested: <br>";
        foreach ($arr as $key => $val) {
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp Name: $key, Note= $val<br>";
        }
        echo "3. displaying the table using HTML: <br>";
        echo "<table id='table_ex1'><tr><td>Name</td><td>Note</td><tr>";
        foreach ($arr as $name => $age) {
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$age</td>";
            echo "</tr>";
          }
        echo "</table> <br>";
        echo "4. the student who has the highest note is: ", array_search(max(array_values($arr)), $arr);
        echo "<br>5. the student who has the lowest note is: ", array_search(min(array_values($arr)), $arr);
        $somme = 0;
        $c = 0;
        foreach ($arr as $key => $val) {
            $somme += $val;
            $c++;
        }
        echo "<br>6. the student who has the lowest note is: ", $somme/$c;
    ?>
</body>
</html>