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

?>
