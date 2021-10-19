<?php

class BubbleSort
{

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

}