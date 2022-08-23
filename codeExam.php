<?php


function solution($X, $B, $Z) {
    // write your code in PHP7.0

    if(count($B) < 2){
        $last_two_avarage = $B[0];

    }else{
        $last_one = $B[count($B) - 1];
        $last_two = $B[count($B) - 2];

        $last_two_avarage = ($last_one  + $last_two) /  $Z;
    }
    
    $all_B = array_sum($B);
    if($X == $all_B){
        return 0;
    }

     $result = (int) ceil(($X - $all_B) / $last_two_avarage);
    if(is_numeric($result) && $result > 0){
        return $result;
    }else{
        return -1;
    }
}

echo solution(100, [10,6,6,8], 2);

// function solution($X) {

//     $txt = "";
//     $i = 0;

//     if($X > 604800){
//         $txt .= floor($X/604800).'w';
//         $X = $X % 604800;
//         $i++;
//     }

//     if($X > 86400){
//         if($i>0){
//             $txt .= ceil($X/86400).'d';
//             return $txt;
//         }else{
//             $txt .= floor($X/86400).'d';
//             $X = $X % 86400;
//         }
//         $i++;
//     }

//     if($X > 3600){
//         if($i>0){
//             $txt .= ceil($X/3600).'h';
//             return $txt;
//         }else{
//             $txt .= floor($X/3600).'h';
//             $X = $X % 3600;
//         }

//         $i++;
//     }

//     if($X > 60){
//         if($i>0){
//             $txt .= ceil($X/60).'m';
//             return $txt;
//         }else{
//             $txt .= floor($X/60).'m';
//             $X = $X % 60;
//         }
//         $i++;
//     }

//     if($X > 0){
//         $txt .= $X.'s';
//     }

//     return $txt;

// }

// echo solution(5);