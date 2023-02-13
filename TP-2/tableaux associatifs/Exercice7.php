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
    <?php
        $multi_dim_arr = array(
            array("Et676","AB","AC",17),
            array("Et123","BC","BD",12),
            array("Et723","CD","CE",9),
            array("Et764","DE","DF",16.5)
        );
        echo "1. displaying infos about each student: <br>";
        for($pos = 0; $pos < 4;$pos++){
            echo "<br>";
            echo $pos+1,"-th student :";
            echo "<br>";
            echo "Code : ",$multi_dim_arr[$pos][0];
            echo "<br>";
            echo "Nom : ",$multi_dim_arr[$pos][1];
            echo "<br>";
            echo "Prénom : ",$multi_dim_arr[$pos][2];
            echo "<br>";
            echo "Moyenne : ",$multi_dim_arr[$pos][3];
            echo "<br>";
        }
    
        $n_mx = 0; $n_mn = $multi_dim_arr[0][3];
        $majorant = ""; $minorant = "";
    
    
        $n_mnValid = $multi_dim_arr[0][3];
        $minorantValid = "";
    
        $non_validee = array();
    
        for ($pos=0;$pos<4;$pos++){
            if ($multi_dim_arr[$pos][3] > $n_mx){
                $n_mx = $multi_dim_arr[$pos][3];
                $majorant = $multi_dim_arr[$pos][1];
            }
            if ($multi_dim_arr[$pos][3] < $n_mn){
                $n_mn = $multi_dim_arr[$pos][3];
                $minorant = $multi_dim_arr[$pos][1];
            }
            if ($multi_dim_arr[$pos][3] < $n_mnValid && $multi_dim_arr[$pos][3]>= 10){
                $n_mnValid = $multi_dim_arr[$pos][3];
                $minorantValid = $multi_dim_arr[$pos][1];
            }
            if ($multi_dim_arr[$pos][3] < 10){
                array_push($non_validee,$multi_dim_arr[$pos][1]); 
            }
        }

        echo "<br> <br> 2. le majorant est : ",$majorant;
        echo "<br>3 Etudiant Minorant mais validee est : ",$minorantValid;
        echo "<br>4. les eleves qui n'ont pas validee sont ";
        print_r($non_validee);
    ?>
</body>
</html>