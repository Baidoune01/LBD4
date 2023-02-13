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
    function exercice1() {
        $arr = [1, 2, 3, 2, 3, 1, 4, 1, 5, 8, 5, 5, 9, 9, 9, 8, 1, 2, 2, 1];
        echo "1. our array, arr: [", $arr[0];
        for ($i = 1; $i < sizeof($arr); $i++) {
            echo ", ";
            echo $arr[$i];
        }
        echo "] <br/>";
        for ($i = 0; $i < sizeof($arr); $i++) {
            for ($j = 0; $j < sizeof($arr) - $i - 1; $j++) {
                if ($arr[$j]>$arr[$j+1]) {
                    $temp =  $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        echo "2. our sorted array, arr: [", $arr[0];
        for ($i = 1; $i < sizeof($arr); $i++) {
            echo ", ";
            echo $arr[$i];
        }
        echo "] <br/>";

        $test = array();
        foreach ($arr as $elem) {
            $test[$elem] = 0;
        }
        $len_arr = sizeof($arr);
        for ($i=0; $i < $len_arr; $i++) {
            if ($test[$arr[$i]]>0) {
                unset($arr[$i]);
            }
            else {
                $test[$arr[$i]] += 1;
            }
        }

        echo "3. we removed all the doubles in order to make the array unique, arr: ";

        print_r($arr);
    }
    exercice1();
    ?>
</body>
</html>