<!DOCTYPE html>
<html>
<head>
  <title>TP-2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="container"> 
    <h1>Here the answers of the exercices in the TP-2</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div id="buttons">
        <button id="ex1" class="btn" name="ex1">Exercices 1</button>
        <button id="ex2" class="btn" name="ex2">Exercices 2</button>
        <button id="ex3" class="btn" name="ex3">Exercices 3</button>
        <button id="ex4" class="btn" name="ex4">Exercices 4</button>
        <button id="ex5" class="btn" name="ex5">Exercices 5</button>
        <button id="ex6" class="btn" name="ex6">Exercices 6</button>
        <button id="ex7" class="btn" name="ex7">Exercices 7</button>
        <button id="ex8" class="btn" name="ex8">Exercices 8</button>
      </div>
    </form>
  </div>

<!--  -->
<?php 
    if (isset($_POST['ex1'])) {
      require "Exercice1.php";
    }
    if (isset($_POST['ex2'])) {
      require "Exercice2.php";
    }
    if (isset($_POST['ex3'])) {
      require "Exercice3.php";
    }
    if (isset($_POST['ex4'])) {
      require "Exercice4.php";
    }
    if (isset($_POST['ex5'])) {
      require "Exercice5.php";
    }
    
    ?>
</body>
</html>