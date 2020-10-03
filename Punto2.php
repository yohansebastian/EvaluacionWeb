<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto2</title>
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
  <h4 class="h4 text-center" >Punto Nº2 </h4>

  
    <div class="col">
  <h5 class="h5 text-center">2.El gimnasio Bodytech, lo contrata para desarrollar una
                             a  plicación web<br> que permita a sus usuarios calcular el índice
                            de masa corporal.</h5>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col 4">
            <form class="mt-3" action="Punto2.php" method="POST">
            <h4 align="center">Calcula tu indice de masa corporal</h4>
                <div class="row">
                    <div class="col">
                <input type="text" class="form-control" placeholder="Peso" name="Peso">
                    </div>
                    <div class="col">
                <input type="text" class="form-control" placeholder="Altura" name="Altura">
                    </div>
                 </div>
                 <button type="submit" class="btn btn-primary mt-3" name="operacion" >CALCULAR IMC</button>
            </form>

        <?php

         if (isset($_POST["operacion"])){
          $Peso=$_POST["Peso"];
          $Altura=$_POST["Altura"];

          $operacion= $Peso / ($Altura * $Altura);

          if($operacion < 18.5)
          echo("Tienes Peso Insuficiente");
          
        
          
          

          
         }





        ?>















            </div>        
        </div>       
    </div>


</body>
</html>