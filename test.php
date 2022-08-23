<?php

print "<h1>hello world!</h1>";
   
    function calPoints($question) {
        $arr = [];
        foreach ($question as $que) {
            # code...
            
            if(is_numeric($que)){
                $arr[] = $que;
            }elseif($que == '+'){
                $arr[] = ($arr[count($arr) - 1]) + ($arr[count($arr) - 2]);
            }elseif($que == 'D'){
                $arr[] = ($arr[count($arr) - 1]) * 2;
            }elseif($que == 'C'){
                array_pop($arr);
            }
            
        }
        return array_sum($arr);
       
    }


    $question = ["5", "2", "C", "D", "+"];

    echo calPoints($question);