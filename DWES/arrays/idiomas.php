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
    // Array #1 con nombres de niveles
    $numAlumnos = array("Básico" => array("Francés" => "1",
                                        "Inglés" => "14", 
                                        "Alemán" => "8", 
                                        "Chino" => "3"),
                        "Medio" => array("Francés" => "6", 
                                        "Inglés" => "19", 
                                        "Alemán" => "7", 
                                        "Chino" => "2"),
                        "Avanzado" => array("Francés" => "3", 
                                            "Inglés" => "13", 
                                            "Alemán" => "4", 
                                            "Chino" => "1")
                        );
    #Array #2 con números de niveles (no hace falta el núm. de índice, es automático)
    $numeroAlumnos = array(array("Francés" => "1",
                                        "Inglés" => "14", 
                                        "Alemán" => "8", 
                                        "Chino" => "3"),
                            array("Francés" => "6", 
                                        "Inglés" => "19", 
                                        "Alemán" => "7", 
                                        "Chino" => "2"),
                            array("Francés" => "3", 
                                        "Inglés" => "13", 
                                        "Alemán" => "4", 
                                        "Chino" => "1")
                            );
    echo "<h1>Academia de idiomas</h1>";
    echo "En el nivel básico de francés, hay: " .$numAlumnos['Básico']['Francés'] ." alumnos.";
    echo "<br>En el nivel básico de inglés, hay: " .$numAlumnos['Básico']['Inglés'] ." alumnos.";

    echo "<br><hr>En el nivel básico de francés, hay: " .$numeroAlumnos[0]['Francés'] ." alumnos.";
    echo "<br>En el nivel básico de inglés, hay: " .$numeroAlumnos[0]['Inglés'] ." alumnos.";
    
    echo "<br><hr>";
    // Foreach para recorrer todo el array de "$numAlumnos"
    foreach($numAlumnos as $nivel => $idioma)
    {
        echo "<br><strong>$nivel</strong><br>";
        foreach($idioma as $clave => $valor)
        {
            echo "$clave = $valor alumnos<br>";
        }
    }
    ?>
</body>
</html>