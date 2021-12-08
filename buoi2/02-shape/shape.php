<?php 
    $height = 3;
    $character = "A";
    $delimiter = '&nbsp';
    
    function printA($height, $character, $delimiter){
        if($height >= 1){
            for( $i= 1 ; $i <= $height; $i++){
                echo str_repeat("$character$delimiter",$i)."<br>";
            }
        }
    }

    printA($height, $character, $delimiter);