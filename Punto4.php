<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto4</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php">EvaluacionWEB1</a>
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
    <h1 class="h1 text-center">Postobon Sueldo-Semanal<h1>

            <form class="mt-3" action="Punto4.php" method="POST">
                <div class="row text-center">
                    <div class="col col-6 center">
                        <img src="img/posto.jpeg" alt="LogoPostobon" class="img-thumbnail"><a href="#"></a>
                        <input type="text" class="form-control" name="Horas" placeholder=" Numero de Horas Trabajadas ">
                    </div>

                </div>
                <div class="row p-2">
                    <div class="col col-4 text center">
                        <button type="submit" class="btn btn-danger mt-4" name="SalarioBasico">Calcular Salario
                            Basico</button>
                    </div>
                </div>
            </form>

 <?php

    if(isset($_POST["SalarioBasico"]))
    {
        $Hora=$_POST["Horas"];
        
        if($Hora <= 40 )
        {
            $horas=$Hora*20000;
        }
        elseif($Hora > 40)
        {
            $HoraExt=($Hora - 40)*25000;
            $horas=($Hora*20000) + $HoraExt;

        }
        echo( " El Sueldo Semanal que tendras es de $ ".$horas);

    }




?>

</body>

</html>