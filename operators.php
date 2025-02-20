<?php

$firstNumber=5;
$secondNumber=6;
// $sum=$firstNumber= $secondNumber;
// $sum+=$firstNumber;
// $sum-=$secondNumber;
// $sum*=3;
// $sum/=5;
// $sum%=5;

// echo $sum;

// print($firstNumber==$secondNumber);
// print($firstNumber===$secondNumber);
// print($firstNumber<=>$secondNumber);
//
// $firstNumber++;
// echo ++$firstNumber;
//
// $secondNumber--;
// echo --$secondNumber;

// echo $firstNumber===5 && $secondNumber!==5 ;


// echo !$firstNumber;
// $string1="hello";
// $string2="world";
// $result=$string1.$string2;
// echo $result;
// $string2.=$string2;
// echo $string2;
//
// //conditional  Assignment operators
// //ternary operator
// $firstNumber? "5 is less than 6 ":"6 is greater than 5"

//Null coalescing
$result=$firstNumber ?? $secondNumber ?? 'no default value found';
echo $result;
?>