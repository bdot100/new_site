<?php

// function solution($A) {
//     if(count($A) == 0){ return 0; }
//     if(count($A) == 1){ return $A[0]; }
//     sort($A);
//     for($i = 0; $i <= count($A); $i = $i+2){
//         if($i+1 == count($A)){ return $A[$i]; }
//         if($A[$i] != $A[$i+1]){ return $A[$i]; }
//     }
// }

function solution($A) {
    sort($A); //sort the array
    $arrString = implode("-",$A); // make the string

    foreach($A as $a):
        $str = $a . '-' . $a; // generate the string we will search
        if (strpos($arrString, $str) === false) return $a; //if the string dont exist return the number
    endforeach;
}

$A = ['9', '3', '9','3', '9', '7', '9'];
echo solution($A);