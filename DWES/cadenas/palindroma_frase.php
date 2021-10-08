<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palíndromo</title>
</head>
<body>
    <form action="#" name="formulario" method="POST">
        <label for="">Introduzca una palabra: <input type="text" name="frase"></label>
        <br>
        <input type="submit" value="Comprobar" name="Comprobar">
        <br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['Comprobar']))
    {

        $frase = $_POST['frase'];

        $cambio = str_replace(" ", "", $frase);
        $invertida = strrev($cambio);

        if(!strcmp($cambio, $invertida))
        {
            echo "Esta frase es palíndroma.";
        }
        else
        {
            echo "Esta frase no es palíndroma.";
        }
    }
?>