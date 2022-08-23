<?php

function solution($A, $k) {
    $n = count($A);
    $R = [];
    if ($n != 0) {
        $k %= $n;
    }

    for ($i = 0; $i < $n; $i++) {
      $R[$i] = $A[$i - $k + ($i < $k ? $n : 0)];
    }
    return $R;
  }

  $A = [1, 2, 3, 4];
  $k = 4;

  print_r(solution($A, $k));