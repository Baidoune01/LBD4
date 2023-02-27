<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1>Calculator</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="oo1">Operand 1:</label>
                <input type="number" class="form-control" id="oo1" name="oo1" required>
            </div>
            <div class="form-group">
                <label for="oo2">Operand 2:</label>
                <input type="number" class="form-control" id="oo2" name="oo2" required>
            </div>
            <div class="form-group">
                <label for="oop">operation you wish to be done:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="oop" id="add" value="add" checked>
                    <label class="form-check-label" for="add">
                        Addition
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="oop" id="sub" value="sub">
                    <label class="form-check-label" for="sub">
                        Substruction
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="oop" id="mul" value="mul">
                    <label class="form-check-label" for="mul">
                        Multiplication
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="oop" id="div" value="div">
                    <label class="form-check-label" for="div">
                        Division
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $oo1 = $_POST["oo1"];
            $oo2 = $_POST["oo2"];
            $oop = $_POST["oop"];
            $r = 0;
            switch ($oop) {
                case "add":
                    $r = $oo1 + $oo2;
                    break;
                case "sub":
                    $r = $oo1 - $oo2;
                    break;
                case "mul":
                    $r = $oo1 * $oo2;
                    break;
                case "div":
                    $r = $oo1 / $oo2;
                    break;
                default:
                    $r = "Invalid operation please choose again within the given in front of you.";
            }
            echo "<h2>the result is: " . $r . "</h2>";
        }
        ?>
    </div>
</body>
</html>
