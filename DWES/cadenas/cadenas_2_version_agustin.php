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
        <label for="">Introduzca una palabra que esté en la frase: <input type="text" name="palabra1"></label>
        <br>
        <label for="">Introduzca una segunda palabra para sustituir la primera: <input type="text" name="palabra2"></label>
        <br>
        <input type="submit" value="Sustituir" name="Sustituir">
        <br>
    </form>
</body>
</html>
<?php
    if(isset($_POST['Sustituir']))
    {
        $frase = $_POST['frase'];
        $palabra1 = $_POST['palabra1'];
        $palabra2 = $_POST['palabra2'];

        $palabras = explode(" ", $frase);
        for($x=0; $x<count($palabras); $x++)
        {
            if($palabras[$x]==$palabra1)
            {
                $palabras[$x] = $palabra2;
            }
            echo "$palabras[$x]" ." ";
        }
    }
?>