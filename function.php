<?php

function sa()
{    //switch les deux premier $la
    global $la;

    if ($la[0] > $la[1]) {

        $index = $la[0];
        $la[0] = $la[1];
        $la[1] = $index;
    }
}

function sb()
{  //switch les deux premier $lb
    global $lb;

    if ($lb[0] > $lb[1]) {

        $index = $lb[0];
        $lb[0] = $lb[1];
        $lb[1] = $index;
    }
}

function sc()
{
    sa();
    sb();
}

function pa()
{      // de $lb a $la
    global $la, $lb;

    if (!empty($lb)) {

        array_unshift($la, $lb[0]);
        array_shift($lb);
    }
}

function pb()
{      // de $la a $lb
    global $la, $lb;

    if (!empty($la)) {

        array_unshift($lb, $la[0]);
        array_shift($la);
    }
}


function ra()
{      // le premier $la devient le dernier
    global $la;
    array_push($la, $la[0]);
    array_shift($la);
}

function rb()
{      // le premier $lb devient le dernier
    global $lb;
    array_push($lb, $lb[0]);
    array_shift($lb);
}

function rr()
{
    ra();
    rb();
}

function rra()
{     //le dernier $la devient le premier
    global $la;

    array_unshift($la, $la[array_key_last($la)]);
    array_pop($la);
}

function rrb()
{     //le dernier $lb devient le premier
    global $lb;

    array_unshift($lb, $lb[array_key_last($lb)]);
    array_pop($lb);
}

function rrr()
{
    rra();
    rrb();
}
