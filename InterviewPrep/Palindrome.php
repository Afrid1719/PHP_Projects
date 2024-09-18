<?php
function isPalindromeString($str) {
    $str = strtolower(preg_replace('/[^A-Za-z0-9]/', "", $str));
    return $str === strrev($str);
}

print_r(isPalindromeString("A man, a plan, a canal, Panama"));