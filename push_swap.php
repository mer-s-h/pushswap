<?php
require "function.php";
// $la = [2, 1, 3, 6, 1, 7, 8, 4, 2, 7, 34, 4, 4, 4, 6, 7, 8, 9, 0, 5, 4, 7, 8];

$la = [];
for ($i = 0; $i < 10; $i++) {
    array_push($la, rand(-1000, 1000));
}

// $la = $argv;
$lb = [];
$is_sort = true;
$text = "";

// array_shift($la);

function swap(&$la, &$lb, &$is_sort, &$text)
{
    
    
    while ($is_sort === true) {
        
        if ($la[0] <= $la[1]) {
            pb($la, $lb);
            $text = $text . " pb";
        } elseif ($la[0] > $la[1]) {
            sa($la);
            $text = $text . " sa";
            if (empty($lb)) {
                pb($la, $lb);
                $text = $text . " pb";
            } else {
                pa($la, $lb);
                $text = $text . " pa";
            }
        }
        if (count($la) == 1) {
            foreach ($lb as $key => $value) {
                pa($la, $lb);
                $text = $text . " pa";
            }
            $is_sort = false;
        }
    }
}


swap($la, $lb,$is_sort, $text);
var_dump($la);
echo trim($text).PHP_EOL;

function swap_2(&$la, &$lb, &$text)
{
    foreach ($la as $key => $value) {
        while ($la[0] != min($la)) {
            if ($la[1] == min($la)) {
                sa();
                $text = $text . "sa ";
            }
            else {
                ra();
                $text = $text . "ra ";
            }
            if ($la[0] == min($la)) {
                pb();
                $text = $text . "pb ";
            }

        }
    }
    foreach ($lb as $key => $value) {
        if ($lb == min($lb)) {
            pa();
            $text = $text . "pa ";
        }
    }
}