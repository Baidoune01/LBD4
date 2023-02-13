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
    function exercice2() {
        $moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
        'Octobre', 'Novembre', 'Décembre');
        // question 1
        echo "1. displaying:<br>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp a. for <br>";
        for ($i=1; $i<=sizeof($moisFr); $i++) {
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp $i - ", $moisFr[$i], "<br>";
        }

        echo "&nbsp&nbsp&nbsp&nbsp&nbsp b. foreach <br>";
        foreach ($moisFr as $key => $moi) {
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp $key - ", $moi, "<br>";
        }
        // question 2
        echo "2. getting the current mounth from our array using the build-in function <b>date('m')</b>:<br>";
        $moi_index_st = date('m');
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp the answer is:  ",$moisFr[$moi_index_st];
        // question 3
        echo "3. getting the current mounth from our array using the build-in function <b>date('m') and intval()c for casting</b>:<br>";
        $moi_index = intval(date('m'));
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp the answer is:  ",$moisFr[$moi_index];
        // question 4
        echo "<br>4. re-indexing 'juillet with 13 => Juillet</b>:<br>";
        $key = array_search("Juillet", $moisFr);
        $moisFr[13] = $moisFr[$key];
        unset($moisFr[$key]);
        echo "displaying using <b>or</b><br>";
        for ($i=1; $i<=sizeof($moisFr); $i++) {
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp $i - ", $moisFr[$i], "<br>";
        }
        echo "as we see 'juillet' wasn't printed instand a warning was siplayed because the loop goes from 1 to 12' and the index now of juillet is 13<br>";
        echo "to solve this problem, we can simply print the elment of the array using <b>foreach</b> loop <br>";
        echo "here is an example: <br>";

        foreach ($moisFr as $key => $moi) {
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp $key - ", $moi, "<br>";
        }
        
    }
    exercice2();
    ?>
</body>
</html>