<?php

/* function add($dump) {

    var_dump($dump);
    die();
} */

if (!function_exists('dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            VarDumper::dump($v);
        }
 
        die(1);
    }
}