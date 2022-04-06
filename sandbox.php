<?php 


$file = 'myname.txt';

if(file_exists($file)) {
    //   // Returns the content and number of bytes read from the file on success, or FALSE on failure.
    echo readfile('myname.txt');
    }

