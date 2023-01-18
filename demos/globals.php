<?php
declare(strict_types=1);

/*
 * Week2_Demo_Php_Types globals.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-15
 * (c) Copyright 2023 Marc-Eric Boury 
 */



// ##### SCOPES
echo "<h3>Global scope:</h3>";
echo <<<'NOWDOC'
<pre>
$a_var = 12;
function test1() : void {
    $local_var = $a_var; // $a_var is undefined here
}
function test2() : void {
    $a_var = 15; // $a_var is a local variable here, not the global one
}
function test3() : void {
    global $a_var;
    $a_var = 15; // $a_var is the global one here.
}
function test4() : void {
    static $static_var;
    $static_var ??= 0;
    $static_var++;
    echo $static_var."&lt;br/&gt;";
}
</pre>
NOWDOC;
$a_var = 12;
function test1() : void {
    $local_var = $a_var;
}
function test2() : void {
    $a_var = 15;
}
function test3() : void {
    global $a_var;
    $a_var = 15;
}
function test4() : void {
    static $static_var;
    $static_var ??= 0;
    $static_var++;
    echo $static_var."<br/>";
}



// ##### LOCAL FUNCTION SCOPE
echo "<h3>Call operator:</h3>";