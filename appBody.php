<?php
include ("RandNumGen.php");
include ("BubbleSort.php");

class appBody
{
    function program() {
        $size = $_GET['size'];

        $bubbleSort = new BubbleSort();
        $tablicaL = array();
        $bubbleSort->sortowanieBabelkowe($tablicaL);

        $numGen = new RandNumGen();

        for($i=0;$i<$size;$i++) {
            array_push($tablicaL, $numGen->rand_num_generator());
        }

        echo "Liczby przed sortowaniem :\n";
        print_r($tablicaL);
        echo "<br>";
        echo "\nLiczby po sortowaniu\n:";
        print_r($bubbleSort->sortowanieBabelkowe($tablicaL));
    }
}