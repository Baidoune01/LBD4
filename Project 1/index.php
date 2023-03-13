<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page d'accueil</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header class="bg-dark text-white py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Entreprise</h1>
        <p class="lead">Mission de l'entreprise</p>
      </div>
      <div class="col-md-6 text-right">
        <a href="logIn.php" class="btn btn-light"><i class="fa fa-lock"></i> Accès à l'administration</a>
      </div>
    </div>
  </div>
</header>


<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <h2>Départements et employés actuels</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Département</th>
            <th>Nombre d'employés</th>
          </tr>
        </thead>
        <tbody>
        <?php

  $host = "localhost"; 
  $user = "root"; 
  $password = ""; 
  $database = "employees"; 

  $conn = mysqli_connect($host, $user, $password, $database);


  if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
  }


  $sql = "SELECT d.dept_name, COUNT(de.emp_no) AS num_employees
  FROM departments d
  INNER JOIN dept_emp de ON de.dept_no = d.dept_no
  GROUP BY d.dept_name";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    die("Erreur lors de la récupération des données : " . mysqli_error($conn));
  }


  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row["dept_name"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["num_employees"]) . "</td>";
    echo "</tr>";
  }


  mysqli_close($conn);
?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
