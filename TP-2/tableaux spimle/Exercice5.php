<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            padding: 30px;
        }
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
    $colors = array("Yellow", "Blue", "Red", "Purple", "Black", "Orange", "Cian", "Aqua", "Bisque", "BlueViolet");
    echo "1. <br>";
    echo "<div id='table'> <table> <tr> <td align='center'>table of colors</td> </tr> <tr>";
    for ($i=0; $i<5; $i++) {
        echo "<td class = $colors[$i] style='background-color: $colors[$i]; padding:40px'></td>";
    }
    echo "</tr>";
    echo "<tr>";
    for ($j=5; $j<sizeof($colors); $j++) {
        echo "<td class = $colors[$j] style='background-color: $colors[$j]; padding:40px'></td>";
    }
    echo "</tr> </table> </div>";

    echo "2. <br>";
    echo "example where a color is in array 'Red': <br>";
    if (in_array("Red", $colors)) {
        echo "red is in the array.<br>";
    } else {
        echo "red is not in the array.<br>";
    }
    echo "<br>example where a color is not in array 'white': <br>";
    if (in_array("white", $colors)) {
        echo "white is in the array.<br>";
    } else {
        echo "white is not in the array. <br>";
    }
// 
    echo "3. <br>";
    $k = array_search("Red", $colors);

    if ($k !== false) {
        echo "'Red' in array at index:  $k.";
    } else {
        echo "'Red' not in the array.";
    }
    ?>
</body>
</html>