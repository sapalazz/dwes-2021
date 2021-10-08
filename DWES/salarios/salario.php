<?php
    if(isset($_POST['Enviar']))
    {
        $nombre = $_POST['nombreUsu'];
        $apellidos = $_POST['apellidosUsu'];
        $salario = $_POST['salarioUsu'];
        $edad = $_POST['edadUsu'];

        if(empty($nombre) || empty($apellidos) || empty($salario || empty($edad)))
        {
            echo "<script>alert('Faltan datos, rellena todos los campos e inténtalo de nuevo.')</script>";
            echo "<a href='index.php'>Volver al formulario anterior.</a>";
        }
        else
        {
            $datos = array("usuario" => array("nombre" => $nombre, "apellidos" => $apellidos, "salario" => $salario, "edad" => $edad));

            echo "<br>--Datos introducidos por el usuario--<br>";
            echo "El nombre es: " .$datos['usuario']['nombre'] ."<br>";
            echo "Los apellidos son: " .$datos['usuario']['apellidos'] ."<br>";
            echo "El salario es: " .$datos['usuario']['salario'] ."<br>";
            echo "La edad es: " .$datos['usuario']['edad'];
            echo "<br><br><strong>--¡NOVEDADES EN TU SALARIO! (O igual no... uwu)--</strong>";

            if ($salario > 2000)
            {
                echo "<br>Lo siento, $nombre. Te quedas con el mismo salario... :(";
            }
            elseif($salario >= 1000 && $salario <= 2000)
            {
                if($edad > 45)
                {
                    $nuevoSalario = $salario*1.03;
                    echo "<br>Enhorabuena, $nombre. Tu antiguo salario era: $salario. Tu nuevo salario será: $nuevoSalario.";
                }
                elseif($edad <= 45)
                {
                    $nuevoSalario = $salario*1.10;
                    echo "<br>Enhorabuena, $nombre. Tu antiguo salario era: $salario €/mes. Tu nuevo salario será: $nuevoSalario €/mes.";
                }
            }
            elseif($salario < 1000)
            {
                if($edad < 30)
                {
                    $nuevoSalario = 1100;
                    echo "<br>Enhorabuena, $nombre. Tu antiguo salario era: $salario €/mes. Tu nuevo salario será: $nuevoSalario €/mes.";
                }
                elseif($edad >= 30 && $edad <= 45)
                {
                    $nuevoSalario = $salario * 1.03;
                    echo "<br>Enhorabuena, $nombre. Tu antiguo salario era: $salario €/mes. Tu nuevo salario será: $nuevoSalario €/mes.";
                }
                elseif($edad > 45)
                {
                    $nuevoSalario = $salario * 1.15;
                    echo "<br>Enhorabuena, $nombre. Tu antiguo salario era: $salario €/mes. Tu nuevo salario será: $nuevoSalario €/mes.";
                }
            }
        }

    }
?> 