// Arrays en PHP
$a = ["lunes", "martes"];
$b[] = "lunes";
$b[] = "martes";
$c = array("lunes", "martes");

// Añadir valores
$x[] = "miercoles";

// Mostrar lunes 
echo $x[0];

// Arrays asociativos
$datos = array("nombre" => "pepe", "edad" => 20);
echo $datos["nombre"];
foreach($datos as $clave => $valor)
{
    echo "$clave: $valor";
}
$datos["ciudad"] = "madrid";
$datos = array(array("nombre" => "pepe",
                    "edad" => 20
                    )
                array("nombre" => "juan",
                "edad" => 22
                )
        
        )
$datos[1]["edad"];

// Otro caso de array multidimensional
$deportes = array("Motor" => array("Ferrari", "Red Bull", "McLaren"),
                "Baloncesto" => array("Unicaja", "Estudiantes", "Fuenlabrada"),
)
$deportes["baloncesto"][0];

// Y otro caso más de array multidimensional
$alimentos = array("fruta" => array("tropical" => "kiwi",
                                    "citrico" => "naranja",
                                    "otros" => "manzana"),
                    "leche" => array("animal" => "vaca",
                                    "vegetal" => "coco")
                    )
$alimentos["fruta"]["citrico"]; // Para acceder a naranja

// Otra forma con "foreach"
foreach($alimentos as $clave_alim => $alim)
{
    echo "$clave_alim <br>";
    foreach($alim as $clave => $valor)
    {
        echo "$clave = $valor <br>";
    }
}
// Recorrer array
for($i=0; $i<count($x); $i++)
{
    echo $x[$i];
}

