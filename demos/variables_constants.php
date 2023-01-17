<?php
declare(strict_types=1);

/*
 * Week2_Demo_Php_Types variables_constants.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-16
 * (c) Copyright 2023 Marc-Eric Boury 
 */



// ##### Variables
echo "<h3>Variables:</h3>"; //display a title

// Declaration only:
$my_first_variable; // Note: if you have imported my code style inspections in PhpStorm, this should mark an error.

// Declaration of a new variable + initialization
$my_second_variable = 5;
echo "Variable value: " . $my_second_variable . " dump: " . var_dump($my_second_variable) ."<br/>";
echo "Is >= 10 ?: " . ($my_second_variable >= 10 ? "true" : "false") . "<br/>";
echo "Is < 10 ?: " . ($my_second_variable < 10 ? "true" : "false")  . "<br/>";

// Redefinition (assigment of a new value)
$my_second_variable = 15;
echo "Variable value: " . $my_second_variable . " dump: " . var_dump($my_second_variable) ."<br/>";
echo "Is >= 10 ?: " . ($my_second_variable >= 10 ? "true" : "false") . "<br/>";
echo "Is < 10 ?: " . ($my_second_variable < 10 ? "true" : "false")  . "<br/>";





// ##### CONSTANTS
echo "<h3>Constants:</h3>";

// Note: if you have imported my code style inspections in PhpStorm, this should mark a warning for missing documentation.
const MY_TRUE_CONSTANT = true;

// Note: if you have imported my code style inspections in PhpStorm, this should mark a warning for missing documentation AND
// a weak warning to replace it with the 'const' syntax.
define("MY_FALSE_CONSTANT", false);

// Usage:
// Note: the define() syntax supports setting expressions as constant values, which the const syntax do not.
const PROJECT_NAME = "Week2_Demo_Php_Types";
const PROJECT_ABS_ROOT = __DIR__;   // Note the use of the magic constant __DIR__ that contains the path to the directory containing the current PHP file.
define("PROJECT_WEB_ROOT", $_SERVER["HTTP_HOST"] . "/" . PROJECT_NAME); // Note the use of the dot as the string concatenation operator

echo "Project root web URL: " . PROJECT_WEB_ROOT . "<br/>";
echo "Project root filesystem path: " . PROJECT_ABS_ROOT . "<br/>";

if (MY_TRUE_CONSTANT) {
    echo "MY_TRUE_CONSTANT is true.<br/>";
}
if (!MY_FALSE_CONSTANT) {
    echo "MY_FALSE_CONSTANT is false.<br/>";
}