<?php

    if(isset($_POST["operacion"]))
    {
        $peso=$_POST["Peso"];
        $altura=$_POST["Altura"];
        function IMC($peso,$altura)
        {
            $IMC=$peso/($altura*$altura);
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