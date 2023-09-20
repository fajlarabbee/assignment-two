<?php
/**
 * Task 3: Break on Condition
 * Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
 * Fibonacci number is greater than 100, break out of the loop using the break statement.
 */

$old = 0;
$new = 1;
$max = 20;
$break_on = 100;
for($i=0; $i < $max; $i++) {
    if($old > $break_on) break;
    echo $old . " ";
    $_temp = $old + $new;
    $new = $old;
    $old = $_temp;
}