<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Registration Form</h1>
        <form method="POST">
            <div class="form-group">
                <label for="gender">Civilité</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">-- Sélectionner --</option>
                    <option value="Mlle">Mlle</option>
                    <option value="Mme">Mme</option>
                    <option value="M">M</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fnme">Prénom</label>
                <input type="text" class="form-control" id="fnme" name="fnme" required>
            </div>
            <div class="form-group">
                <label for="lnme">Nom</label>
                <input type="text" class="form-control" id="lnme" name="lnme" required>
            </div>
            <div class="form-group">
                <label for="dob">Date de naissance</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label>Formations proposées</label><br>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" name="formations[]" id="formation1" value="Formation 1">
                    <label class="form-check-label" for="formation1">Formation 1</label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" name="formations[]" id="formation2" value="Formation 2">
                    <label class="form-check-label" for="formation2">Formation 2</label>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password2">Réécrire mot de passe</label>
                <input type="password" class="form-control" id="password2" name="password2" required>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
    <?php
    ///////////////////////////
$civ = $fnme = $lnme = $dob = $formations = $password = $password_confirm = "";
////////////////////
$civErr = $fnmeErr = $lnmeErr = $dobErr = $formationsErr = $passwordErr = $password_confirmErr = "";
//////////////////////////
$formations_list = array("Formation 1", "Formation 2");
function validate_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["civ"])) {
        //////////////////////////
        $civErr = "il faut remplire votre civilite";
    } else {
        $civ = validate_input($_POST["civ"]);
    }
    ///////////////////////////////::
    if (empty($_POST["fnme"])) {
        $fnmeErr = "prenom est important et demande";
    } else {
        $fnme = validate_input($_POST["fnme"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$fnme)) {
            $fnmeErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["lnme"])) {
        $lnmeErr = "Last name is required";
    } else {
        $lnme = validate_input($_POST["lnme"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$lnme)) {
            $lnmeErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["dob"])) {
        $dobErr = "your birthday is important";
    } else {
        $dob = validate_input($_POST["dob"]);
    }
    if (!isset($_POST["formations"])) {
        $formationsErr = "At least one formation is required";
    } else {
        $formations = $_POST["formations"];
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = validate_input($_POST["password"]);
    }
    //////////////////////
    ///////////////////
    if (empty($_POST["password_confirm"])) {
        $password_confirmErr = "Password confirmation is required";
    } else {
        /////////////////////////////
        $password_confirm = validate_input($_POST["password_confirm"]);
        if ($password != $password_confirm) {
            $password_confirmErr = "Passwords do not match";
        }
    }
}
?>
</body>
</html>