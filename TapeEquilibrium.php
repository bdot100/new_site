<?php

function solution($A) {
    $arr_no = count($A);
    $start = 0;
    foreach ($A as $each_elememt) {
      $start += $each_elememt;
    }
    $highest = 100000;
    $s1 = 0;
    for ($p = 1; $p < $arr_no; $p++) {
      $s1 += $A[$p - 1];
      $s2 = $start - $s1;
      $t = abs($s1 - $s2);
      if ($t < $highest) {
        $highest = $t;
      }
    }
    return $highest;
  }

$A = ['3', '1', '2', '4', '3'];
  echo solution($A);
  ?>