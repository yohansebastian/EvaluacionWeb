<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Punto1</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">EvaluacionWEB1</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="Punto1.php">Punto1 <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Punto2.php">Punto2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <h4 class="h4 text-center">Punto Nº1 </h4>

  <h5 class="h5 text-center">1.Hacer un programa en PHP que permita mostrar en pantalla la
    suma, resta, multiplicación, de dos números enteros almacenados
    en 2, variables diferentes.</h5>
  <main>

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-4">

          <form class="mt-3" action="Punto1.php" method="POST">
            <h4 align="center">Operaciones Basicas</h4>
            <div class="row">
              <div class="col">
                <input type="number" class="form-control" placeholder="Primer Numero" name="num1">
              </div>
              <div class="col">
                <input type="number" class="form-control" placeholder="Segundo Numero" name="num2">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="suma">SUMA</button>
            <button type="submit" class="btn btn-danger mt-3" name="resta">RESTA</button>
            <button type="submit" class="btn btn-warning mt-3" name="multiplicacion">MULTIPLICACION</button>

          </form>

          <?php
          
            if(isset($_POST["suma"])){
              $num1=$_POST["num1"];
              $num2=$_POST["num2"];

              $suma=$num1 + $num2;

              echo("La suma de los dos numeros es: ".$suma);

            }
            if(isset($_POST["resta"])){
              $num1=$_POST["num1"];
              $num2=$_POST["num2"];

              $suma=$num1 - $num2;

              echo("La resta de los dos numeros es: ".$suma);

            }
            if(isset($_POST["multiplicacion"])){
              $num1=$_POST["num1"];
              $num2=$_POST["num2"];

              $suma=$num1 * $num2;

              echo("La multiplicación de los dos numeros es: ".$suma);

            }

          ?>

        </div>
      </div>

    </div>
  </main>




</body>

</html>