<?php
// ----------------------------------Fibonacci Series

// Function to generate Fibonacci series
// function generateFibonacciSeries($n) {
//     $fib = [0, 1];
//     for ($i = 2; $i < $n; $i++) {
//         $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
//     }
//     return $fib;
// }

// Example usage
// $n = 100;
// $start_time = microtime(true);
// $fibonacci_series = generateFibonacciSeries($n);
// $end_time = microtime(true);
// $execution_time = $end_time - $start_time;
// echo "Fibonacci series: " . implode(", ", $fibonacci_series) . "\n";
// echo "Execution time: " . $execution_time . " seconds\n";


//--------------------------------- Prime Numbers

// Function to check if a number is prime
// function isPrime($num) {
//     if ($num <= 1) return false;
//     if ($num == 2) return true;
//     if ($num % 2 == 0) return false;

//     for ($i = 3; $i <= sqrt($num); $i += 2) {
//         if ($num % $i == 0) return false;
//     }
//     return true;
// }

// Function to generate a list of prime numbers
// function generatePrimeNumbers($n) {
//     $primes = [];
//     $count = 0;
//     $num = 2;
//     while ($count < $n) {
//         if (isPrime($num)) {
//             $primes[] = $num;
//             $count++;
//         }
//         $num++;
//     }
//     return $primes;
// }

// Example usage
// $n = 10;
// $start_time = microtime(true);
// $prime_numbers = generatePrimeNumbers($n);
// $end_time = microtime(true);
// $execution_time = $end_time - $start_time;
// echo "Prime numbers: " . implode(", ", $prime_numbers) . "\n";
// echo "Execution time: " . $execution_time . " seconds\n";


// -------------------------------Natural Numbers

// Function to generate a list of natural numbers
// function generateNaturalNumbers($n) {
//     $naturals = [];
//     for ($i = 1; $i <= $n; $i++) {
//         $naturals[] = $i;
//     }
//     return $naturals;
// }

// Example usage
// $n = 10;
// $start_time = microtime(true);
// $natural_numbers = generateNaturalNumbers($n);
// $end_time = microtime(true);
// $execution_time = $end_time - $start_time;
// echo "Natural numbers: " . implode(", ", $natural_numbers) . "\n";
// echo "Execution time: " . $execution_time . " seconds\n";


// -------------------------------Pyramid Pattern

// Function to print a pyramid pattern
// function printPyramidPattern($n) {
//     if ($n <= 0) {
//         return;
//     }

//     // Start time measurement
//     $startTime = microtime(true);

//     // Print the pyramid pattern
//     for ($i = 1; $i <= $n; $i++) {
//         for ($j = $i; $j < $n; $j++) {
//             echo " ";
//         }
//         for ($j = 1; $j <= (2 * $i - 1); $j++) {
//             echo "*";
//         }
//         echo "\n";
//     }

//     // End time measurement
//     $endTime = microtime(true);

//     // Calculate and print the time taken
//     $executionTime = $endTime - $startTime;
//     echo "Start Time: " . $startTime . "\n";
//     echo "End Time: " . $endTime . "\n";
//     echo "Execution Time: " . $executionTime . " seconds\n";
// }

// Example usage
// $n = 5;
// printPyramidPattern($n);

// ----------------------------------Array Key Exists

// Function to check if a key exists in an array and return its value
// function getArrayKeyValue($array, $key) {
//     if (array_key_exists($key, $array)) {
//         return [$key => $array[$key]];
//     } else {
//         return null; // Return null if the key does not exist
//     }
// }

// Example usage
// $array = [
//     'a' => 1,
//     'b' => 2,
//     'c' => 3,
//     'd' => 4,
//     'e' => 5
// ];

// // Check for a specific key
// $keyToCheck = 'c';
// $result = getArrayKeyValue($array, $keyToCheck);

// if ($result !== null) {
//     print_r($result); // Outputs: Array ( [c] => 3 )
// } else {
//     echo "The key '$keyToCheck' does not exist in the array.\n";
// }


// --------------------------------Find Index Number in Array

// Function to find indexes of two numbers in an array that add up to a target
// function findIndexes($array, $target) {
//     $n = count($array);

//     for ($i = 0; $i < $n; $i++) {
//         for ($j = $i + 1; $j < $n; $j++) {
//             if ($array[$i] + $array[$j] == $target) {
//                 return [$i, $j];
//             }
//         }
//     }
// }

// Example usage
// $array = [1, 2, 3, 4, 5, 5, 6, 7];
// $target = 4;
// $indexes = findIndexes($array, $target);
// print_r($indexes);
// echo "Indexes found: " . implode(", ", $indexes) . "\n";


// ------------------------------GCD Finder--
// function findGCD($arr) {
//     sort($arr);

//     $max = array_pop($arr);
//     $arrcount = count($arr);

//     for ($i = 1;; $i++) {
//         $count = 0;
//         for ($j = 0; $j < $arrcount; $j++) {
//             if (($max * $i) % $arr[$j] == 0) {
//                 $count++;
//             }
//         }
//         if ($count == $arrcount) {
//             return $max * $i;
//         }
//     }
// }

// Example usage
// $arr = [12, 3, 9];
// echo "GCD: " . findGCD($arr) . "\n";

// -----------------------------LCM Finder

// Function to find the LCM of an array of numbers
// function findLCM($arr) {
//     sort($arr);

//     $min = array_shift($arr);
//     $arrcount = count($arr);

//     for ($i = 1;; $i++) {
//         $count = 0;
//         for ($j = 0; $j < $arrcount; $j++) {
//             if (($min * $i) % $arr[$j] == 0) {
//                 $count++;
//             }
//         }
//         if ($count == $arrcount) {
//             return $min * $i;
//         }
//     }
// }

// Example usage
// $arr = [12, 3, 9];
// echo "LCM: " . findLCM($arr) . "\n";
?>
