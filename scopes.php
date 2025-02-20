<!DOCTYPE html>
<html>
<body>

<?php
$age = 5; // global scope
 
function printAge() {
  static $age=25;
  $age++;
  // using x inside this function will generate an error
  print( '<p>Variable x inside function is: $age</p>');
} 
printAge();

print( '<p>Variable x outside function is: $age</p>');
?>

</body>
</html>