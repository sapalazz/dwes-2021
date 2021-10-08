<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio autónomo de PHP 1</title>
</head>
<body>
    <?php

    /* Esta inicialización se ha hecho en la función cargar(&$x, &$y)
    Si no inicializamos aquí y no ponemos el & en cargar, las variables no tendrían ningún valor.
    $x = 3;
    $y = 5;
    $aux;
    */

    // Primero, creamos las funciones
    function cargar(&$x, &$y)
    {
        $x = 3;
        $y = 5;
    }

    function mostrar($x, $y)
    {
        echo "El primer número es $x, el segundo es $y.";
    }

    function intercambiar(&$x, &$y)
    {
        // Algoritmo de ordenación (burbuja)
        $aux = $x;
        $x = $y;
        $y = $aux;
        /*
        echo "<br><hr> <h3>Después de intercambiar:</h3>";
        echo "<br> El primer número AHORA es $x, el segundo número AHORA es $y.";
        */
    }

    // Después llamamos a las funciones
    cargar($x, $y);
    mostrar($x, $y);
    intercambiar($x, $y);
    echo "<br><h4>Después de intercambiar: </h4>";
    mostrar($x, $y);

    ?>
</body>
</html>
