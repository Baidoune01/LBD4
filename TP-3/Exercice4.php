<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1>Contact Form</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
                <label for="inputname">family name:</label>
                <input type="text" class="form-control" id="inputname" name="name" required>
            </div>
            <div class="form-group">
                <label for="inputppnnmm">first name:</label>
                <input type="text" class="form-control" id="inputppnnmm" name="ppnnmm" required>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email:</label>
                <input type="email" class="form-control" id="inputEmail" name="email" required>
            </div>
            <div class="form-group">
                <label for="inputObjet">Objet:</label>
                <input type="text" class="form-control" id="inputObjet" name="objet" required>
            </div>
            <div class="form-group">
                <label for="selectService">Service:</label>
                <select class="form-control" id="selectService" name="dep">
                    <option value="SAV">Service après-vente</option>
                    <option value="TECH">Service technique</option>
                </select>
            </div>
            <div class="form-group">
                <label for="textareaMessage">Message:</label>
                <textarea class="form-control" id="textareaMessage" rows="5" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
    <?php
    $name = "";$ppnnmm = "";$email = "";$objet = "";$dep = "";$message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $ppnnmm = htmlspecialchars($_POST["ppnnmm"]);
        $email = htmlspecialchars($_POST["email"]);
        $objet = htmlspecialchars($_POST["objet"]);
        $dep = htmlspecialchars($_POST["dep"]);
        $message = htmlspecialchars($_POST["message"]);

        echo "<h2>Informations saisies :</h2>";
        echo "<p><strong>family name :</strong> " . $name . "</p>";
        echo "<p><strong>first name :</strong> " . $ppnnmm . "</p>";
        echo "<p><strong>Email :</strong> " . $email . "</p>";
        echo "<p><strong>Object : </strong> " . $objet . "</p>";
        echo "<p><strong>department : </strong> " . $dep . "</p>";
        echo "<p><strong>Message : </strong> " . $message . "</p>";
    }
    ?>
</body>
</html>