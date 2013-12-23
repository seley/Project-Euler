<?php
/*
 * A palindromic number reads the same both ways. 
 * The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

function largestPalindrome($digit){
    $maxNum = pow(10, $digit)-1;
    $minNum = pow(10, $digit-1);
    for($i=$maxNum; $i>=$minNum; $i--){
        for($j=$i; $j>=$i-9; $j--){
            $total = $i*$j;
            if(isPalindromic($total)){
                echo $total;
                break;
            }
        }
    }
}

function isPalindromic($num){
    $digit = getNumDigit($num);
    $numPerDigit = array();
    $numPerDigit = getPerDigit($num, $digit);
}

function getNumDigit($num){
    return strlen(strval($num));    
}

function getPerDigit($num, $digit){
    $arr = array();
    for($i=0; $i<$digit; $i++){
        $arr[$i] = floor($num/(pow(10, $digit-$i-1)));
        $num = $num-$arr[$i]*(pow(10, $digit-$i-1));
    }
    return $arr;
}

var_dump(getPerDigit(123, 3));
?>
