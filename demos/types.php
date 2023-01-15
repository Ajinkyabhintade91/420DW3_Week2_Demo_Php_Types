<?php
declare(strict_types=1);

/*
 * Week2_Demo_Php_Types types.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-15
 * (c) Copyright 2023 Marc-Eric Boury 
 */


// I include my own personnal debug functions to display more easily arrays and objects during the demo.
include_once "helpers/debug_functions.php";


echo "<h1>Types:</h1>";



// ##### NULL
echo "<h3>Null:</h3>";
$undefined_var;
$null_var = null;
$null_var = null;
echo '$null_var is ['.$null_var.'] debug: '.debug($null_var, false).'<br/>';
// Note the use of string interpolation; the variable used inside the double-quoted string.
echo "\$undefined is [$undefined] export: ".debug($undefined, false)."<br/>";



// ##### Booleans
echo "<h3>Booleans:</h3>";
$true = true;
$false = false;
// Note what values PHP uses when transforming booleans into strings
echo '$true is ['.$true.'] debug: '.debug($true, false).'<br/>';
echo '$false is ['.$false.'] debug: '.debug($false, false).'<br/>';



// ##### Integers
echo "<h3>Integers:</h3>";
$an_int = 32;             // decimal 32
$binary_int = 0b100000;   // binary 32 (zero-b '0b' prefix)
$octal_int = 0o40;        // octal 32 (zero-o '0o' prefix)
$heaxadecimal_int = 0x20; // hexadecimal 32 (zero-x '0x' prefix)
$int_size = PHP_INT_SIZE;
$max_int = PHP_INT_MAX;
$min_int = PHP_INT_MIN;
echo '$an_int is ['.$an_int.'] debug: '.debug($an_int, false).'<br/>';
echo '$binary_int is ['.$binary_int.']<br/>';
echo '$octal_int is ['.$octal_int.']<br/>';
echo '$heaxadecimal_int is ['.$heaxadecimal_int.']<br/>';
echo '$int_size is ['.$int_size.'] Bytes ('.($int_size * 8).' bits)<br/>';
echo '$max_int is ['.$max_int.']<br/>';
echo '$min_int is ['.$min_int.']<br/>';



// ##### Floats
echo "<h3>Floats:</h3>";
$a_float = 1234.567;
$a_float_sci = 1.234567E3; // scientific notation literal = 1.234567 * 10^3
echo '$a_float is ['.$a_float.'] debug: '.debug($a_float, false).'<br/>';
echo '$a_float_sci is ['.$a_float_sci.'] debug: '.debug($a_float_sci, false).'<br/>';



// ##### Strings
echo "<h3>Strings:</h3>";
$doublequoted_string = "hello there!";
$singlequoted_string = 'General Kenobi! You are a bold one...';
$concatenated_string = $doublequoted_string." -".$singlequoted_string;
$heredoc_string = <<<HEREDOC
This
is
a
heredoc
block.
HEREDOC;
$nowdoc_string = <<<NOWDOC
This
is
a
nowdoc
block.
NOWDOC;
$string_interpolation = "$doublequoted_string -$singlequoted_string";
echo '$doublequoted_string is ['.$doublequoted_string.'] debug: '.debug($doublequoted_string, false).'<br/>';
echo '$singlequoted_string is ['.$singlequoted_string.'] debug: '.debug($singlequoted_string, false).'<br/>';
echo '$concatenated_string is ['.$concatenated_string.'] debug: '.debug($concatenated_string, false).'<br/>';
echo '$heredoc_string is ['.$heredoc_string.'] debug: '.debug($heredoc_string, false).'<br/>';
echo '$nowdoc_string is ['.$nowdoc_string.'] debug: '.debug($nowdoc_string, false).'<br/>';
echo '$string_interpolation is ['.$string_interpolation.'] debug: '.debug($string_interpolation, false).'<br/>';



// ##### Arrays
echo "<h3>Arrays:</h3>";
$indexed_array = ["so", "uncivilized"];
$associative_array = ["word1" => "so", "word2" => "uncivilized"];
$multi_dimensional_array = ["array1" => $indexed_array, "array2" => $associative_array, "array3" => [1, 2, 3, 4, 5]];
$longform_array = array(1, 2, 3, "potatoes", [4, 5]);
$longform_assoc_array = array("first" => "first!", "second" => "dammit!");
echo '$indexed_array debug: '.debug($indexed_array, false).'<br/>';
echo '$associative_array debug: '.debug($associative_array, false).'<br/>';
echo '$multi_dimensional_array debug: '.debug($multi_dimensional_array, false).'<br/>';
echo '$longform_array debug: '.debug($longform_array, false).'<br/>';
echo '$longform_assoc_array debug: '.debug($longform_assoc_array, false).'<br/>';



// ##### Objects
echo "<h3>Objects:</h3>";
// class definition for object type 'AnObject'
class AnObject {
    // a property
    public int $anIntProperty;
    
    // the constructor (ALWAYS named __construct)
    public function __construct(int $anInteger) {
        $this->setIntProperty($anInteger);
    }
    
    // a getter-type method
    public function getIntProperty() : int {
        return $this->anIntProperty;
    }
    
    // a setter-type method
    public function setIntProperty(int $anInteger) : void {
        $this->anIntProperty = $anInteger;
    }
}

$an_object = new AnObject(32);
echo '$an_object debug: '.debug($an_object, false).'<br/>';

// Transforming other types in 'default' objects (stdClass)
// because the object has no defined class, my debug function cannot display it. We will use the built-in var_dump().
$an_object_from_array = (object) ["firstElement" => 1, "secondElement" => "a string"];
echo '$an_object_from_array dump: <br/>';
var_dump($an_object_from_array);
echo "<br/>";

$int_to_object = (object) 55;
echo '$int_to_object dump: <br/>';
var_dump($int_to_object);
echo '<br/>';

$bool_to_object = (object) true;
echo '$bool_to_object dump: <br/>';
var_dump($bool_to_object);
echo '<br/>';

// cloning (copying) an object
$object_copy = clone $an_object;
// creating dynamic properties of an object. Note: the IDE marks an error because this is bad practice.
$object_copy->newProperty = "a new property!";
// because the object has a dynamic property, my debug function cannot display them. We will use the built-in var_dump().
echo '$object_copy dump: <br/>';
var_dump($object_copy);
echo '<br/>';