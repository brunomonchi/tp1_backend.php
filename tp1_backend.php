<!DOCTYPE html>
<html>
  <head>
    <title>Primer trabajo practico de backend</title>
  </head>
  <body>
    <?php
    $saludo = "Hola mundo \n";
    echo $saludo;
    $primer_numero = 6;
    $segundo_numero = 8;
    echo "<br>";
    echo "Operaciones matematicas con el 6 y el 8: \n";
    echo "<br>";
    echo "Suma: \n";
    echo $primer_numero + $segundo_numero;
    echo "<br>";
   echo "Resta:\n";
   
    echo $primer_numero - $segundo_numero;
    echo "<br>";
    echo "Multiplicacion \n";
    echo $primer_numero * $segundo_numero;
    echo "<br>";
    echo "Division \n";
    echo $primer_numero / $segundo_numero;
    echo "<br>";
    echo "Transformacion de 20 grados Celcius a Farenheit:\n";
    $grados = 20;
    echo ($grados  * 9/5) + 32;
    echo "<br>";
    echo "Perimetro y area de un rectangulo cuya base es de 18 cm y su altura de 12cm: \n";
    $base = 18;
    $altura = 12;
    echo "<br>";
    echo "Perimetro: \n";
    echo ($base * 2 )  + ($altura * 2);
    echo "<br>";
    echo "Area: \n";
    echo $base * $altura;
    echo "<br>";
    echo "Area y perimetro de un circulo cuyo radio es de 30cm: \n";
    $radio = 30;
    echo "<br>";
    echo "Perimetro: \n";
    echo (2*3.14)*$radio;
    echo "<br>";
    echo "Area: \n";
    echo 3.14 * ($radio * $radio);

    


    ?>
  </body>
</html>