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
 
    <font color="Orange"> <h1 class="h1 text-center">BodyTech</h1></font>                       

  <div class="row">
<div class="col col-8 ">
<h5 class="h5 text-center">El índice de masa corporal (IMC) es un número que se calcula con base en el peso
   y la estatura de la persona. Para la mayoría de las personas, 
   el IMC es un indicador confiable de la gordura y se usa para identificar las categorías 
   de peso que pueden llevar a problemas de salud.</h5>
   <div class="col col-6 text center">
    <img src="img/imc.png" alt="IndiceMasaCorporal" class="img-thumbnail"><a href="#"></a>
    </div>
</div> 
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
        $IMC = $peso/($altura*$altura);
        
        $IMCredondeado = round($IMC,2);
        echo(" El IMC que tienes es : ".$IMCredondeado);
        if ($IMC <= 18.5) 
        {
            echo (" Peso Insuficiente");
        }
        else if($IMC >= 18.5 && $IMC <25)
        {
           echo (" Peso NormoPeso");
        }
        else if($IMC >= 25 && $IMC <27)
        {
            echo(" Peso sobre peso grado I ");
        } 
        else if($IMC >= 27 && $IMC <30)
        {
            echo(" Tienes SobrePeso Grado II ");
        }
        else if($IMC >= 30 && $IMC <35)
        {
            echo(" Tienes Obesidad de Tipo I");
        }
        else if($IMC >= 35 && $IMC <40)
        {
            echo(" Tienes Obesidad Tipo II");
        }
        else if($IMC >= 40 && $IMC <50)
        {
            echo(" Tienes Obesidad Tipo III (Morbida)");
        }
        else if($IMC >=50.0)
        {
            echo(" Tienes Obesidad Tipo VI (Extrema)");
        }
        

    }



?>

              </div>        
        </div>       
    </div>


</body>
</html>