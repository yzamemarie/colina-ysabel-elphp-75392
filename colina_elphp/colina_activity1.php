<?php
    $name = "Ysabel Marie M. Colina"

    //check for vowels
    function isVowel($ch) {
        $ch = strtolower($ch);
    
        return ($ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || $ch == 'u');
    }
    

    //returns vowel count
    function count($name) {
        $count = 0;
        for ($i = 0; $i < strlen($name); $i++) {
            if (isVowel($name[$i])) {
                ++$count;
            }
        }
        return $count;
    }

    echo "The name: $name has $count vowels";
?>