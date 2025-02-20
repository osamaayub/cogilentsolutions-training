<?php

// $str="Visit Wschools";
// $pattern="/Wschools/i";
// echo preg_match($pattern,$str);

// $str = "The rain in SPAIN falls mainly on the plains.";
// $pattern = "/ain/i";
// echo preg_match_all($pattern, $str)

$str='Visit Microsoft often'; 
$pattern="/n*/";
echo preg_match_all($pattern,$str);
?>