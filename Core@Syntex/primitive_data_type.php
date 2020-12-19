<?php
///Code...
$number_type = 1234;
$float_type = 20.20;
$string_type = 'We love PHP!';
$boolean_type = true;
$array_type = ['I\'m here', 22, true, 2.1];
$null_type = null;

//Checking the primitive types here..
//Checked Number..
var_dump($number_type);

//Chekcing Float..
var_dump($float_type);

//Checking String..
var_dump($string_type);

//Checking Boolean..
var_dump($boolean_type);

//Checking Array..
var_dump($array_type);

//Checking Null..
var_dump($null_type);

///The Object Type Data TypeChecking..
class Man{ };
$object_type = new Man();

//Checking Obejct..
var_dump($object_type);

