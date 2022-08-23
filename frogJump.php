<?php

function solution($X, $Y, $D) {
    // write your code in PHP7.0
    if (($Y - $X) % $D == 0) {
        return ($Y - $X) / $D;
    }
    return ($Y - $X) / $D + 1;
}

echo solution(10, 85, 30);