<?php
declare(strict_types=1);

/*
 * Week2_Demo_Php_Types index.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-15
 * (c) Copyright 2023 Marc-Eric Boury 
 */


// ##### Variables

// Declaration only:
$my_first_variable; // Note: if you have imported my code style inspections in PhpStorm, this should mark an error.

// Declaration + initialization
$my_second_variable = 5;

// usage:
echo $my_second_variable . "<br/>";
echo "Is > 10 ?: " . ($my_second_variable > 10) . "<br/>";
echo "Is > 3 ?: " . ($my_second_variable > 3) . "<br/>";



// ##### Constants

// Note: if you have imported my code style inspections in PhpStorm, this should mark a warning for missing documentation.
const MY_FIRST_CONSTANT = true;

// Note: if you have imported my code style inspections in PhpStorm, this should mark a warning for missing documentation AND
// a weak warning to replace it with the 'const' syntax.
define("MY_SECOND_CONSTANT", false);