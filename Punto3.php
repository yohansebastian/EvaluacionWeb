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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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

<h1 class="h1 text-center">String Step<h1>

  <form class="mt-3" action="Punto3.php" method="POST">
  <div class="row text-center">
    <div class="col col-3 text center">
    <img src="img/running.jpg" alt="Tennis Running" class="img-thumbnail"><a href="#">Calzado Deportivos</a>
    <br><p>$120.000</p>
      <input type="text" class="form-control" name="Deportivo" placeholder="Número de pares ">
    </div>
    <div class="col col-3 text center ">
    <img src="img/Clasico.png" alt="ZapatosClasicos" class="img-thumbnail"><a href="#">Calzado Hombre Formal</a>
    <br><p>$210.000</p>
      <input type="text" class="form-control" name="Hombre" placeholder="Número de pares ">
    </div>
    <div class="col col-3 text center">
    <img src="img/dama.jpg" alt="Tennis Running" class="img-thumbnail"><a href="#">Calzado Dama Formal</a>
    <br><p>$160.000</p>
      <input type="text" class="form-control" name="Dama" placeholder="Número de pares ">
    </div>
  
  </div>
<div class="row p-2">
<div class="col col-4 text center">
  <button type="submit" class="btn btn-secondary mt-4" name="descuentoDeportivo" >Calcular Descuento</button>
</div>
<div class="col col-4 text center"> 
  <button type="submit" class="btn btn-secondary mt-4" name="descuentoFormalHom" >Calcular Descuento</button>
</div>
<div class="col col-4 text center">  
  <button type="submit" class="btn btn-secondary mt-4" name="descuentoFormalDam" >Calcular Descuento</button>
</div>
</div>
</form>

<?php

  if (isset($_POST["descuentoDeportivo"]))
  {
    $unidades=$_POST["Deportivo"];
    $Valor=120000;    
    if($unidades = 3)
    {
      $descuento=($unidades*$Valor)*0.1;
      $total=($unidades*$Valor)-$descuento;
    }
    elseif($unidades < 3)
    {
      $descuento=($unidades*$Valor)*0;
      $total=($unidades*$Valor);
      
    }
    elseif($unidades > 3 && $unidades < 8)
    {
      $descuento=($unidades*$Valor)*0.2;
      $total=($unidades*$Valor)*0.8;
      
    }
    elseif($unidades >=8)
    {
      $descuento=($unidades*$Valor)*0.5;
      $total=($unidades*$Valor)*0.5;
      
    }
    echo("El descuento es de : $" .$descuento);
    echo(" El total a pagar es : $ ".$total);
    
  }

  if (isset($_POST["descuentoFormalHom"]))
  {
    $unidades=$_POST["Hombre"];
    $Valor=210000;
    
    if($unidades = 3)
    {
      $descuento=($unidades*$Valor)*0.1;
      $total=($unidades*$Valor)-$descuento;
    }
    elseif($unidades < 3)
    {
      $descuento=($unidades*$Valor)*0;
      $total=($unidades*$Valor);
      
    }
    elseif($unidades > 3 && $unidades < 8)
    {
      $descuento=($unidades*$Valor)*0.2;
      $total=($unidades*$Valor)*0.8;
      
    }
    elseif($unidades >=8)
    {
      $descuento=($unidades*$Valor)*0.5;
      $total=($unidades*$Valor)*0.5;
      
    }
    echo("El descuento es de : $" .$descuento);
    echo(" El total a pagar es : $ ".$total);
    
  }
  if (isset($_POST["descuentoFormalDam"]))
  {
    $unidades=$_POST["Dama"];
    $Valor=160000;
    
    if($unidades = 3)
    {
      $descuento=($unidades*$Valor)*0.1;
      $total=($unidades*$Valor)-$descuento;
    }
    elseif($unidades < 3)
    {
      $descuento=($unidades*$Valor)*0;
      $total=($unidades*$Valor);
      
    }
    elseif($unidades > 3 && $unidades < 8)
    {
      $descuento=($unidades*$Valor)*0.2;
      $total=($unidades*$Valor)*0.8;
      
    }
    elseif($unidades >=8)
    {
      $descuento=($unidades*$Valor)*0.5;
      $total=($unidades*$Valor)*0.5;
      
    }
    echo("El descuento es de : $" .$descuento);
    echo(" El total a pagar es : $ ".$total);
    
  }

 





?>








</body>

</html>