<?php
/**
 * Task 1: Looping with Increment using a Function
 * Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
 * step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
 * should take the arguments like start as 1, end as 20 and step as 2. You must call the
 * function to print.
 * Also do the same using while loop and do-while loop also.
 */
 
 /** 
  * Printing Even numbers using for loop.
  */
 function printEvenWithFor(int $start = 1, int $end = 20, int $step=2) : void {
     $delimiter = '';
    for($start; $start <= $end; $start += $step) {
        printf('%s%d', $delimiter, ($start % 2 == 0 ? $start : $start + 1));
        $delimiter = ', ';    
    }
 }
echo "Printing Even Number using for loop: \n";
 printEvenWithFor(1, 20, 2);
echo "\n\n";

 /**
  * Print Even numbers using while loop.
  */
  function printEvenWithWhile(int $start = 1, int $end = 20, int $step=2) : void {
      $delimiter = '';
    while($start <= $end) {
        printf('%s%d', $delimiter, ($start % 2 == 0 ? $start : $start + 1));
        $delimiter = ', ';
        $start+= $step;
    }
 }

 echo "Printing Even Number using while loop: \n";
 printEvenWithWhile(1, 20, 2);
 echo "\n\n";


 /**
  * Print Even numbers using do-while loop.
  */
  function printEvenWithDoWhile(int $start = 1, int $end = 20, int $step=2) : void {
      $delimiter = '';
    do {
        printf('%s%d', $delimiter, ($start % 2 == 0 ? $start : $start + 1));
        $delimiter = ', ';
        $start+= $step;
    } while($start <= $end);
 }

 echo "Printing Even Number using do-while loop: \n";
 printEvenWithDoWhile(1, 20, 2);
 echo "\n\n";
