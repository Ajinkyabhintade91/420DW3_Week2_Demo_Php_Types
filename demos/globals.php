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
<strong>
$a_var = 12;<br/>
function test1() : void {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;$local_var = $a_var; // $a_var is undefined here<br/>
}<br/><br/>
function test2() : void {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;$a_var = 15; // $a_var is a local variable here, not the global one<br/>
}<br/><br/>
function test3() : void {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;global $a_var;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;$a_var = 15; // $a_var is the global one here.<br/>
}<br/><br/>
function test4() : void {<br/>
&nbsp;&nbsp;&nbsp;&nbsp;static $static_var;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;$static_var ??= 0;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;$static_var++;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;echo $static_var."&lt;br/&gt;";<br/>
}<br/><br/>
</strong>
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