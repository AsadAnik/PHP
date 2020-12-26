<?php
///Code...
//Declaring the Constant Variable..
define("USER_NAME", 'asadanik', false);
echo "USER_NAME: ".USER_NAME;

echo "\n";

//Declaring with case-sensativity..
define("username", "wembledon", false);
echo "username: ".username."\n";

//Another way of Declaring Constant Variable..
const yourName = "Tomas Adreson!";
echo("Your Name : ".yourName."\n");


///==== The Magic Constants ====///
// __LINE__ ...
echo __LINE__ ."\n";

// __FILE__ ...
echo __FILE__ ."\n";

// __DIR__ ...
echo __DIR__ ."\n";

// __FUNCTION__ ...
echo __FUNCTION__ ."\n";

// __CLASS__ ...
echo __CLASS__ ."\n";

// __TRAIT__ ...
echo __TRAIT__ ."\n";

// __METHOD__ ...
echo __METHOD__ ."\n";

// __NAMESPACE__ ...
echo __NAMESPACE__ ."\n";

///==== The Predefined Constants ====///
// PHP_VERSION ...
echo PHP_VERSION ."\n";

// PHP_EOL ...(new line between)
echo "Hello All,";
echo PHP_EOL ."\n";
echo "How are you!. \n";


