<?php
    $n = (int)readline('Enter limit: '); //nth term to find
    
    function gm($n, $r, $a) {        
        $array = [];
        for ($i = 0; $i < $n; $i++) {
            $current_num = $a * pow($r, $i);
            $array[] = $current_num;
        }
            
        foreach ($array as $number) {
            echo $number . ' ';
        }

    }
    
    $a = 1; //starting number
    $r = 2; //common ratio
    
    gm($n, $r, $a);
?>