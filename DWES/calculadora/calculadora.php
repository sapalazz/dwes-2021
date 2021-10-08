<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con PHP</title>
    <style>
        .titulazo
        {
            color: grey;
        }

        .cajita
        {
            width: 15px;
            height: 15px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <form action="#" method="POST">
        <h1 class="titulazo">Calculadora con PHP</h1>
        <label for="">Número 1: <input type="text" name="num1" id="" class="cajita"></label><br>
        <label for="">Operador: <input type="text" name="op" id="" class="cajita"></label><br>
        <label for="">Número 2: <input type="text" name="num2" id="" class="cajita"></label><br>
        <input type="submit" value="Calcular" name="BtnCalcular">
    </form>
    <?php
    if(isset($_POST['BtnCalcular']))
    {
        if(($_POST['op']) == "+")
        {
            $resultado_suma = ($_POST['num1']) + ($_POST['num2']);
            echo "<br>El resultado de la suma es: " .$resultado_suma;
        }
        elseif(($_POST['op']) == "-")
        {
            $resultado_resta = ($_POST['num1']) - ($_POST['num2']);
            echo "<br>El resultado de la resta es: " .$resultado_resta;
        }
        elseif(($_POST['op']) == "*")
        {
            $resultado_multiplicacion = ($_POST['num1']) * ($_POST['num2']);
            echo "<br>El resultado de la multiplicación es: " .$resultado_multiplicacion;
        }
        elseif(($_POST['op'] == "/"))
        {
            $resultado_division = ($_POST['num1']) / ($_POST['num2']);
            echo "<br>El resultado de la división es: " .$resultado_division;
        }
        else
        {
            echo "El operador introducido no es correcto.";
        }
    }
    ?>
</body>
</html>