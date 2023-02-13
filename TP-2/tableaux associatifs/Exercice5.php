<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Entrez le nom d'un countries: <input type="text" name="countries">
        <input type="submit" value="Rechercher">
    </form>
    <?php
    $capitales = array(
        "Maroc" => "Rabat",
        "Allemagne" => "Berlin",
        "Serbie" => "Belgrade",
        "Brésil" => "Brasilia",
        "Slovaquie" => "Bratislava",
        "Italie" => "Rome",
        "Venezuela" => "Caracas",
        "Moldavie" => "Chisinau",
        "Guyana" => "Georgetown",
        "Viêt Nam" => "Hanoï",
        "Zimbabwe" => "Harare",
        "Cuba" => "La Havane",
        "pays-Bas" => "La Haye",
        "Finlande" => "Helsinki"
        );
    echo "1. displaying the countries and their capitles <br>";
    foreach($capitales as $countries => $capitale) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp",$countries , " : " . $capitale , "<br>";
    }
    echo "2. on HTML <br>";
    echo "<table id='table_ex5'> <tr><td>countries</td><td>Capitale</td></tr>";
    foreach($capitales as $countries => $capitale) { 
        echo "<tr>";
        echo "<td>" ;
        echo $countries;
        echo"</td>";
        echo "<td>";
        echo $capitale;
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "3. searching for the capital of a given country <br>";
    if (isset($_POST['countries'])) {
        $search_things = $_POST['countries'];
        if (isset($capitales[$search_things])) {
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp the capital of  " . $search_things . " is " . $capitales[$search_things];
        } 
        else {
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp country not found in the array";
        }
    }
    ?>
</body>
</html>