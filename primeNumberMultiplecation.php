<?php

// Class To Generate Multiplication for first 10 prime numbers
// Author : Mukesh Kumar Seemawat
// Date:08/05/2019

class PrimeNumberMultiplication {

    // Function to generate prime number from given input
    public function generatePrimeNumber($argv) {
        $count = 0;
        $number = 2;
        echo " | ";
        while ($count < $argv[2]) {
            $div_count = 0;
            for ($i = 1; $i <= $number; $i++) {
                if (($number % $i) == 0) {
                    $div_count++;
                }
            }
            if ($div_count < 3) {
                $primeNumberArray[] = $number;

                if ($count == $argv[2] - 1) {
                    echo $number;
                } else {
                    echo $number . " , ";
                }

                $count = $count + 1;
            }
            $number = $number + 1;
        }
        $this->generateMultiplicationTable($primeNumberArray);
    }

    // Function to generate multiplecation table from prime number 
    public function generateMultiplicationTable($primeNumberAsInput) {
        echo "\n";
        echo " + ";
        echo "\n";
        for ($i = 0; $i < sizeof($primeNumberAsInput); $i++) {
            echo $primeNumberAsInput[$i] . "| ";
            for ($j = 0; $j < sizeof($primeNumberAsInput); $j++) {
                $multiTableResult = $primeNumberAsInput[$i] * $primeNumberAsInput[$j];
                echo str_pad($multiTableResult, 5);
            }
            echo "\n";
        }
    }

}

$classObj = new PrimeNumberMultiplication;
$classObj->generatePrimeNumber($argv);
?>
