<?php

/* 
this program outputs 'welcome to php!' to the browser 
this is done using the echo keyword
*/
echo "welcome to php!";




// -->> other functions to output to broswer:

// print - Similar to echo, but a bit slower
print 'Hello';

// print_r - Gives a bit more info. Can be used to print arrays
print_r('Hello');
print_r([1, 2, 3]);

// var_dump - Even more info like data type and length
var_dump('Hello');
var_dump([1, 2, 3]);
var_export('Hello');

// Escaping characters with a backslash
echo "Is your name O\'reilly?";


// closing php tag optional unless you have html 
?>

