<?php
/**
 * Task 4: Fibonacci Series printing using a Function
 * Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
 * this 15 as an argument of a function and use a for loop to generate these numbers and print
 * them by calling the function.
 */

 function fibonacci(int $max) : void {
    $old = 0;
    $new = 1;
    for($i=0; $i < $max; $i++) {
        echo $old . " ";
        $_temp = $old + $new;
        $new = $old;
        $old = $_temp;
    }
}
$max_number = 15;
echo "First {$max_number} fibonacci numbers are: \n";
fibonacci($max_number);