<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Student Information</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
    Enter a valid code of student :
    <input type="text" name="code">
    </form>
    <?php 
    $modules = array(
        "Et1777611991981" => array(
            "Nom" => "z", 
            "Prenom" => "z", 
            "Notes" => array(
                "m1" =>105,"m2" => 0,"m3" => 4,"m4" => 17.6,
                "m5" => 12.25,"m6" => 10, "m7" => 20, "m8" => 18, "m9" => 15.5
            )
        ),
        "Et&&87871871871" => array(
            "Nom" => "batat", 
            "Prenom" => "hamid", 
            "Notes" => array(
                "m1" => 15,"m2" => 12.3,"m3" => 15.6,"m4" => 9.75,
                "m5" => 9.75,"m6" => 30, "m7" => 12.7, "m8" => 13, "m9" => 19.0
            )
        ),
        "Et1981989177181" => array(
            "Nom" => "yossir", 
            "Prenom" => "hamadat", 
            "Notes" => array(
                "m1" => 12.75,"m2" => 12.3,"m3" => 15.9,"m4" => 17,
                "m5" => 12,"m6" => 10.8, "m7" => 10, "m8" => 15, "m9" => 10
            )
        ),
        "Et1981981__ç18989" => array(
            "Nom" => "saadia", 
            "Prenom" => "lgar3a", 
            "Notes" => array(
                "m1" => 16,"m2" => 12.3,"m3" => 18.9,"m4" => 19.5,
                "m5" => 6.75,"m6" => 11, "m7" => 13.5, "m8" => 12, "m9" => 0.9
            )
        )
    );

    // Loop through the array to create links for each student
    foreach ($modules as $code => $student) {
        echo "<a href='show_student_infos.php?code=$code'>{$student['Nom']} {$student['Prenom']}</a><br>";
    }
    ?>
</body>
</html>