<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$alimentos = array("fruta" => array("tropical" => "kiwi",
                                    "citrico" => "naranja",
                                    "otros" => "manzana"),
                    "leche" => array("animal" => "vaca",
                                    "vegetal" => "coco")
                    );
$alimentos["fruta"]["citrico"]; // Para acceder a naranja

foreach($alimentos as $clave_alim => $alim)
{
    echo "$clave_alim <br>";
    foreach($alim as $clave => $valor)
    {
        echo "$clave = $valor <br>";
    }
}

?>
</body>
</html>