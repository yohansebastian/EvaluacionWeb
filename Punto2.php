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
            <a class="nav-link" href="Punto3.php">Punto3</a>
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
                <input type="text" class="form-control" placeholder="Digite su Peso en Kilogramos" name="Peso">
                    </div>
                    <div class="col">
                <input type="text" class="form-control" placeholder="Altura" name="Altura">
                    </div>
                 </div>
                 <button type="submit" class="btn btn-primary mt-3" name="operacion" >CALCULAR IMC</button>
                 

            </form>
            <?php

        if(isset($_POST["operacion"]))
    {
        $peso=$_POST["Peso"];
        $altura=$_POST["Altura"];
        function IMC($peso,$altura)
        {
            $IMC = $peso/($altura*$altura);
            return IMC
        }
        $IMC = IMC($peso,$altura);
        if ($IMC <= 18.5) {
            $echo = "Peso Insuficiente";
        }
        else if($IMC > 18.5 AND $IMC <=24.9)
        {
           $echo ="Peso Normo Peso";
        }
        else if($IMC > 25 AND $IMC <26.9)
        {
            $echo="Peso sobre peso grado I ";
        } 
        else if($IMC > 27 AND $IMC <=27.9)
        {
            $echo="Tienes SobrePeso Grado II ";
        }
        else if($IMC > 30 AND $IMC <=34.9)
        {
            $echo="Tienes Obesidad de Tipo I";
        }
        else if($IMC > 35 AND $IMC <=39.9)
        {
            $echo="Tienes Obesidad Tipo II";
        }
        else if($IMC > 40 AND $IMC <=49.9)
        {
            $echo="Tienes Obesidad Tipo III (Morbida)";
        }
        else if($IMC >50.0)
        {
            $echo="Tienes Obesidad Tipo VI (Extrema)";
        }
        $echo "Tu indice de masa corporal es ".$IMC."y tu eres"
        echo "$echo";

    }



?>

              </div>        
        </div>       
    </div>


</body>
</html>