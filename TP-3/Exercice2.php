<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websites tables</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th></th>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<th>" . $i . "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    echo "<th>" . $i . "</th>";
                    for ($j = 1; $j <= 10; $j++) {
                        echo "<td>" . $i * $j . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>