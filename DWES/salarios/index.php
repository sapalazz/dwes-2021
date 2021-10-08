<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salario.php" name="formulario" method="POST">
        <h1>¡Loguéate!</h1>
        <label for="">Introduzca el nombre del usuario: <input type="text" name="nombreUsu"></label>
        <br><br>
        <label for="">Introduzca los apellidos del usuario: <input type="text" name="apellidosUsu" id=""></label>
        <br><br>
        <label for="">Introduzca el salario del usuario: <input type="number" step=".01" name="salarioUsu"></label>
        <br><br>
        <label for="">Introduzca la edad del usuario: <input type="number" name="edadUsu"></label>
        <br><br>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
</body>
</html>