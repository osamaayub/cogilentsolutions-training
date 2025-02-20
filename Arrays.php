<?php


// $names=array("ali","ahmed","junaid");
// //acessing array items
// // echo $names[0];
// $names[0]="usama";
// // changing array items
// echo " $names[0]<br>";

// //looping arrays
// foreach($names as $x){
//   echo "$x<br>";
// }
// array_push($names,"salman");


//Associate Arrays  


// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// echo $car["model"];
// $car["year"]=1965;
// var_dump($car);

// foreach($car as $x=>$y){
//   echo "$x:$y<br>";
// }


// $cars=[0=>"mustang",1=>"suzuki",2=>"toyota"];
// var_dump($cars); 

// $myArr = [];
// $myArr[0] = "apples";
// $myArr[1] = "bananas";
// $myArr["fruit"] = "cherries"; 

//execute a function item

// function sum($a){
//   echo $a;
// }
// $myArr=array("blue",15,$sum);
// $myArr[2]();

$cars = array("Volvo", "BMW", "Toyota");
// $cars[1] = "Ford";
// $cars[]="orange";

// echo var_dump($cars);


// $cars = array("brand" => "Ford", "model" => "Mustang");
// $cars += ["color" => "red", "year" => 1964];
// var_dump($cars); 


//Delete array items

// array_splice($cars,1,2);
// var_dump($cars);



//sorting arrays 

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// asort($age);
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
var_dump($age);
?>