<?php
declare(strict_types=1);

/*
 * Week2_Demo_Php_Types control_structures.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-16
 * (c) Copyright 2023 Marc-Eric Boury 
 */


// ##### IF... ELSEIF... ELSE CONDITIONALS
echo "<h3>if... elseif... else:</h3>";
echo <<<'NOWDOC'
<pre>// you can test your own logical expressions here, just change the true || false expressions
$logical_expression = true || false;
$other_logical_expression = true || false;
if ($logical_expression) {
    echo "if block was executed!&lt;br/&gt;";
} elseif ($other_logical_expression) {
    // elseif blocks are optional; you can do conditionals without any elseif blocks.
    // you can add as many elseif blocks as you require
    echo "elseif block was executed!&lt;br/&gt;";
} elseif (false) {
    // Second (useless here) elseif block
    echo "second elseif block was executed!&lt;br/&gt;";
} else {
    // the else block is optional; you can do conditionals without a else block.
    // only one else block can be defined for each if... elseif... else... conditional
    echo "else block was executed!&lt;br/&gt;";
}</pre>
NOWDOC;

// you can test your own logical expressions here, just change the true || false expressions
$logical_expression = true || false;
$other_logical_expression = true || false;
if ($logical_expression) {
    echo "if block was executed!<br/>";
} elseif ($other_logical_expression) {
    // elseif blocks are optional; you can do conditionals without any elseif blocks.
    // you can add as many elseif blocks as you require
    echo "elseif block was executed!<br/>";
} elseif (false) {
    // Second (useless here) elseif block
    echo "second elseif block was executed!<br/>";
} else {
    // the else block is optional; you can do conditionals without a else block.
    // only one else block can be defined for each if... elseif... else... conditional
    echo "else block was executed!<br/>";
}



// ##### SWITCH-CASE CONDITIONAL
echo "<h3>Switch-Case Conditional</h3>";
echo <<<'NOWDOC'
<pre>// note: the following expression returns the current day-of-week as a string
$day_of_week = date('l', strtotime("now"));
switch ($day_of_week) {
    case "Monday":
        echo "Today is Monday, dammit :(  &lt;br/&gt;";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        // this block executes for Tuesday, Wednesday and Thursday cases
        echo "Today is $day_of_week &lt;br/&gt;";
        break;
    case "Friday":
        echo "Finally it's Friday! &lt;br/&gt;";
        break;
    case "Saturday":
    case "Sunday":
        // this block executes for Saturday and Sunday cases
        echo "Who cares? its the weekend! &lt;br/&gt;";
        break;
    default:
        // this block executes if none of the previously defined cases match the
        // switch value. Since its always at the end, it doesnt need a break statment
        echo "Hmmm, I made a mistake somewhere... &lt;br/&gt;";
}</pre>
NOWDOC;

// note: the following expression returns the current day-of-week as a string
$day_of_week = date('l', strtotime("now"));
switch ($day_of_week) {
    case "Monday":
        echo "Today is Monday, dammit :( <br/>";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        // this block executes for Tuesday, Wednesday and Thursday cases
        echo "Today is $day_of_week<br/>";
        break;
    case "Friday":
        echo "Finally it's Friday!<br/>";
        break;
    case "Saturday":
    case "Sunday":
        // this block executes for Saturday and Sunday cases
        echo "Who cares? its the weekend!<br/>";
        break;
    default:
        // this block executes if none of the previously defined cases match the
        // switch value. Since its always at the end, it doesnt need a break statment
        echo "Hmmm, I made a mistake somewhere...<br/>";
}



// ##### FOR... LOOP
echo "<h3>for... loop</h3>";
echo <<<'NOWDOC'
<pre>for ($iterator = 0; $iterator < 10; $iterator++) {
    echo '$iterator value: '.$iterator.'&lt;br/&gt;';
}</pre>
NOWDOC;
for ($iterator = 0; $iterator < 10; $iterator++) {
    echo '$iterator value: '.$iterator.'<br/>';
}



// ##### FOR... LOOP
echo "<h3>foreach loops</h3>";
echo <<<'NOWDOC'
<pre>$array = ["first" => 9, "second" => 8, "third" => 7];
// base foreach loop
foreach ($array as $element) {
    echo 'Element value: ['.$element.']&lt;br/&gt;';
}

// foreach loop with key/value pair access
foreach ($array as $key => $value) {
    echo 'Element with key ['.$key.'] has value: ['.$value.']&lt;br/&gt;';
}</pre>
NOWDOC;
$array = ["first" => 9, "second" => 8, "third" => 7];
// base foreach loop
foreach ($array as $element) {
    echo 'Element value: ['.$element.']<br/>';
}
echo '<br/>';
// foreach loop with key/value pair access
foreach ($array as $key => $value) {
    echo 'Element with key ['.$key.'] has value: ['.$value.']<br/>';
}



// ##### WHILE... LOOP
echo "<h3>while... loop</h3>";
echo <<<'NOWDOC'
<pre>$iterator = 0;
while ($iterator < 5) {
    echo "\$iterator value: [$iterator]&lt;br/&gt;";
    $iterator++;
}</pre>
NOWDOC;
$iterator = 0;
while ($iterator < 5) {
    echo "\$iterator value: [$iterator]<br/>";
    $iterator++;
}



// ##### DO... WHILE LOOP
echo "<h3>Do... while loop</h3>";
echo <<<'NOWDOC'
<pre>$iterator = 0;
do {
    echo "\$iterator value: [$iterator]&lt;br/&gt;";
    $iterator++;
} while ($iterator < 5);

$limiter = false;
do {
    echo "The block still executes once before the while condition is checked.&lt;br/&gt;";
} while ($limiter);</pre>
NOWDOC;
$iterator = 0;
do {
    echo "\$iterator value: [$iterator]<br/>";
    $iterator++;
} while ($iterator < 5);
echo '<br/>';
$limiter = false;
do {
    echo "The block still executes once before the while condition is checked.<br/>";
} while ($limiter);