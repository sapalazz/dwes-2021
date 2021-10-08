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
    function factorial($num)
    {
        $factorial = 1;
        for($i=1; $i <= $num; $i++)
        {
            $factorial = $factorial * $i;
        }
        return $factorial;
    }
    $num = 4;
    $resultado = factorial($num);
    echo "Factorial de $num es $resultado";
    ?>
</body>
</html>