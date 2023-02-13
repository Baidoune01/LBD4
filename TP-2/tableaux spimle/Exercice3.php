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
    function display($arr) {
        foreach ($arr as $key => $val) {
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp $key => $val<br>";
        }
    }
    function mean($arr) {
        $somme = 0;
        foreach ($arr as $val) {
            $somme += $val;
        }
        return $somme/sizeof($arr);
    }
    function over_10($arr) {
        $c = 0;
        foreach ($arr as $val) {
            if ($val > 10) {
                $c += 1;
            }
        }
        return $c;
    }
    function times_20($arr) {
        $c = 0;
        foreach ($arr as $val) {
            if ($val == 20) {
                $c += 1;
            }
        }
        return $c;
    }
    function sort_myarr($arr) {
        for ($i = 0; $i < sizeof($arr); $i++) {
            for ($j = 0; $j < sizeof($arr) - $i - 1; $j++) {
                if ($arr[$j]>$arr[$j+1]) {
                    $temp =  $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        display($arr);
    }
    function get_elem($arr, $elem) {
        foreach ($arr as $key => $val) {
            if ($val == $elem) {
                return $key;
            }
        }
        return -1;
    }
    function exercice3() {
        $notes = array(10, 20, 5, 17, 18, 7, 15, 1, 19, 18, 15, 17, 10);
        echo "1. I implemented a function display()  in order to display the values of our array: <br>";
        display($notes);
        echo "2. I implemented a function mean()  in order to get the mean of our array: <br>";
        $m = mean($notes);
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp the mean is $m<br><br>";
        echo "3. I implemented a function over_10()  in order to get the number of students who got a mark > 10: <br>";
        $o = over_10($notes);
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp the number of student who got a mark > 10 is $o <br> <br>";
        echo "4. I implemented a function times_20()  in order to get the number of times we have 20 in notes: <br>";
        $t = times_20($notes);
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp the number of times we have 20 in notes is $t<br><br>";

        echo "5. I implemented the function sort_myarr in order to sort the array of notes<br>";
        sort_myarr($notes);
        echo "6; I implemented the function get_elem() that returns the index of element, and if the element doesn't exists, it returns -1<br>";
        echo " &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp test 1: the element exists suppose it is 20, so the index is :", get_elem($notes, 20) ,"<br>";
        echo " &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp test 2: the element does not exist suppose it is 13, so it returns :", get_elem($notes, 13);
    }
    exercice3();
    ?>
</body>
</html>