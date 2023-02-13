<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $modules = array("Et1777611991981" => array("Nom" => "z", "Prenom" => "z", "Notes" => array("m1" =>105,"m2" => 0,"m3" => 4,"m4" => 17.6,"m5" => 12.25,"m6" => 10, "m7" => 20, "m8" => 18, "m9" => 15.5) ),
    "Et&&87871871871" => array("Nom" => "batat", "Prenom" => "hamid", "Notes" => array("m1" => 15,"m2" => 12.3,"m3" => 15.6,"m4" => 9.75,"m5" => 9.75,"m6" => 30, "m7" => 12.7, "m8" => 13, "m9" => 19.0) ),
    "Et1981989177181" => array("Nom" => "yossir", "Prenom" => "hamadat", "Notes" => array("m1" => 12.75,"m2" => 12.3,"m3" => 15.9,"m4" => 17,"m5" => 12,"m6" => 10.8, "m7" => 10, "m8" => 15, "m9" => 10) ),
    "Et1981981__ç18989" => array("Nom" => "saadia", "Prenom" => "lgar3a", "Notes" => array("m1" => 16,"m2" => 12.3,"m3" => 18.9,"m4" => 19.5,"m5" => 6.75,"m6" => 11, "m7" => 13.5, "m8" => 12, "m9" => 0.9) )
    );

    function m_M_mod($array, $w){
        if ($w == 0){
            $mm_M = "m1";
            $m_N = $array["m1"];
            foreach ($array as $key => $v){
                if( $v < $m_N){
                    $mm_M = $key;
                    $m_N = $v;
                }
            }
            
            return array($mm_M,$m_N);
        }
        if ($w == 1){
            $M_M = "";
            $M_M = 0;
            foreach ($array as $key => $v){
                if ($v > $M_M){
                    $M_M = $key;
                    $M_M = $v;
                }
            }
        
        return array($M_M,$M_M);
        }
    }
    foreach ($modules as $k => $v){
        echo "<br>Student  ",$v["Nom"];
        echo "<br>plus eleve module : ",m_M_mod($v["Notes"],1)[0]," With score : ",m_M_mod($v["Notes"],1)[1] ;
        echo "<br>Low lowe lowest m  module : ",m_M_mod($v["Notes"],0)[0]," With score : ",m_M_mod($v["Notes"],0)[1], "<br>" ;
    }

    $l_m = $modules["Et1777611991981"]["Notes"];
    $l_M = $modules["Et1777611991981"]["Notes"];
    foreach ($modules as $key => $v){
        foreach ($v["Notes"] as $kkkkkkk => $nnnnnn){
            if ($v["Notes"][$kkkkkkk] < $l_m[$kkkkkkk]){
                $l_m[$kkkkkkk] = $v["Notes"][$kkkkkkk];
            }
            if ($v["Notes"][$kkkkkkk] > $l_M[$kkkkkkk]){
                $l_M[$kkkkkkk] = $v["Notes"][$kkkkkkk];
            }
        }
    }
    print_r($l_m);
    echo "<br><br>";
    print_r($l_M);
    ?>
</body>
</html>