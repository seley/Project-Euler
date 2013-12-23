<?php
/*
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */


function getFactory($n){
    $flag = true;
    for($mid = ceil($n/2);$mid>1;$mid--){
        if( bcmod($n, $mid) == 0){
            $flag = false;
            //echo $mid.'<br />';
            $anotherFactory = $n/$mid;
            //echo $anotherFactory.'<br />';
            getFactory($mid);
            getFactory($anotherFactory);
            break;
        }
    }
    if($flag){
        echo $n.'<br/>';
    }
}
getFactory(600851475143);
?>
