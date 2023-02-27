<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        table, th, td {
            border: 2px dashed gray;
            padding: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha512-q/JU+XSNJgc4oU6y3wq3s+1djrHmwLJQ1ov+ksAb8l+m9Yli+flbG57nJnNL+l+17Cz/pbE8evAV0pm9GM+pQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Student Information</h1>
        <form class="mb-3" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <div class="form-group">
                <label for="cd">Enter a valid code of student :</label>
                <input type="text" class="form-control" id="cd" name="cd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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
    if (isset($_POST["cd"])){

        if(!array_key_exists($_POST["cd"],$modules) && $_POST["cd"] != ""){
            echo '<div class="alert alert-danger mt-3">Not a valid code, please try another code or go to the tp-2 where you can find the right codes.</div>';
        }
        else {
            echo '<div class="alert alert-success mt-3">' . $_POST["cd"] . ' is the code that you have entered.</div>';

        


    function m_M($array, $m){
        if ($m == 0){
            $mmmmm = "m1";
            $mN = $array["m1"];
            foreach ($array as $kkkkkkkkkkkkk => $vvvvvvvvvv){
                //////////
                if( $vvvvvvvvvv < $mN){
                    /////////////k//////
                    /////////////f///
                    $mmmmm = $kkkkkkkkkkkkk;
                    $mN = $vvvvvvvvvv;
                    ////////////f///
                }
            }
            //////

            ///
            ///

            return array($mmmmm,$mN);
        }
        if ($m == 1){
            $MM = "";
            $MN = 0;
            foreach ($array as $kkkkkkkkkkkkk => $vvvvvvvvvv){
                if ($vvvvvvvvvv > $MN){
                    $MM = $kkkkkkkkkkkkk;
                    $MN = $vvvvvvvvvv;
                }
            }
        
        return array($MM,$MN);
        }
    }
        $v = $modules[$_POST["cd"]];
        echo "<br>";
        echo "Student  ",$v["Nom"];
        echo "<br>";
        echo "the module with the highest grade: ",m_M($v["Notes"],1)[0]," With score : ",m_M($v["Notes"],1)[1] ;
        echo "<br>";
        echo "the module with the lowest grade: ",m_M($v["Notes"],0)[0]," With score : ",m_M($v["Notes"],0)[1] ;
        echo "<br>";
}
        }
    ?>
</body>
</html>