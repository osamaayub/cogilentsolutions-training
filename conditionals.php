<?php
$firstNumber=5;
$secondNumber=6;

// if($firstNumber===5 && $secondNumber===6){
// echo "$firstNumber number is less than $secondNumber"
// }
// else if($secondNumber>$firstNumber){
// echo "$secondNumber number is greater than $firstNumber";
// }

// if ($firstNumber === 5 && $secondNumber === 6) {
//     echo "$firstNumber number is less than $secondNumber;";
// }
// else if ($secondNumber > $firstNumber) {
//     echo "$secondNumber number is greater than $firstNumber;";
// }

// if ($firstNumber === 6 && $secondNumber === 6) {
//     echo "value is false;";
// }
// else if ($secondNumber === 6 || $firstNumber === 5) {
//     echo "$secondNumber value is 6;";
// }

//if and Else condition

// if($firstNumber>$secondNumber){
// echo "$firstNumber is less than $secondNumber;";
// }
// else if($secondNumber<$firstNumber){
// echo "$secondNumber is greater than $firstNumber;";
// }
// else{
// echo "none is greater";
// }

//shorthand if condition

// $a=5;
// if($a<5) $b=10;
//
// echo $b;

// $a=10;
// $b=$a < 10 ? "Hello" :"Goodbye";
// echo $b;

//nested if

$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

?>