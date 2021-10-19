<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form name="form" action="" method="get">
    <input type = "text" name = "size" id ="size">
</form>

<?php

$size = $_GET['size'];

    function sortowanieBabelkowe($tablicaL)
    {
        do
        {
            $swapped = false;
            for($i = 0, $iloscL = count($tablicaL) - 1; $i < $iloscL; $i++ )
            {
                if($tablicaL[$i] > $tablicaL[$i + 1])
                {
                    list($tablicaL[$i + 1], $tablicaL[$i]) =
                        array($tablicaL[$i], $tablicaL[$i + 1]);
                    $swapped = true;
                }
            }
        }
        while($swapped);
        return $tablicaL;
    }

    $tablicaL = array();
    function rand_num_generator() {
        return rand(1,100);
    }

    for($i=0;$i<$size;$i++) {
        array_push($tablicaL, rand_num_generator());
    }

    echo "Liczby przed sortowaniem :\n";
    print_r($tablicaL);
    echo "<br>";
    echo "\nLiczby po sortowaniu\n:";
    print_r(sortowanieBabelkowe($tablicaL))

    ?>

</body>
</html>