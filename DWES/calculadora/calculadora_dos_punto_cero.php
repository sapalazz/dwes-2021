<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora española</title>
    <style>

        .cajitaESP
        {
            width: 300px;
            height: 50px;
            background-color: red;
            text-align: center;
            margin-left: 10px;

        }
        .contenedor
        {
            width: 300px;
            height: 120px;
            background-color: yellow;
            margin-left: 10px;
            color: red;
        }
        .cajitaResult
        {
            width: 300px;
            height: 75px;
            background-color: red;
            margin-left: 10px;
            color: yellow;
        }
        .titulazo
        {
            color: yellow;
        }

        .cajita
        {
            width: 15px;
            height: 15px;
            margin: 5px;
        }
        .BtnCalcular
        {
            color: yellow;
            background-color: red;
        }

        .creditos
        {
            color: black;
            font-size: 10px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="cajitaESP"><h1 class="titulazo">Calculadora española</h1></div>
    <div class="contenedor">
        <form action="#" method="POST">
            <label for="">Número 1: <input type="text" name="num1" id="" class="cajita"></label><br>
            <label for="">Operador: 
                <select name="op" id="">
                    <option value="mas">+</option>
                    <option value="menos">-</option>
                    <option value="por">*</option>
                    <option value="division">/</option>
                </select>
            </label><br>
            <label for="">Número 2: <input type="text" name="num2" id="" class="cajita"></label><br>
            <input type="submit" value="Calcular" name="BtnCalcular" class="BtnCalcular">
        </form>
    </div>
    <div class="cajitaResult">
        <?php
        if(isset($_POST['BtnCalcular']))
        {
            $num1 = ($_POST['num1']);
            $num2 = ($_POST['num2']);

            if(($_POST['op']) == 'mas')
            {
                $resultado_suma = $num1+$num2;
                echo "<br>El resultado de la suma es: " .$resultado_suma;
            }
            elseif(($_POST['op']) == 'menos')
            {
                $resultado_resta = $num1-$num2;
                echo "<br>El resultado de la resta es: " .$resultado_resta;
            }
            elseif(($_POST['op']) == 'por')
            {
                $resultado_multiplicacion = $num1*$num2;
                echo "<br>El resultado de la multiplicación es: " .$resultado_multiplicacion;
            }
            
            elseif(($_POST['op'] == 'division'))
            {
                $resultado_division = $num1/$num2;
                echo "<br>El resultado de la división es: " .$resultado_division;
            }
            
        }
        ?>
        <p class="creditos">Desarrollada por S. P. en 2021</p>
    </div>
</body>
</html>