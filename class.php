<?php

class person{
  public $name;
  public $age;
  public   function __construct($age,$name)
  {
    $this->name=$name;
    $this->age=$age;
  }
  public function displayPersonInformation(){
    return "$this->name ,$this->age";
  }
}

$Person=new person("Ali",25);
$Person->displayPersonInformation();
var_dump($Person);
?>