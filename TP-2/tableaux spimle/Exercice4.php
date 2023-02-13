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
        function sorting_with_two_indexes(&$arr, $start, $end)
        {
            if ($start < $end) {
                $i = swap($arr, $start, $end);
                sorting_with_two_indexes($arr, $start, $i - 1);
                sorting_with_two_indexes($arr, $i + 1, $end);
            }
        }

        function swap(&$arr, $start, $end)
        {
            $pointer = $arr[$end];
            $i = $start - 1;
            for ($j = $start; $j < $end; $j++) {
                if ($arr[$j] > $pointer) {
                    $i++;
                    $t = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $t;
                }
            }
            $t = $arr[$i + 1];
            $arr[$i + 1] = $arr[$end];
            $arr[$end] = $t;
            return $i + 1;
        }

        $arr = array(12, 4, 7, 98, 9999, 656, 9, 66543, 43323, 19, 0, 123, 14);
        echo "first array is ", print_r($arr);
        $len = sizeof($arr);
        sorting_with_two_indexes($arr, 0, $len - 1);
        
        echo "<br><br>the array that is sorted in reverse is: [";
        for ($i = 0; $i < $len; $i++) {
            echo $arr[$i] . ", ";
        }
        echo "]";
    ?>
</body>
</html>