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

// Recorrer array
for($i=0; $i<count($x); $i++)
{
    echo $x[$i];
}

