<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function suma()
    {
        static $n = 0;
        // Si pusiéramos ++$n, primero lo incrementa y luego lo ejecuta
        $a = 2+ ++$n;
        echo "$a <br>";
    }
    suma();
    suma();
    suma();
    ?>
</body>
</html>