<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $links_array=array(
            "PHP"=>"http://www.php.net",
            "MySQL"=>"http://www.mysql.org",
            "SQLite"=>"http://www.sqlite.org",
            "HTML"=>"https://www.w3schools.com/html/default.asp",
            "CSS"=>"https://www.w3schools.com/css/default.asp"
        );
        echo "A random link from the array of links using array_rand is: <br><br><br>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp",$links_array[array_rand($links_array)];

        echo "<br><br><br> you can refresh the page and the link will change randomly "
    ?>
</body>
</html>