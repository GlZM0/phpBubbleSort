<?php
include_once ("BubbleSort.php");
class WriteArrays
{
    function writer($tablicaL) {
        $bubbleSort = new BubbleSort();
        echo "Liczby przed sortowaniem :\n";
        print_r($tablicaL);
        echo "<br>";
        echo "\nLiczby po sortowaniu\n:";
        print_r($bubbleSort->sortowanieBabelkowe($tablicaL));
    }

}