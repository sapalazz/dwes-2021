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

    $numero = 10;

    // Con while
    while($numero>0)
    {
         echo "El numero es $numero <br>";
        $numero-=2;
    }

    // Con do ... while REVISAR PORQUE ESTÁ MAL
    do
    {
        if($numero>0)
        {
            $numero-=2;
            echo "<hr> El numero es $numero";
        }
        echo "<hr>";

    }while($numero>=0);

    // Con for
    for($numero=10; $numero>0; $numero-=2)
    {
        echo "El numero es $numero <br>";
    }
    ?>
</body>
</html>