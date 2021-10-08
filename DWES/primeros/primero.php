<html lang="en">
<head>
    <style>
        body{
            margin: 30px;
        }
        .textoRojo{
            color: red;
        }
    </style>
</head>
<body>
    <?php

    // Tanto 'echo' como 'print' son para imprimir en pantalla
    // 'Print' es una función y 'echo' se considera operador
    // Por eso se utiliza más 'echo'
    
        echo "Hola <br>";
        $x = 2;
        echo "comillas dobles: x = $x <br>";
        echo 'comillas simples: x = $x <br>';
        print "x = ".$x;

        include ("primero_2.php");
        echo "<p class='textoRojo'> Texto de prueba en rojo </p>";
        // Alternativa: echo "<p class=\"textoRojo\"> Texto de prueba </p>";
    ?>
</body>
</html>