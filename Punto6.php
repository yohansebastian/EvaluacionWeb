<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto6</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">EvaluacionWEB1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
        <a class="nav-link" href="Punto3.php">Punto3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Punto4.php">Punto4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Punto5.php">Punto5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Punto6.php">Punto6</a>
      </li>
    </ul>
  </div>
</nav>
  </header>
<div class="container fluid">

<h1 class="h1 text-center text-info">NUMEROS PARES<h1>

<form class="mt-3" action="Punto6.php" method="POST">
<h2 class="font-weight-bold text-primary text-center">Escriba cuantos numeros pares desea calcular.</h2>
        <br>
        <div class="row text-center">
            <div class="col col-12 center">
              <label for="cantidad"><i class="far fa-user"></i>Cantidad de numeros</label>
              <input type="number" class="form-control" name="cantidad" placeholder="Cantidad de Numeros a Calcular">
            </div>
        </div>
        <div class="row p-2">
                <div class="col col-12 text-center">
                    <button name="calcular" class="btn btn-danger ">Calcular</button>
                </div>
            </div>
</form>
<?php
  if(isset($_POST["calcular"]))
{
  $cantidad=$_POST["cantidad"];
  
  $arreglo=array($cantidad);

  for($centinela=0;$centinela<$cantidad;$centinela=$centinela+2){
    
    echo($centinela);
    echo("<br>");
  }
}
  


?>







</div>


</body>
</html>