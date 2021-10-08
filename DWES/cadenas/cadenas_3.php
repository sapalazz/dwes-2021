<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de reemplazo de cadenas</title>
</head>
<body>
    <form action="#" name="formulario" method="POST">
        <label for="">Introduzca una frase: <input type="text" name="frase"></label>
        <br>
        <label for="">Introduzca una letra o palabra para cambiar: <input type="text" name="palabra_actual"></label>
        <br>
        <label for="">Introduzca una letra o palabra para cambiar: <input type="text" name="cambio"></label>
        <br>
        <input type="submit" value="Cambiar" name="Cambiar">
        <br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['Cambiar']))
    {
        $frase = $_POST['frase'];
        $palabra_actual = $_POST['palabra_actual'];
        $cambio = $_POST['cambio'];
        $longitud = strlen($frase);


        for($x=0; $x<$longitud; $x++)
        {
            $frasenueva = str_replace($palabra_actual, $cambio, $frase, $count);
        }
 
        echo "La frase introducida era '$frase'.<br>";
        echo "La nueva frase es '$frasenueva'.<br>";

        if($count>1 || $count==0){
            echo "Se han realizado $count reemplazos.";
        }
        else
        {
            echo "Se ha realizado $count reemplazo.";
        }
    }
?>