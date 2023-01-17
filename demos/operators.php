<?php
declare(strict_types=1);

/*
 * Week2_Demo_Php_Types operators.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-16
 * (c) Copyright 2023 Marc-Eric Boury 
 */



// ##### ARITHMETIC OPERATORS
echo "<h3>Arithmetic operators:</h3>";
$an_int = 5;
$another_int = 12;
$a_numeric_string = "8";
echo "Indentity: +\"8\" = ". +$a_numeric_string . "<br/>";
echo "Negation: -5 = " . -$an_int . "<br/>";
echo "Addition: 5 + 12 = ". ($an_int + $another_int) . "<br/>";
echo "Subtraction: 12 - 5 = " . ($another_int - $an_int) . "<br/>";
echo "Multiplication: 12 * 5 = " . ($another_int * $an_int) . "<br/>";
echo "Division: 12 / 5 = " . ($another_int / $an_int) . "<br/>";
echo "Modulo: 12 % 5 = " . ($another_int % $an_int) . "<br/>";
echo "Exponentiation: 12 ** 5 = " . ($another_int ** $an_int) . "<br/>";



// ##### STRING OPERATOR
echo "<h3>String concatenation:</h3>";
echo "\"Hello \" . \"world!\" = ". "Hello "."world!" . "<br/>";



// ##### REFERENCE OPERATOR
echo "<h3>Reference operator:</h3>";
echo "\$var = 5;<br/>";
$var = 5;
echo "\$var_2 = &\$var;<br/>";
$var_2 = &$var;
echo "\$var_2 = 10;<br/>";
$var_2 = 10;
echo "Value of \$var: ".$var."<br/>";



// ##### ASSIGNMENT & COMPOUND OPERATORS
echo "<h3>Assignment & Compound operators:</h3>";
$var_3 = 5;
echo "Base assignment: \$var_3 = 5;<br/>";
$var_3 += 5;
echo "Addition-assignment: \$var_3 += 5; // value of \$var_3: ".$var_3."<br/>";
$var_3 -= 2;
echo "Subtraction-assignment: \$var_3 -= 2; // value of \$var_3: ".$var_3."<br/>";
$var_3 *= 3;
echo "Multiplication-assignment: \$var_3 *= 3; // value of \$var_3: ".$var_3."<br/>";
$var_3 /= 4;
echo "Division-assignment: \$var_3 /= 4; // value of \$var_3: ".$var_3."<br/>";
$var_3 %= 4;
echo "Modulo-assignment: \$var_3 %= 4; // value of \$var_3: ".$var_3."<br/>";
$var_3 **= 3;
echo "Exponentiation-assignment: \$var_3 **= 3; // value of \$var_3: ".$var_3."<br/><br/>";

// Null-coalesce-assignment
echo "Null-coalesce-assignment:<br/>";
$var_4 = null;
echo "\$var_4 = null;<br/>";
$var_5 = 18;
echo "\$var_5 = 18;<br/>";
$var_4 ??= $var_5;
echo "\$var_4 ??= \$var_5; // value of \$var_4: ".$var_4."<br/><br/>";
$var_6 = 132;
echo "\$var_6 = 132;<br/>";
$var_7 = 588;
echo "\$var_7 = 588;<br/>";
$var_6 ??= $var_7;
echo "\$var_6 ??= \$var_7; // value of \$var_6: ".$var_6."<br/>";



// ##### NULL-COALESCE OPERATOR
echo "<h3>Null-coalesce operator:</h3>";
$var_8 = null ?? 25;
echo "\$var_8 = null ?? 25; // value of \$var_8: ".$var_8."<br/>";
$var_8 = 10 ?? 13;
echo "\$var_8 = 10 ?? 13; // value of \$var_8: ".$var_8."<br/>";



// ##### COMPARISON OPERATORS
echo "<h3>Comparison operators:</h3>";
echo "Equality: 5 == \"5\" : ".debug((5 == "5"), false)."<br/>";
echo "Identity: 5 === 5 : ".debug((5 === 5), false)."<br/>";
echo "Identity: 5 === \"5\" : ".debug((5 === "5"), false)."<br/>";
echo "Not-equal: 5 != \"5\" : ".debug((5 != "5"), false)."<br/>";
echo "Not-equal: 5 != 6 : ".debug((5 != 6), false)."<br/>";
echo "Not-identical: 5 !== \"5\" : ".debug((5 !== "5"), false)."<br/>";
echo "Less than: 5 < 5 : ".debug((5 < 5), false)."<br/>";
echo "Less than: 5 < 6 : ".debug((5 < 6), false)."<br/>";
echo "Greater than: 5 > 5 : ".debug((5 > 5), false)."<br/>";
echo "Greater than: 6 > 5 : ".debug((6 > 5), false)."<br/>";
echo "Less or equal than: 6 <= 5 : ".debug((6 <= 5), false)."<br/>";
echo "Less or equal than: 5 <= 5 : ".debug((5 <= 5), false)."<br/>";
echo "Greater or equal than: 5 >= 6 : ".debug((5 >= 6), false)."<br/>";
echo "Greater or equal than: 6 >= 6 : ".debug((6 >= 6), false)."<br/>";
echo "Spaceship: 4 <=> 9 : ".debug((4 <=> 9), false)."<br/>";
echo "Spaceship: 9 <=> 9 : ".debug((9 <=> 9), false)."<br/>";
echo "Spaceship: 14 <=> 9 : ".debug((14 <=> 9), false)."<br/>";



// ##### INCREMENTATION OPERATORS
echo "<h3>Incrementation operators:</h3>";
$var_9 = 1;
echo "\$var_9 = 1;<br/>";
echo "++\$var_9; // eval value: ".++$var_9." statement end value: ".$var_9."<br/><br/>";
$var_10 = 1;
echo "\$var_10 = 1;<br/>";
echo "\$var_10++; // eval value: ".$var_10++." statement end value: ".$var_10."<br/><br/>";
$var_11 = 1;
echo "\$var_11 = 1;<br/>";
echo "--\$var_11; // eval value: ".--$var_11." statement end value: ".$var_11."<br/><br/>";
$var_12 = 1;
echo "\$var_12 = 1;<br/>";
echo "\$var_12--; // eval value: ".$var_12--." statement end value: ".$var_12."<br/>";



// ##### LOGIC OPERATORS
echo "<h3>Logic operators:</h3>";
$true = true;
$false = false;
echo "<strong>With \$true = true; and \$false = false; then:</strong><br/><br/>";
echo 'AND: ($true && $false) is '.debug(($true && $false), false)."<br/>";
echo 'AND: ($true and $true) is '.debug(($true and $true), false)."<br/>";
echo 'AND: ($false && $false) is '.debug(($false && $false), false)."<br/>";
echo 'OR: ($true || $false) is '.debug(($true || $false), false)."<br/>";
echo 'OR: ($true or $true) is '.debug(($true or $true), false)."<br/>";
echo 'OR: ($false || $false) is '.debug(($false || $false), false)."<br/>";
echo 'NOT: (!$false) is '.debug((!$false), false)."<br/>";
echo 'NOT: (!$true) is '.debug((!$true), false)."<br/>";
echo 'XOR: ($false xor $false) is '.debug(($false xor $false), false)."<br/>";
echo 'XOR: ($true xor $true) is '.debug(($true xor $true), false)."<br/>";
echo 'XOR: ($false xor $true) is '.debug(($false xor $true), false)."<br/>";



// ##### TERNARY OPERATOR
echo "<h3>Ternary operators:</h3>";
echo '(true ? 1 : 2) is '.debug((true ? 1 : 2), false)."<br/>";
echo '(false ? 1 : 2) is '.debug((false ? 1 : 2), false)."<br/>";



// ##### ARRAY OPERATORS
echo "<h3>Array operators:</h3>";
$array1 = [1, 2];
$array2 = [3, 4, 5];
echo "<strong>With \$array1 = [1, 2]; and \$array2 = [3, 4, 5]; then:</strong><br/><br/>";
echo 'UNION: ($array1 + $array2) is '.debug(($array1 + $array2), false)."<br/>";
echo 'ARRAY ACCESS: $array2[0] is '.debug($array2[0], false)."<br/>";
$array1[0] = 99;
echo 'ARRAY ACCESS (REASSIGNMENT): $array1[0] = 99; $array1 is '.debug($array1, false)."<br/>";
$array2[] = 6;
echo 'ARRAY ACCESS (VALUE PUSH): $array2[] = 6; $array2 is '.debug($array2, false)."<br/>";



// ##### INSTANCEOF OPERATOR
echo "<h3>Instanceof operator:</h3>";
$exception = new Exception();
echo "<strong>With \$exception = new Exception(); then:</strong><br/><br/>";
echo 'INSTANCEOF: ($exception instanceof Throwable) is '.debug(($exception instanceof Throwable), false)."<br/>";



// ##### CALL OPERATOR
echo "<h3>Call operator:</h3>";
$func = function(mixed $arg) {
    echo $arg."<br/>";
};
echo '<strong>With $func = function(mixed $arg) { echo $arg."&lt;br/&gt;"; }; then:</strong><br/><br/>';
echo '$func(17); <br/>';
$func(17);
echo '$func("hello!"); <br/>';
$func("hello!");