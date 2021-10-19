<?php
include_once ("WriteArrays.php");
include_once ("NumberPutter.php");

class appBody
{
    function program() {
        $size = $_GET['size'];

        $numPut = new NumberPutter();
        $numPut->randNumPut($size);
    }
}