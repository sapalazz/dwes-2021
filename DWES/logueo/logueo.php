<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logueo PHP</title>
    <style>
        .correcto
        {
            color: green;
        }

        .incorrecto
        {
            color: red;
        }
    </style>
</head>
<body>
    <?php

    $usuarioV = 'Sara';
    $passV = 'sarupi27';

    $usuario = $_POST['nombreUsu'];
    $password = $_POST['passUsu'];

    if($usuario == $usuarioV && $password == $passV)
    {
        echo "<p class='correcto'>Usuario correcto. Bienvenida, $usuario.</p>";
    }else{
        echo "<p class='incorrecto'>Usuario incorrecto. Inténtelo de nuevo.</p>";
    }
    ?>
</body>
</html>

