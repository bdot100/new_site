<?php

function solution($N) {
    $gaps = array();
    $s = explode('1', trim(decbin($N),'0'));
    foreach($s as $g){
        $gaps[] = strlen($g);
    }
    return max($gaps);
}

echo solution(32);






// function solution($A) {

//     $B = [];
//     foreach($A as $a){
//         if($a > 0) {
//             $B[] = $a;
//         }
//     }

//     $i = 1;
//     $last = 0;
//     sort($B);

//     foreach($B as $b){

//         if($last == $b){
//             $i--; // Check for repeated elements
//         }
//         else if($i != $b) {
//             return $i;
//         }

//         $i++;
//         $last = $b;
//     }
//     return $i;
// }
// $A = [1, 3, 6, 4, 1, 2];
// echo solution($A);