<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action="#" name="form_hotel" method="POST">
        <label for=""><h3>Cálculo de precio por número de noches introducidas por el usuario</h3></label>
        <label for="">Introduzca el número de noches: <br><input type="text" name="num_noches"></label>
        <br>
        <input type="submit" value="Calcular" name="Calcular">
    </form>
    <?php
        if(isset($_POST['Calcular']))
        {
            $noches = $_POST['num_noches'];

            function costeHotel($noches)
            {
                $precioNoche = 70;
                return $noches * $precioNoche;
            }

            echo "El coste de $noches noches en el hotel sería de " .costeHotel($noches) ." euros.";
            echo "<br>(Nota: El precio por noche es de 70€)";
        }
    ?>
</body>
</html>