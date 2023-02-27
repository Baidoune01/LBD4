<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1>Contact Form</h1>
        <form action="destination.php" method="post">
            <div class="form-group">
                <label for="inputNom">Nom:</label>
                <input type="text" class="form-control" id="inputNom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="inputPrenom">Prénom:</label>
                <input type="text" class="form-control" id="inputPrenom" name="prenom" required>
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
                <select class="form-control" id="selectService" name="service">
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
</body>
</html>