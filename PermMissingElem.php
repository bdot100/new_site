<?php

function solution($A) {
    $arr_number   = count($A);
    $sum_arr = ($arr_number + 2) * ($arr_number + 1) / 2;
    for ( $i = 0; $i < $arr_number; $i++ ) {
        $sum_arr -= $A[$i];
    }
    return intval($sum_arr);
}

echo solution(['2', '3', '1', '5']);