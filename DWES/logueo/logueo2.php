<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logueo de usuario</title>
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
    <form action="#" name="formLogueo" method="POST">
        <h1>¡Loguéate!</h1>
        <label for="">Introduzca el nombre del usuario: <input type="text" name="nombreUsu"></label>
        <br><br>
        <label for="">Introduzca la contraseña del usuario: <input type="password" name="passUsu" id=""></label>
        <br><br>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
        <?php
            if(isset($_POST['Enviar']))
            {
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
            }
        ?>  

</body>
</html>