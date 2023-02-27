<!DOCTYPE html>
<html>
<head>
	<title>Form Submission Result</title>
</head>
<body>
	<h1>Form Submission Result</h1>
	<p><strong>Nom:</strong> <?php echo $_POST['nom']; ?></p>
	<p><strong>Prénom:</strong> <?php echo $_POST['prenom']; ?></p>
	<p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
	<p><strong>Objet:</strong> <?php echo $_POST['objet']; ?></p>
	<p><strong>Service:</strong> <?php echo $_POST['service']; ?></p>
	<p><strong>Message:</strong></p>
	<p><?php echo $_POST['message']; ?></p>
</body>
</html>
