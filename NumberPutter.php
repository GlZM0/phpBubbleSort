<?php
include_once ("WriteArrays.php");
class NumberPutter
{
    function randNumPut($s) {
        $tablicaL = array();

        for($i=0;$i<$s;$i++) {
            array_push($tablicaL, rand(1,100));
        }

        $write = new WriteArrays();
        $write->writer($tablicaL);
    }
}