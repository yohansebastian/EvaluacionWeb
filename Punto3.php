<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto3</title>
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
            <a class="nav-link" href="Punto3.php">Punto3</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <h4 class="h4 text-center">Punto Nº3 </h4>

  <h5 class="h5 text-center">3.Codificar un programa en PHP para la tienda Spring Step que
tiene una promoción de descuento, esta dependerá del número de
zapatos que se compren. </h5>
<h1>String Step<h1>

  <form class="mt-3" action="Punto3.php" method="POST">
  <div class="row ">
    <div class="col">
      <input type="text" class="form-control" name="NumZ" placeholder="Número de pares de zapatos">
    </div>
    <div class="col">
    <input type="number" class="form-control" placeholder="Precio de cada par de zapatos" name="ValZap">
    </div>
  </div>
  <button type="submit" class="btn btn-danger mt-3" name="descuento" >Calcular Descuento</button>
</form>
<?php

if (isset($_POST["descuento"])) {
    $NumZ=$_POST["NumZ"];
    $Precio=$_POST["ValZap"];

    function descuento($NumZ,$Precio)
    {
        $descuento = ($NumZ*$Precio);
        return descuento
    }

    if ( $NumZ = 3)
    {
        $descuento*0.10;
        $total =($NumZ*$Precio) - $descuento;
        $echo("El descuento obtenido sobre toda la compra fue : $ ".$descuento." El total a pagar es de : $ ".$total);
    }
    elseif ($NumZ > 3)
    {
        $descuento*0.20;
        $total =($NumZ*$Precio) - $descuento;
        $echo("El descuento obtenido sobre toda la compra fue : $ ".$descuento." El total a pagar es de : $ ".$total);
        
    }
    elseif($NumZ > 8)
    {
        $descuento*0.50;
        $total =($NumZ*$Precio) - $descuento;
        $echo("El descuento obtenido sobre toda la compra fue : $ ".$descuento." El total a pagar es de : $ ".$total);
    
    }

}




?>
</body>

</html>