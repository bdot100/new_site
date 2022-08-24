<?php

function compareTriplets($a, $b) {
    // Write your code here
    $a_point = 0;
    $b_point = 0;
    
    for ($i=0; $i < 3; $i++) {
        if($a[$i] > $b[$i]){
            $a_point += 1;
         }
         if($b[$i] > $a[$i]){
            $b_point += 1;
         }
    }

    return [$a_point, $b_point];
}
print_r(compareTriplets([5,6,7], [3,6,10]));


function diagonalDifference($arr) {
    
    $left_sum = 0;
    $right_sum = 0;
    for ($i=0; $i < count($arr); $i++) { 
        $left_d = $arr[$i][$i];
        $right_d = $arr[$i][count($arr) - $i - 1];
        $left_sum += $left_d;
        $right_sum += $right_d;
    }
    return abs($left_sum - $right_sum);
}

function plusMinus($arr) {

    $num_of_elements = count($arr);
    $num_of_pos = 0;
    $num_of_neg = 0;
    $num_of_zero = 0;
    //to check the positive numbers
    foreach ($arr as $value) {
        if($value > 0){
            $num_of_pos += 1;
        }
        if($value < 0){
            $num_of_neg += 1;
        }
        if($value == 0){
            $num_of_zero += 1;
        }
    }

    echo $pos = number_format($num_of_pos/$num_of_elements, 6). "<br />";
    echo $neg = number_format($num_of_neg/$num_of_elements, 6). "<br />";
    echo $zero = number_format($num_of_zero/$num_of_elements, 6)."<br />";

}

$arr = [-4, 3, -9, 0, 4, 1];
echo plusMinus($arr);


function staircase($n) {
    for($i=1; $i<=$n; $i++){
        for ($j=1; $j <= $n; $j++){
         if ($j > $n-$i){
             echo "#";
         } else echo " ";
        }
        echo "<br />";
    }
 }
 echo staircase(4);



function miniMaxSum($arr) {
    sort($arr);
    $min_value = array_shift($arr);
    $max_value = array_pop($arr);
    $total = 0;
    foreach ($arr as $value) {
         $total += $value;
    }

    $min = $min_value + $total;  
    $max = $max_value + $total;
    return $min." ".$max;
}

$arr = array(7, 69, 2, 2, 221, 8974);
print_r(miniMaxSum($arr));


function birthdayCakeCandles($candles) {
    // Write your code here
    sort($candles);
    $highest_value = max($candles);
    return array_count_values($candles)[$highest_value];
}

$candles = array(3, 3, 3, 4, 5, 6, 7, 7, 7, 7, 7, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 2);
print_r(birthdayCakeCandles($candles));


function timeConversion($s) {
    // Write your code here
    return date("H:i:s", strtotime($s));
}

function fizzBuzz($n) {
    // Write your code here
    $n = range(1, $n);
    foreach ($n as $number) {
        if($number % 3 == 0 && $number % 5 == 0){
            echo "FizzBuzz";
            echo "<br/>";
        }
        elseif ($number % 3 == 0 && $number % 5 != 0) {
            echo "Fizz";
            echo "<br/>";
        }
        elseif ($number % 3 != 0 && $number % 5 == 0) {
            echo "Buzz";
            echo "<br/>";
        }
        else {
            echo $number;
            echo "<br/>";
        }
    }
}

echo fizzBuzz(15);